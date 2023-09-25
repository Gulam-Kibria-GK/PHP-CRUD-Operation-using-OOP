<?php

//database conection

namespace App;

use PDO;
use PDOException;

class Database
{

  private $servername = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbname = 'oop_crud';
  private $conn;

  function __construct()
  {
    try {
      //pdo database
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
  }


  public function connect()
  {
    return $this->conn;
  }
  public function prepare($sql)
  {
    return $this->conn->prepare($sql);
  }
  public function close()
  {
    $this->conn = null;
  }
}

//check database connection
//$db = new Database();
