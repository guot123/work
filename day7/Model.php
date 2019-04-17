<?php
	class Model{
		private $_pdo;
		private $_table;
		public function __construct(){
			$single = Single::getInstance();
			$this->_pdo = $single->getPdo();
		}
		public function table($tablename){
			$this->_table = $tablename;
			return $this;
		}
		public function field($fields){
			$this->_fields = $fields;
			return $this;
		}
		public function where($where){
			$w = '';
			if($where){
				foreach ($where as $k => $v){
					$w.$k."='".$v."' and ";
				}
				$w = substr($w,0,-4);
				$w = 'where '.$w;
			}
			$this->_where = $w;
			return $this;
		}
		public function select(){
			$sql = "select $this->_fields  from $this->_table $this->_where";
			return $this->_pdo->query($sql)->fetchAll();
		}
	}
?>