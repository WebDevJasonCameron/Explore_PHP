<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class UserController
{

  // PROPs
  protected $db;

  // CONs
  public function __construct()
  {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  // METHs
  /** Show login page
   * 
   * @return void
   */
  public function login()
  {
    loadView('users/login');
  }

  /** Show the register page
   * 
   * @return void
   */
  public function create()
  {
    loadView('users/create');
  }
}
