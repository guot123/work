<?php

class ElmUser{
    private $_db;
    //pdo链接数据库
    public function __construct()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=9a;charset=utf8','root','');
    }
    public function getUserPwd($mobile,$pwd){
        $sql = "select * from elm_user where mobile=:mobile and pwd=:pwd";
        $rtm = $this->_db->prepare($sql);
        $rtm->execute([':mobile'=>$mobile,':pwd'=>$pwd]);
        return $rtm->fetch();
    }
    public function getList(){
        $sql = "select id,mobile from elm_user order by id desc";
        return $this->_db->query($sql)->fetchAll();
    }
}
?>