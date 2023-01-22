<?php

// echo - output strings, numbers, html etc.
echo "Echo working!";
echo "<br/>";


// print - works like echo, but takes only single argument
print "print working";
echo "<br/>";


// print_r() - print single values and arrays
print_r([1,2,3,4,5]);
echo "<br/>";


// var_dump() - return more info like datatype and length
var_dump([1,2,3,4,5]);
var_dump(true); // bool(true)
echo "<br/>";

// var_export() - similar to var_dump(),outputs string representation of variable
var_export(true);
var_export([1,2,3,4,5]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-TUT</title>
</head>
<body>
    <!-- This can be used to echo without using echo -->
    <h1><?= 'hello wihout echo'; ?></h1> 
</body>
</html>