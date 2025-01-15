<?php

function sayHello() {
    echo "Hello World! <br />";
}

function sayGoodbye(){
    return "Goodbye Cruel World! <br />";
}

sayHello();
sayHello();
sayHello();

$goodbye = sayGoodbye();

echo $goodbye;
echo $goodbye;
echo $goodbye;