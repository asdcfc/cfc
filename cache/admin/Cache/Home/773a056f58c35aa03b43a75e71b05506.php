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
  <div class="news_title"> 系统公告</div>
    <div class="newsbox">
      <ul class="newsUl">
        <li class="newsLi clear"> <a href="#" class="left f_14">系统公告</a> <span class="right">2015-09-30 13:52</span> </li>
        <li class="newsLi clear"> <a href="#" class="left f_14">系统公告</a> <span class="right">2015-09-30 13:52</span> </li>
        <li class="newsLi clear"> <a href="#" class="left f_14">系统公告</a> <span class="right">2015-09-30 13:52</span> </li>
        <li class="newsLi clear"> <a href="02.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="01.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="02.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="01.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="02.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="01.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
        <li class="newsLi clear"> <a href="02.html" class="left f_14">系统公告</a> <span class="right">2017-04-03 13:52</span> </li>
      </ul>
    </div>
</div>
<!--main-->
<!--footer-->
<div class="footerBj">
  <div class="footer clear">
   <img src="/Public/images/img_footer.jpg">
    
  </div>
</div>



</body>
</html>