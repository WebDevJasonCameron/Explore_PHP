<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;

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

  /** Store user in db
   * 
   * @return void
   */
  public function store()
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['password_confirmation'];

    $errors = [];

    // Validations
    if (!Validation::email($email)) {
      $errors['name'] = 'Please enter a valid email address';
    }

    if (!Validation::string($name, 2, 50)) {
      $errors['email'] = 'Name must be between 2 and 50 characters';
    }

    if (!Validation::string($password, 6, 50)) {
      $errors['password'] = 'Password must be 6 or more characters';
    }

    if (!Validation::match($password, $passwordConfirmation)) {
      $errors['password_confirmation'] = 'Passwords do not match';
    }

    // Show errors
    if (!empty($errors)) {
      loadView('users/create', [
        'errors' => $errors,
        'user' => [
          'name' => $name,
          'email' => $email,
          'city' => $city,
          'state' => $state
        ]
      ]);
      exit;
    }

    // Check if email exists
    $params = [
      'email' => $email
    ];

    $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();

    if ($user) {
      $errors['email'] = 'That email already exists';
      loadView('users/create', [
        'errors' => $errors
      ]);
      exit;
    }

    // Create user account
    $params = [
      'name' => $name,
      'email' => $email,
      'city' => $city,
      'state' => $state,
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    $this->db->query('INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password)', $params);

    // Get new user ID
    $userId = $this->db->conn->lastInsertId();

    Session::set('user', [
      'id' => $userId,
      'name' => $name,
      'email' => $email,
      'city' => $city,
      'state' => $state
    ]);

    redirect('/');
  }

  /** Logout a user and kill session
   * 
   * @return void
   */
  public function logout()
  {
    Session::clearAll();
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

    redirect('/');
  }

  /** Authenticate a user with email and password
   * 
   * @return void
   */
  public function authenticate()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    // Validation
    if (!Validation::email($email)) {
      $errors['email'] = 'Please enter a valid email';
    }

    if (!Validation::string($password, 6, 50)) {
      $errors['password'] = 'Please must be at least 6 characters';
    }

    // Check for Errors
    if (!empty($errors)) {
      loadView('users/login', [
        'errors' => $errors
      ]);
      exit;
    }

    // Check for email in DB
    $params = [
      'email' => $email
    ];

    $user =  $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();

    if (!$user) {
      $errors['email'] = 'Incorrect Credentials';
      loadView('users/login', [
        'errors' => $errors
      ]);
      exit;
    }

    // Check for password in DB
    if (!password_verify($password, $user->password)) {
      $errors['email'] = 'Incorrect Credentials';
      loadView('users/login', [
        'errors' => $errors
      ]);
      exit;
    }

    Session::set('user', [
      'id' => $user->id,
      'name' => $user->name,
      'email' => $user->email,
      'city' => $user->city,
      'state' => $user->state
    ]);

    redirect('/');
  }
}
