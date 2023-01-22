<?php

$name = "mohit";

function add($num1 , $num2) {
    return $num1 + $num2;
}

// $res = add(10,60);
// echo $res;


function greet() {
    global $name;
    echo "Hello $name welcome to PHP!";
}

// greet()

?>