<?php

class database {

    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function __construct() {
		$this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->baseName = 'jptv20_valiantgames';
        $this->connect();
    }

    function __destruct() {
        $this->disconnect();
    }

    function connect() {
        try {
            $this->conn = new PDO('mysql:host='.$this->host.''.';dbname='.$this->baseName.'', $this->user,$this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (Exception $e) {
            die('Connection failed : '.$e->getMessage());
        }

        return $this->conn;
    }
    

    function disconnect() {
        if ($this->conn) {
            $this->conn = null;
        }
    }

    function getOne($query) {
		try{
			$result = $this->conn->prepare($query);
			$result->execute();
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$response = $result->fetch();

			return $response;
            
        } catch (Exception $ex) {
            echo "Error:".$ex->getMessage();
        } 
    }

    function getAll($query) {
		try{
            $result = $this->conn->prepare($query);
			$result->execute();
			
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$response = $result->fetchAll();
			return $response;
            
        } catch (Exception $ex) {
            echo "Error:".$ex->getMessage();
        }
    }
    
    function executeRun($query) {
        try{
            $response=  $this->conn->exec($query);
            return $response;
            
        } catch (Exception $ex) {
            echo "Error:".$ex->getMessage();
        }   
    }

    function getLastId() {
        $lastId = $this->conn->lastInsertId();
        return $lastId;
    }
}
?>