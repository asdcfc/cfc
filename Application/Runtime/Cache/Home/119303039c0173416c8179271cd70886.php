<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>首页</title>
<link rel="shortcut icon" href="/Public/images/ico.ico" type="image/x-icon">
<meta name="keyword" content="首页">
<meta name="description" content="首页">
<link rel="stylesheet" type="text/css" href="/Public/css/base.css?2">
<link rel="stylesheet" type="text/css" href="/Public/css/style.css?1">
<script src="/Public/js/jquery-1.8.2.min.js"></script>

<script>
function shield(){
    var s = document.getElementById("reg");
    s.style.display = "block";
    
    var l = document.getElementById("reg_div");
    l.style.display = "block";
}

function cancel_shield(){
    var s = document.getElementById("reg");
    s.style.display = "none";
    
    var l = document.getElementById("reg_div");
    l.style.display = "none";
}
</script>

</head>

<body>
<!--header-->
<div class="header">
  <div class="header_top clear">
    <div class="logo left"> 
      <!--logo尺寸为160*62--> 
      <a href="/"><img src="/Public/images/logo.png" ></a> </div>
    <div class="header_right right">
    <li class="i_user left"><a href="#" class="header_right_a"><?php echo ($user['user_name']); ?></a></li>
    <li class="i_message left"><a href="#" class="header_right_a">message</a></li>
    <?php if($user['user_id'] < 1): ?><li class="i_exit left"><a href="<?php echo U('/Home/Index/login');?>" class="header_right_a">login</a></li>
    <?php else: ?>
        <li class="i_exit left"><a href="<?php echo U('/Home/Index/logout');?>" class="header_right_a">logout</a></li><?php endif; ?>
      <div class="lang">
       <span class="lang-cn"><a href="#" >中文版</a></span> /
       <span class="lang-en"><a href="#" >English</a></span>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="navBox">
      <ul class="nav clear">
        <li class="nav_li left"> <a href="<?php echo U('/Home');?>" class="nav_a <?php if(ACTION_NAME == 'index'): ?>active<?php endif; ?>">首页</a> </li>
        <li class="nav_li left"> <a href="<?php echo U('/Home/Index/menber');?>" class="nav_a <?php if(ACTION_NAME == 'menber'): ?>active<?php endif; ?>">会员中心</a>
        </li>
        <li class="nav_li left"> <a href="<?php echo U('/Home/Index/product');?>" class="nav_a <?php if(ACTION_NAME == 'product'): ?>active<?php endif; ?>">产品展示</a>
        </li>
        <li class="nav_li left"> <a href="<?php echo U('/Home/Index/tra');?>" class="nav_a <?php if(ACTION_NAME == 'tra'): ?>active<?php endif; ?>">交易中心</a>
        </li>
        <li class="nav_li left"> <a href="<?php echo U('/Home/Index/order');?>" class="nav_a <?php if(ACTION_NAME == 'order'): ?>active<?php endif; ?>">交易记录</a>
        </li>
        <li class="nav_li left">  <a href="<?php echo U('/Home/Index/notice');?>" class="nav_a <?php if(ACTION_NAME == 'notice'): ?>active<?php endif; ?>">系统公告</a>  <ul>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>



<!--index-->
<div class="index">
        <div class="index-content max-width">
          <div class="left-tips">
                <div class="title dark-red"></div>
                <ul>
                    <li>手游+分享经济+消费大数据</li>
                    <li>实施大数据汇总分析</li>
                    <li>缔造分享型经济生态圈</li>
                </ul>
                <div class="index-btn">
                    <a href="javascript:shield()" class="btn btn-dark-red">申请会员</a>
                </div>
            </div>
            <div class="center-logo">
                <img src="/Public/images/center.png" alt="">
            </div>
        </div>
    </div>
<!--index-->
<!--footer-->
<div class="footerBj">
  <div class="footer clear">
   <img src="/Public/images/img_footer.jpg">
    
  </div>
</div>


<div id="reg"></div>
<div id="reg_div">
<div style="float:right"><a href="javascript:cancel_shield()">关闭</a></div>
<form id="regisform">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="150" class="tbright">用户名：</td>
    <td class="tbleft"><input type="text" class="input240" name="user_name" id="user1" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">手机号：</td>
    <td class="tbleft"><input type="text" class="input240" name="mobile" id="user2" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">推荐人：</td>
    <td class="tbleft"><input type="text" class="input240" name="recommender" id="user3" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">登陆密码：</td>
    <td class="tbleft"><input type="password" class="input240" name="user_key" id="user4" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">开户账号：</td>
    <td class="tbleft"><input type="text" class="input240" name="open_acount" id="user5" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">账户名：</td>
    <td class="tbleft"><input type="text" class="input240" name="open_name" id="user6" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">开户银行：</td>
    <td class="tbleft"><input type="text" class="input240" name="open_bank" id="user7" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">身份证号码：</td>
    <td class="tbleft"><input type="text" class="input240" name="id_card" id="user8" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright">交易密码：</td>
    <td class="tbleft"><input type="password" class="input240" name="transaction_password" id="user9" placeholder="*必填"></td>
  </tr>
  <tr>
    <td class="tbright"></td>
    <td class="tbleft"><input type="checkbox" name="checkbox" id="checkbox" checked/>
      <label for="checkbox"> 我已阅读并同意《注册协议》</label></td>
  </tr>
 <tr>
    <td align="tbright" ></td>
    <td align="tbleft" ><input id='regis' type="button" class="button" value="提交注册"></td>
    </tr>

</table>
</form>

</div>
</body>
<script type="text/javascript">
  $(function(){
        $('#checkbox').click(function(){
            alert('内容如下!');
        })
        $('#regis').click(function(){
            if(!$('#user1').val()){
                alert('用户名不能为空!');
                return false;
            }else if(!$('#user2').val()){
                alert('手机号不能为空!');
                return false;
            }else if(!$('#user3').val()){
                alert('分享人不能为空!');
                return false;
            }else if(!$('#user4').val()){
                alert('登陆密码不能为空!');
                return false;
            }else if(!$('#user5').val()){
                alert('开户账号不能为空!');
                return false;
            }else if(!$('#user6').val()){
                alert('账户名不能为空!');
                return false;
            }else if(!$('#user7').val()){
                alert('开户银行不能为空!');
                return false;
            }else if(!$('#user8').val()){
                alert('交易密码不能为空!');
                return false;
            }else if(!$('#user9').val()){
                alert('身份证号码不能为空!');
                return false;
            }else if(!$('#checkbox').attr('checked')){
                alert('请阅读协议并勾选!');
                return false;
            }
            var param = $('#regisform').serialize();
            $.ajax({
                url: '/index.php/Home/Index/regis',
                type: 'POST',
                dataType: 'json',
                data:param,
                success: function(json){
                    if(json.state == 1){
                        $('#regisform')[0].reset();
                        cancel_shield();
                        window.location.href='<?php echo U("/Home/Index/login");?>';
                        alert(json.message);
                    }else{
                        alert(json.message);
                    }
                }
            })
        })
    })

</script>
</html>