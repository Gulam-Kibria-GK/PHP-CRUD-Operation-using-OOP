<?php

// require_once '../../vendor/autoload.php';

namespace App\Models;

//require_once "$BASE_PATH/utils.php";


use App\Database;

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
  }
  public function store()
  {

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

  public function show_one($id)
  {
    //create a database class object
    $db = new Database();
    $db->connect();
    $sql = "SELECT * FROM student WHERE userid = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }

  public function show_all()
  {
    //create a database class object
    $db = new Database();
    $db->connect();

    $sql = "SELECT * FROM student";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }


  public function update($id)
  {

    // echo '<pre>';
    // var_dump($this);
    // die;
    try {
      //print_r("query executed 1\n<br>");
      $db = new Database();
      $db->connect();
      $sql = "UPDATE student SET name = :name, userid = :userid, level = :level, `group` = :group, roll = :roll, role = :role, description = :description WHERE userid = :id";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':name', $this->name);
      $stmt->bindParam(':userid', $this->userid);
      $stmt->bindParam(':level', $this->level);
      $stmt->bindParam(':group', $this->group);
      $stmt->bindParam(':roll', $this->roll);
      $stmt->bindParam('role', $this->role);
      $stmt->bindParam(':description', $this->description);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return true;
    } catch (\PDOException $e) {
      print_r("\n");
      echo $e->getMessage();
      return false;
    }
  }

  public function delete($id)
  {
    try {
      $db = new Database();
      $db->connect();
      $sql = "DELETE FROM student WHERE userid = :id";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return true;
    } catch (\PDOException $e) {
      print_r("\n");
      echo $e->getMessage();
      return false;
    }
  }

  // destructor
  public function __destruct()
  {
    //$db = new Database();
    //$db->close();
  }
}
