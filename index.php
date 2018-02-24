<?

/**
* Name: Hydra
* Description: a mini php framework
* Author :attax 
* github : https://github.com/attax/Hydra
* Email: westooy@gmail.com
* Licence: MIT
* Create: 2018/02/04 14:30
*/

/**
* 获取index.php入口文件所在目录
* 定义application路径
*/
// 项目根路径
define('BASEPATH', dirname(__FILE__));
define('APPPATH',trim(__DIR__.DIRECTORY_SEPARATOR));

// echo BASEPATH;
// echo APPPATH;

//获取请求地址
// /index.php
$root=$_SERVER['SCRIPT_NAME'];
// /index.php?a=1&b=2&c=3
$request=$_SERVER['REQUEST_URI'];

echo $root;
echo $request;

$URI = array();

//获得index.php 后面的地址     
$url = trim(str_replace($root, '', $request), '/'); 

echo $url;

//如果为空，则是访问根地址     
if (empty($url)) {  
    //默认控制器和默认方法  
    $class = 'index';  
    $func = 'welcome';  
} else {  
    $URI = explode('/', $url);  
  
    //如果function为空 则默认访问index     
    if (count($URI) < 2) {  
        $class = $URI[0];  
        $func = 'index';  
    } else {  
        $class = $URI[0];  
        $func = $URI[1];  
    }  
}  