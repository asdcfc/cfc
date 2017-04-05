<?php 


// 应用入口文件
if (extension_loaded('zlib')){
    ob_end_clean();
    ob_start('ob_gzhandler');
}


error_reporting(E_ALL);//显示除去 E_NOTICE 之外的所有错误信息

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

//设置缓存路径
define('RUNTIME_PATH','./cache/admin/');

// 定义应用目录
define('APP_PATH', './Application/');

//  定义插件目录
define('PLUGIN_PATH', APP_PATH . 'plugins/');

// 网站域名
define('SITE_URL','https://'.$_SERVER['HTTP_HOST']); 

//静态缓存文件目录，HTML_PATH可任意设置，此处设为当前项目下新建的html目录
define('HTML_PATH', RUNTIME_PATH . 'html/'); 

//define('BIND_MODULE', 'Admin');
require APP_PATH . '../ThinkPHP/ThinkPHP.php';
