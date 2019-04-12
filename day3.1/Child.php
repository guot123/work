<?php
class Child{
    public static $totaloount=0;
    public $_name;
    public function __construct($name){
        //给成员属性赋值
        $this->_name = $name;

    }
    public function j(){
        $this->joinGame();
    }
    public function joinGame(){
        echo $this->joinGame;
        self::$totaloount++;
    }
    //返回加入孩子人数
    public function getTotalChild(){
        return self::$totaloount;
    }
    // public static function a(){

    // }
}

?>