<?php

require_once "$BASE_PATH/utils.php";
require_once "$BASE_PATH/src/Database.php";



//use Database;

class Product
{
  private $name;
  private $email;
  private  $password;
  private $role;
  private $description;

  // constructor with name and price
  public function __construct($name, $email, $password, $role, $description)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->role = $role;
    $this->description = $description;
    //dd($this);
  }
  public function store()
  {
    //print or show all the data for test

    try {
      //dd(($this));
      //print_r("query executed");
      $db = new Database();
      $db->connect();
      $sql = "INSERT INTO student (name, email, password, role, description) VALUES (:name, :email, :password, :role, :description)";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':name', $this->name);
      $stmt->bindParam(':email', $this->email);
      $stmt->bindParam(':password', $this->password);
      $stmt->bindParam(':role', $this->role);
      $stmt->bindParam(':description', $this->description);
      //print_r("query executed 2");
      $stmt->execute();
      //print_r("query executed 3");

      return true;
    } catch (\PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }


  //   public function index()
  //   {
  //   }

  // public function show($id)
  // {
  //   //create a database class object
  // }

  //   public function update($name, $price)
  //   {
  //   }

  //   public function delete($id)
  //   {
  //   }

  //   // destructor
  //   public function __destruct()
  //   {
  //     $db->close();
  //   }
  // }
}
