<!-- PHP data types -->
<!-- 
String 
Integer
Float
Boolean
Array
Object - A class
NULL - Empty varibles
Resource - Special varible that holds a resource
-->

<?php
$name = "Mohit"; // String
$age = 19; // Int
$Admin = false; // Bool
$Cash = 90.12; // Float



// echo $age;
// echo $Admin; // Shows nothing if false and 1 if true
// var_dump($Admin); // shows bool(true) or bool(false)

// echo "$name has $Cash cash"; // Works
// echo '$name has $Cash cash'; // Single quotes not parse variables

// echo $name.' is '.$age.' years old'; // period(.) for concatination

// CONSTANTS
define('PI',3.14);
define("Host","localhost");
// define("Name","Mohit");
// define("STACK","MERN");
// var_dump(PI); // Not need to use '$' when echo constants

?>