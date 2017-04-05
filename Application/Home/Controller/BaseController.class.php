<?php

namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    /*
     * 初始化操作
     */
    public function _initialize() {  
      $/*user = session('user');
      if (intval($user['user_id']) < 1) {
        redirect(U('/Home/index/login'));
        exit;
      }
      $this->assign('user',$user);  */
  	  // $this->session_id = session_id(); // 当前的 session_id
     //  define('SESSION_ID',$this->session_id); //将当前的session_id保存为常量，供其它方法调用
      // 判断当前用户是否手机                
      /*if(isMobile())
          cookie('is_mobile','1',3600); 
      else 
          cookie('is_mobile','0',3600);
           */     
      $this->public_assign(); 
    }
    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    public function public_assign()
    {
       $sys_config = array();
       $tp_config = M('config')->cache(true,TPSHOP_CACHE_TIME)->select();       
       foreach($tp_config as $k => $v)
       {
       	  if($v['name'] == 'hot_keywords'){
       	  	 $sys_config['hot_keywords'] = explode('|', $v['value']);
       	  }       	  
          $sys_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
       }                        
       
       $this->assign('sys_config', $sys_config);
    }

}