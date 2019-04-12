<?php
include 'Person.php';
include 'Walk.php';
include 'Student.php';

$obj1 = new Student('张珊1',11);
$obj2 = new Student('张珊2',15);
$obj3 = new Student('张珊3',19);
$obj4 = new Student('张珊4',10);
$obj5 = new Student('张珊5',5);
$obj6 = new Student('张珊6',22);
$obj7 = new Student('张珊7',11);
$obj8 = new Student('张珊8',8);

// echo $obj8::$_maxname;
echo $obj8->run();
?>