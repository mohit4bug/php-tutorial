<?php


for($i = 0; $i < 10; $i++) {
    echo $i . "<br/>";
}


echo "WHILE LOOP <br/>";

$num = 0;
while($num < 10) {
    
    echo $num . "<br/>";
    $num += 2;
}

echo "DO WHILE LOOP <br/>";

$num = 15;

do {

echo "hello world <br/>";

}while($num < 15);

echo "FOREACH LOOP <br/>";

$names = ['mohit','neha','john','jane'];

foreach($names as $name) {
    echo $name . "<br/>";
}   


foreach($names as $Index => $name) {
    echo "$Index - $name <br/>";
}


$data = [
    'hello' => 'namaste',
    'bye'=> 'aalwida',
    'come here' => 'idher aao'
];


foreach($data as $english => $hindi) {
    echo "$english means $hindi <br/>";
}

?>

