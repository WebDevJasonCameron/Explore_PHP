<?php

namespace App\Controllers;
use Framework\Database;

class HomeController {

  // PROPs
  protected $db;

  // CONs
  public function __construct() {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  // METHs
  /**
   * Show the latest listings
   * 
   * @return void
   */
  public function index() {
    $listings = $this->db->query('SELECT * FROM listings LIMIT 6')->fetchAll();

    loadView("home", 
            [
              'listings' => $listings
            ]
    );  }
}