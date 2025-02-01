<?php

namespace App\Controllers;
use Framework\Database;

class ListingController {

  // PROPs
  protected $db;

  // CONs
  public function __construct() {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  // METHs
  /**
   * Show all listings
   * 
   * @return void
   */
  public function index() {
    $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

    loadView("home", 
            [
              'listings' => $listings
            ]
    );  
  }

  /**
   * Show the created listing form
   * 
   * @rerturn void
   */
  public function create() {
    loadView('listings/create');  
  }

  /**
   * Show a single listing
   * 
   * @return void
   */
  public function show() {
    $id = $_GET['id'] ?? '';

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

    loadView('listings/show', [
        'listing' => $listing
    ]);
  }
}