
<?php
	

	/**
	 * Database config and access file
	 */
	class DbConfig 
	{
		
		private $host = "localhost";
		private $db_name = "testdb";
		private $password = "hisable";
		private $username = "root";

		// get the database connection
		public function getConnection()
		{
			$this->conn = null;
			try {
				$this->conn = new  PDO("mysql:host=$this->host;dbname=$this->db_name",$this->username, $this->password);
				 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOExcepiton $ex) {
				echo("Connection error: " .$ex->getMessage());
			}
			return $this->conn;
		}


	}

?>