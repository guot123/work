<?php
//包含文件
include 'Person.php';
//实例化
$objPerson = new Person('张三','男');
$sex = $objPerson->_sex;
echo $sex;
//调用方法
// $rs = $objPerson->run();
// var_dump($rs);
// $objPerson1 = new person('李四','男');
// $rs1 = $objPerson->run();
// var_dump($rs1);
$objPerson->hello();

?>