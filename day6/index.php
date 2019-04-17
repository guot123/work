<?php
//判断是否缓存
session_start();
$user = $_SESSION['user'];
//判断是否登录 如果没有登录进入登录页面
if (empty($user)){
    header("location:login.php");
} else {
    //如果已经登录跳转admin页面
    header("location:admin.php");
}
?>
