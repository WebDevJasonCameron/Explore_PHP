<?php

class User
{
  public string $name;
  public string $email;
  protected string $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

// ----------------
class Admin extends User {
    public string $level;

    public function __construct($name, $email, $level){
        parent::__construct($name, $email);
        $this->level = $level;
    }
}

// INST
$admin1 = new Admin('John Doe', 'john@doe.com', '6');

var_dump($admin1);