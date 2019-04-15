<?php

class Student extends Person implements Walk{
    public static $_maxage=0;
    public static $_maxname='';
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;

        //年龄判断，判断对象的年龄是否大于静态属性值
        if ($age > self::$_maxage) {
            self::$_maxage = $age;
            self::$_maxname = $name;
        }
    }
    public function run(){
        return 'this is student run';
    }
    public function speak(){
        return 'this is student speak';
    }
}
?>