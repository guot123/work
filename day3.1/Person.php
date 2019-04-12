<?php
class Person{
    public $_sex;
    public $_age;
    public $_name;
    public function __construct($name,$sex){
        $this->_name = $name;
        $this->_sex = $sex;

    }
    public function run(){
        $str = '姓名'.$this->_name;
        $str = '性别'.$this->_sex;
        $str = '在奔跑';
        echo $str;
        return $str;
    }
    public function __call($name,$arguments){
        echo $name."not isset";
    }
    public function __get($name){
        if (isset($this->$name)) {
            return $this->$name;
        }else {
            return "属性不存在";
        }
    }
    public function __set($name,$value){
        echo "set error";
    }
}

?>