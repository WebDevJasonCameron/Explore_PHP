<?php

class Database {

  // PROPs
  public $conn;

  // CONs
  /**
   * Constructor for Databse class
   * 
   * @param array $config
   */
  public function __construct($config) {

    $dsn = "mysql:host={$config['host']};
            port={$config['port']};
            bname={$config['dbname']}";


    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->conn = new PDO($dsn, $config['username'], $config['password']);
      echo "connected";
    } catch (PDOException $e) {
      throw new Exception("Database connection failed: {$e->getMessage()}");
    }

  }
}