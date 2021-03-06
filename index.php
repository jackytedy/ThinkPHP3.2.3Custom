<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



require_once "/opt/lampp/htdocs/ThinkPHP3.2.3Custom/vendor/woojean/php-coverage/src/Woojean/PHPCoverage/Injecter.php";
Woojean\PHPCoverage\Injecter::Inject([
    'log_dir'=>'/opt/lampp/htdocs/ThinkPHP3.2.3Custom/App/Runtime/coverage/logs',
    'ignore_file'=>'/opt/lampp/htdocs/ThinkPHP3.2.3Custom/App/Runtime/coverage/ignore.php',
    'is_repeat' => false
]);




// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./App/');

//将此define取消注释,第二个参数填写模块名称,访问首页就可以新建一个模块,在app目录下
//define('BIND_MODULE','Test');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单