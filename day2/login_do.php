<?php 
header("content-type:text/html;charset=utf8");

//接值
$name = isset( $_POST['uname']) ?  $_POST['uname'] :'';
$pwd = isset( $_POST['pwd']) ?  $_POST['pwd'] :'';

$pdo = new PDO('mysql:host=127.0.0.1;dbname=exam','root','');
$sql = "select * form user where name='$name' and pwd='$pwd'";

$res=$pdo->exec($sql);
if ($res['pwd'] == $pwd || $res['name'] == $name) {
	echo "<script>alert('登录成功');location.href='#';</script>";
}else{
	echo "<script>alert('密码错误,请重新登录');location.href='login.php';</script>";
}
