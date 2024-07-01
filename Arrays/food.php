<?php
    $foods=array("Apple","Orange","Banana","Coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

    echo "<br>";

    $foods[0]="Pineapple";

    foreach($foods as $food){
        echo $food . "<br>";
    }

    array_push($foods,"Kiwi","Tomato");

    echo "<br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

    array_pop($foods);
    
    echo "<br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

    array_shift($foods);

    echo "<br>";

    foreach($foods as $food){
        echo $food . "<br>";
    }

    $fruits=array_reverse($foods);

    echo "<br>";

    foreach($fruits as $food){
        echo $food . "<br>";
    }

    echo "<br>";

    echo count($foods);

?>