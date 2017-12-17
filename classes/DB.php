<?php

	require_once 'config.php';

	class DB {
		private static $instance;
		private $db;

		private function __construct($host, $user, $passwd, $name){
			$this->db = new mysqli($host, $user, $passwd, $name);
			if($this->db->connect_error)
				die('Cannot connect to the database!');
		}

		public static function getInstance(){
			if(!self::$instance)
				self::$instance = new DB(
					constant('DB_HOST'),
					constant('DB_USER'), 
					constant('DB_PASSWD'), 
					constant('DB_NAME')
				);
			return self::$instance;
		}

		public function getPages(){
			return $this->db->query(
				'SELECT uri, id, title, metatitle, metadescription, content FROM pages WHERE active;'
			)->fetch_all(MYSQLI_ASSOC);
		}

		public function getPageByUri($uri){
			return $this->db->query(sprintf('SELECT * FROM pages WHERE uri LIKE "%s";', $uri))
				->fetch_assoc();
		}

		public function query($query){
			$result = $this->db->query($query);
			return $result->fetch_all(MYSQLI_ASSOC);
		}

		public static function close(){
			if(self::$instance){
				self::$instance->db->close();
				self::$instance= NULL;
			}
		}
	}
?>
