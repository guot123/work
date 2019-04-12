<?php
include 'Child.php';
$obj1 = new Child('张三');
$obj2 = new Child('张三');
$obj3 = new Child('张三');
$obj1->joinGame();
$obj2->joinGame();
$obj3->joinGame();

echo $obj3->getTotlaloount;
?>