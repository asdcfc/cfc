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
<!--main-->
<div class="main clear">
<form id="login">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="65" colspan="2">&nbsp;</td>
      </tr>
    <tr>
      <td width="40%" class="tbright">用户：</td>
      <td><input name="username" type="text" class="input240" id="username"  /></td>
    </tr>
    <tr>
      <td class="tbright">密码：</td>
      <td><input name="password" type="password" class="input240" id="username2"  /></td>
    </tr>
    <tr>
      <td class="tbright">
      <td height="40" ><input type="checkbox" name="checkbox" id="checkbox" />
        <label for="checkbox">记住密码</label></td>
    </tr>
   
    <tr>
      <td height="40">&nbsp;</td>
      <td colspan="1"><input name="button" type="button" class="button" id="button2" value="登 录" /></td>
      </tr>
  </table>
</form>
</div>
<script type="text/javascript">
  $(function(){
    $('#button2').click(function(){
        if(!$('#username').val()){
            alert('用户名不能为空!');
            return false;
        }else if(!$('#username2').val()){
            alert('密码不能为空!');
            return false;
        }
        var param = $('#login').serialize();
        $.ajax({
            url: '<?php echo U("/Home/Index/login");?>',
            type: 'POST',
            dataType: 'json',
            data:param,
            success: function(json){
                if(json.status == 1){
                    alert('登录成功!');
                    window.location.href='<?php echo U("/Home/index");?>';
                }else{
                    alert(json.msg);
                }
            }
        })
    })
})
</script>
<div class="footerBj">
  <div class="footer clear">
   <img src="/Public/images/img_footer.jpg">
    
  </div>
</div>