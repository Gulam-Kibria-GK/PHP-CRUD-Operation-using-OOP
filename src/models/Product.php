<?php

require_once '../Database.php';

use Database;

class Product {
  private $name;
  private $price;

  // constructor with name and price
  public function __construct($name, $price) {

  }

  public function store() {
    $db = Database::getInstance();

    // fire a query to store the product

    $db->query("INSERT INTO products (name, price) VALUES (:name, :price)");

    $db->bind(':name', $this->name);
  }

  public function index() {

  }

  public function show($id) {

  }

  public function update($name, $price) {

  }

  public function delete($id) {
  }

  // destructor
  public function __destruct() {
    $db->close();
  }
}