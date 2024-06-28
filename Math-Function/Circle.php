<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Circle.php" method="post">
        <label> radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>

<?php
    $radius =$_POST["radius"];
    $area=null;
    $circumference=null;
    $volume=null;

    $area=pi()*pow($radius,2);
    echo "The area is: {$area}" ."<br>";

    $circumference=2*pi()*$radius;
    echo "The circumference is: {$circumference}" ."<br>";

    $circumference=round($circumference,4);
    echo "The circumference is: {$circumference}" ."<br>";

    $volume=pi()*pow($radius,3);
    echo "Volume ={$volume} <br>";

?>