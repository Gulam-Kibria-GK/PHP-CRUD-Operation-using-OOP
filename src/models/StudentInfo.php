<?php

require_once "$BASE_PATH/utils.php";
require_once "$BASE_PATH/src/Database.php";

//use Database;

class StudentInfo
{

  private $name;
  private $userid;
  private $level;
  private $group;
  private $roll;
  private $role;
  private $description;

  // constructor with name and price
  public function __construct($name, $userid, $level, $group, $roll, $role, $description)
  {
    $this->name = $name;
    $this->userid = $userid;
    $this->level = $level;
    $this->group = $group;
    $this->roll = $roll;
    $this->role = $role;
    $this->description = $description;
    //dd($this);
  }
  public function store()
  {
    //new line afet print this text
    //print_r("print or show all the data for test \n");
    //dd($this);

    try {
      print_r("query executed 1\n<br>");
      $db = new Database();
      $db->connect();

      $sql = "INSERT INTO student (name, userid, level, `group`, roll, role, description) 
              VALUES (:name, :userid, :level, :group, :roll, :role, :description)
              ";
      $stmt = $db->prepare($sql);

      $stmt->bindParam(':name', $this->name);
      $stmt->bindParam(':userid', $this->userid);
      $stmt->bindParam(':level', $this->level);
      $stmt->bindParam(':group', $this->group);
      $stmt->bindParam(':roll', $this->roll);
      $stmt->bindParam('role', $this->role);
      $stmt->bindParam(':description', $this->description);
      print_r("query executed 2<br>");
      $stmt->execute();
      print_r("query executed 3<br>");
      return true;
    } catch (\PDOException $e) {
      print_r("\n");
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
