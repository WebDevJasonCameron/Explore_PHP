<?php

class User {

    // PROP
    public string $name;
    public string $email;

    // CON
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // METH
    public function logIn() {
        echo $this->name . "Logged in! <br />";
    }
}

// INST

$user1 = new User('John Doe', 'john@doe.com');
$user1 -> logIn();


$user2 = new User('Jane Doe', 'jane@doe.com');
$user2 -> logIn();

//var_dump($user1);
//var_dump($user2);


