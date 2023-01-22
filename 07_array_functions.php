<?php

$names = ['john','jane','sean','paul','mark'];

// echo count($names); // Counts the length or array

// exists or not
echo in_array('jane',$names); // returns 1 if exists  
echo in_array('wayne',$names); // returns 1 if exists

// Add to array
$names[] = "mohit"; // adds in the end
array_push($names , "rohit" , "dev"); //* pass multiple values

// Add to array from start
array_unshift($names , "hello");


// Remove from array
array_pop($names); // Removes from the last
array_shift($names); // Removes from the first
// unset($names[2]);  //! Also removes the index


//* split array into chunks (as many as you want)

$chunkedArray = array_chunk($names,2); 
// $chunkedArray = array_chunk($names,3); 

// print_r($chunkedArray);
// print_r($names);



// Arrays concatination / merge
$arr1 = ['ok','no','yes'];
$arr2 = ['is','not','lucky'];

$arr3 = array_merge($arr1,$arr2);
// print_r($arr3);

$arr4 = [...$arr3,'js','similar','php']; //* spread operator



//! Array combine 
//* Make the first array key and second array value

$k = ['name','surname','age'];
$v = ['mohit','khatri',19];

$completed = array_combine($k,$v);

// print_r($completed);

// Flip array (Keys will become values and values will become keys)
$reverseArray = array_flip($completed);
// print_r($reverseArray);


//Get array keys
$arr = [
    'name' => 'mohit',
    'core'=>'javascript',
    'learning' => 'PHP'
];

$keys = array_keys($arr);
// print_r($keys);


//!These methods are very similer to js array higher order methods
// array range

$numbers = range(1,10); //* This will create an array of 1 , 10 values
// print_r($numbers);


//! MAP
$newArr = array_map(function($elem) {

    return "Number : $elem"; // added "Number" string and made new array

} ,$numbers);
// print_r($newArr);



//! FILTER
$evenArray = array_filter($numbers,function($elem){ //* takes array as first argument
    return $elem%2==0;
});

//TODO Another syntax ('fn')
$evenArray = array_filter($numbers,fn($elem)=> $elem%2==0);
print_r($evenArray);


//! REDUCE
$arrSum = array_reduce($numbers,function($num1,$num2){
    return $num1+$num2;
});

echo $arrSum;


?>