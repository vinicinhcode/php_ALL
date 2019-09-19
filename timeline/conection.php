<?php 

class bd{

	private static $host = "localhost";
	private static $user = "root";
	private static $pass = "";
	private static $DB = "timeline";	

	private static $con = null;


	private static function connect(){

		try{
			if(self::$con == null){
				self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$DB, self::$user, self::$pass);

				if(!empty(self::$con)):
					return self::$con;
				endif;
				
			}
		}catch(Exception $e){

			echo "Error ao conectar ao servidor !<br>";
			echo "Error: " . $e->getMessage();
			die;

		}

	}


	public function getConn(){

		return self::connect();
	}

	public function closeConn(){

		self::$con = null;

	}

}

?>