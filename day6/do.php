<?php
$a = $_GET['a'];
if ($a=='checkmobile'){
    //验证手机号是否在数据库已存在
}
include 'ElmUser.php';
if ($a=='login'){
    //接收参数并验证
    $data = $_POST;
    if (empty($data['mobile'])){
        echo "mobile is error";
        exit;
    }
    if (empty($data['pwd'])){
        echo "pwd is error";
        exit;
    }
    //到数据库查询数据
    $objUser = new ElmUser();
    $list = $objUser->getUserPwd($data['mobile'],$data['pwd']);
    if (!$list){
        echo "login is error";
        exit;
    }
    session_start();
    $_SESSION['user'] = ['id'=>$list['id'],'mobile'=>$list['mobile']];
    header('location:index.php');
}
if ($a=='userlist'){
    //从数据库查询数据
    $objUser = new ElmUser();
    $list = $objUser->getList();
    echo json_encode(['status'=>200,'message'=>'','data'=>$list]);
    exit;
}
?>