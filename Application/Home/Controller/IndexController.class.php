<?php
 
namespace Home\Controller;
use Think\Page;
use Think\Verify;
class IndexController extends BaseController {
    
    public function _initialize() {  
        $user = session('user');
        if (intval($user['user_id']) == 0) {
            if (ACTION_NAME == 'index' || ACTION_NAME == 'login' || ACTION_NAME == 'regis') {
                
            } else {
                redirect(U('/Home/index/login'));
                exit;
            }
        } else {
            if (ACTION_NAME == 'login') {
                redirect(U('/Home/index'));
                exit;
            }
        }
        $this->assign('user',$user);
    }
    public function index() { 

        $this->display();
    }
    
    public function logout() {
        session(null);
        redirect(U('/Home/index'));
    }
    public function regis()
    {
        $return = array(
            "state" => 0,
            "message" => "注册失败!"
        );
        if(IS_POST){
            $postData = I('post.');
            if(!empty($postData['recommender'])){
                $postData['now_time'] = time();
                $postData['regis_time'] = time();
                $user = M('new_user')->where("user_name='{$postData['user_name']}'")->find();
                if ($user) {
                    $return = array(
                        "state" => 0,
                        "message" => "用户名已存在!"
                        );
                    exit(json_encode($return));
                } else{
                    $uid = M('new_user')->add($postData);
                    if($uid){
                        $return = array(
                            "state" => 1,
                            "message" => "注册成功!"
                            );
                        echo json_encode($return);die;
                    }else{
                        echo json_encode($return);die;
                    }
                }
            } else {
                echo json_encode($return);die;
            }
        }else{
            echo json_encode($return);die;
        }
    }
    /**
     *  公告详情页
     */
    public function notice(){
        $this->display();
    }
    
    //登录
    public function login(){
        if (IS_POST) {
            $result = array();
            $username = I('post.username');
            $password = I('post.password');
            if(!$username || !$password)
                $result= array('status'=>0,'msg'=>'请填写账号或密码');
                $user = M('new_user')->where("user_name='{$username}'")->find();
            if(!$user){
                $result = array('status'=>-1,'msg'=>'账号不存在!');
            }elseif($password != $user['user_key']){
                $result = array('status'=>-2,'msg'=>'密码错误!');
            }else{
                session('user',$user);
                M('new_user')->where("user_id = {$user['user_id']}")->save(array('last_time'=>time()));
                $result = array('status'=>1,'msg'=>'登陆成功','result'=>$user);
            }
            exit(json_encode($result));
        } else {
            $this->display();
        }
    }

    //修改信息
    public function modify()
    {
        $return = array(
            "status" => 0,
            "message" => "信息修改失败!"
        );
        if (IS_POST) {
            $s_user = session('user');
            $info = I('post.info');
            if ($info == 1) {
                $open_name = I('post.open_name');
                $open_bank = I('post.open_bank');
                $open_acount = I('post.open_acount');
                if(!$open_name || !$open_bank || !$open_acount) {
                    $return= array('status'=>0,'msg'=>'银行信息不完整');
                } else {
                    $upd['open_name'] = $open_name;
                    $upd['open_bank'] = $open_bank;
                    $upd['open_acount'] = $open_acount;
                    $user = M('new_user')->where("user_id='{$s_user['user_id']}'")->save($upd);
                }
            } else {
                $mobile = I('post.mobile');
                $email = I('post.email');
                $password = I('post.password');
                $transaction_password = I('post.transaction_password');
                if(!$mobile || !$email) {
                    $return= array('status'=>0,'msg'=>'请填写手机号或邮箱');
                } else {
                    $upd['email'] = $email;
                    $upd['mobile'] =$mobile;
                    if ($password) {
                        $upd['user_key'] =$password;
                    }
                    if ($transaction_password) {
                        $upd['transaction_password'] =$transaction_password;
                    }
                    $user = M('new_user')->where("user_id='{$s_user['user_id']}'")->save($upd);
                }
            }
            $return= array('status'=>1,'msg'=>'修改成功');
            $user = M('new_user')->where("user_id='{$s_user['user_id']}'")->find();
            session('user',$user);
            exit(json_encode($return));
        } else {
            exit(json_encode($return));
        }
    }
    
    // 验证码
    public function verify()
    {
        //验证码类型
        $type = I('get.type') ? I('get.type') : '';
        $fontSize = I('get.fontSize') ? I('get.fontSize') : '40';
        $length = I('get.length') ? I('get.length') : '4';
        
        $config = array(
            'fontSize' => $fontSize,
            'length' => $length,
            'useCurve' => true,
            'useNoise' => false,
        );
        $Verify = new Verify($config);
        $Verify->entry($type);        
    }
    
    // 促销活动页面
    public function promoteList()
    {                          
        $Model = new \Think\Model();
        $goodsList = $Model->query("select * from __PREFIX__goods as g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id   where ".time()." > start_time  and ".time()." < end_time");                        
        $brandList = M('brand')->getField("id,name,logo");
        $this->assign('brandList',$brandList);
        $this->assign('goodsList',$goodsList);
        $this->display();
    }
    
    function truncate_tables (){
        $model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $tables = $model->query("show tables");
        $table = array('tp_admin','tp_config','tp_region','tp_system_module','tp_admin_role','tp_system_menu');
        foreach($tables as $key => $val)
        {                                    
            if(!in_array($val['tables_in_tpshop'], $table))                             
                echo "truncate table ".$val['tables_in_tpshop'].' ; ';
                echo "<br/>";         
        }                
    }

}