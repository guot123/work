<?php
	include 'Single.php';
	include 'Model.php';
	$obj = Single::getInstance();
	$obj1 = Single::getInstance();
	$objModel = new Model();
	$list = $objModel->table('elm_user')->field('mobile')->where(['id'=>1,'mobile'=>'135222'])->select();
	var_dump($list);
	$student = $objModel->table('student')->field('name,age')->where([])->select();
	var_dump($student);
?>