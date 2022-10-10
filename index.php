<?php
session_start();
$base_url='http://localhost/RK_FIRST_PROJECT/';
$__SESSION['base_url'] = $base_url;
$_SESSION['active_url']='';
include 'helper/error.php';
include 'helper/route.php';


if(isset($_GET['r']))
{
    $controller =$_GET['r'];
    switch($controller)
    {
        case 'about':
            $__SESSION['active_url'] ='about';
            include 'controller/aboutcontroller.php';
            break;
        default:
            throwError(404, "Requested page does't exits/");
            break;
    }
    return;
}
else{
    include 'controller/homecontroller.php';
}