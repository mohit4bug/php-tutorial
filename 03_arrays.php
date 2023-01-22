<?php

// Two ways to create arrays
$arr = [5,55,43,77,0];
$arrNext = array("Hello","World");

// print_r($arr); 
// var_dump($arr);
// print_r($arrNext);
// echo $arr[0];


// Associative array
$age = [
    1 => "Hello",
    5 => "World",
    2 => "Programming"
];

// echo $age[1];

$age = [
    'Mohit' => 19,
    'Noah' => 29,
    'John' => 10
];

// print_r($age);
// echo $age['Mohit'];

$student = [
    [
        'name'=>'Mohit',
        'age'=>19,
        'admin'=>true
    ],
    [
        'name'=>'John',
        'age'=>99,
        'admin'=>false
    ],
    [
        'name'=>'Jane',
        'age'=>36,
        'admin'=>false
    ],
    [
        'name'=>'Shubha',
        'age'=>10,
        'admin'=>false
    ]
    ];

    // print_r($student);
    // echo $student[0]['name'];
    
    // json_encode() 
    // var_dump(json_encode($student)); // convert arrays[arrays] into json
    print_r(json_encode($student));
    

?>