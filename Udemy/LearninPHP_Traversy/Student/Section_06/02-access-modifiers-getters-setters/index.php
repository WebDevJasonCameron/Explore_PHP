<?php

class User
{
  // Properties
  public string $name;
  public string $email;
  private string $status;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;

  }

  // Methods
  public function login(){
    echo $this->name . ' logged in <br>';
  }

  // GETs & SETs
  public function getStatus(){
      echo $this->status;
  }

  public function setStatus($status){
      $this->status = $status;
  }

}



// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com' , 'active');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com', 'not-active');

$user2->login();

$user2->setStatus('active');
$user2->getStatus();

// var_dump($user2);
