<?php
 class Database {
   // Database Params
   private $host = 'localhost';
   private $db_name = 'databasename';
   private $db_username = 'username';
   private $db_password = 'password';
   private $conn;

  //  db connect
  public function connect() {
    $this->conn = null;

    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->db_username, $this->db_password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }

    return $this->conn;
  }
 }