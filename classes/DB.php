<?php

	require_once 'config.php';

	class DB {
		private $instance;
		private $db;

		private function __construct($host, $user, $passwd, $name){
			$db = new mysqli($host, $user, $passwd, $name);
			if($db->connect_error)
				throw new Exception('Cannot connect to the database!');
		}

		public static function getInstance(){
			if(!self::instance)
				self::instance = new DB(
					constant('DB_HOST'),
					constant('DB_USER'), 
					constant('DB_PASSWD'), 
					constant('DB_NAME')
				);
				return self::instance;
		}

		public function query($query){
			$result = $this->db->query($query);
			return $result->fetch_assoc();
		}

		public static function close(){
			if($this->db){
				$this->db->close();
				$this->instance = NULL;
			}
		}
	}
?>
