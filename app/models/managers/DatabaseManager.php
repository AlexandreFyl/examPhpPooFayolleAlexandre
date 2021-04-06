<?php
	abstract class DatabaseManager {
		protected $pdo;
		private $host = 'localhost';
		private $database = 'examphpfayollealexandre';
		private $username= 'root';
		private $password = 'root';
	
		public function __construct(){
			try {
				$this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database . ';charset=UTF8', $this->username, $this->password);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $ex) {
				die('Error '. $ex->getMessage());
			}
		}

	}
?>
