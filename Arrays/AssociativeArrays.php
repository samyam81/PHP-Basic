<?php
// associative arrays= An array made up of key value pairs

// id -> username

//item -> price


$capitals = array(
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "Japan" => "Tokyo"
);

echo $capitals["Nepal"];
echo "<br>";

echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

$capitals["Nepal"]="Biratnagar";

echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

$capitals["China"]="Beijing";
$capitals["Nepal"]="Kathmandu";

echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

array_pop($capitals);

echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

$countrys=array_keys($capitals);

echo "<br>";

foreach($countrys as $country){
    echo"{$country} <br>";
}

$values=array_values($capitals);
echo "<br>";

foreach($values as $value){
    echo "{$value} <br>";
}

$capitals=array_flip($capitals);
echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

$capitals=array_reverse(array_flip($capitals));
echo "<br>";

foreach($capitals as $key =>$value){
    echo "{$key} = {$value} <br>";
}

echo count($capitals);

?>