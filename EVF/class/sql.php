<?php 

class sql extends PDO{

	private $conn;


	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=evf", "root", "");

	}

	public function close(){

		$this->conn = null;
		echo "Conexão encerrada!";

	}

	private function setParams($stament, $parameters = array()){

		foreach($parameters as $key => $value) {
			
			$this->setParam($stament, $key, $value);

		}

	}

	private function setParam($stament, $key, $value){

		$stament->bindParam($key, $value);

	}


	public function query($rowQuery, $params = array()){

		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rowQuery, $params = array()):array{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function insert($query, $parameters = array()){

		$stmt = $this->conn->prepare($query);
		$this->setParams($stmt, $parameters);

		try { 

        $this->conn->beginTransaction(); 
        $stmt->execute(); 
        $this->conn->commit(); 
        return $this->conn->lastInsertId();

    } catch(PDOExecption $e) { 

        $this->conn->rollback(); 
        return print "Error!: " . $e->getMessage() . "</br>"; 

    } 

	}


	public function checkAdmin($id) {

		$stmt = $this->conn->prepare("SELECT tb_admin FROM tb_users WHERE id = :ID");

		$this->setParam($stmt, ":id", $id);

		$stms->execute();

		$admin = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$admin = $admin[0];

		return $admin;

	}


}

 ?>