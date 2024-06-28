<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math1.php" method="post">
        <label>x: </label>
        <input type="text" name="x">
        <input type="submit" value="total">

        <label>y: </label>
        <input type="text" name="y">
        <input type="submit" value="total">

        <label>z: </label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $z=$_POST["z"];
    $total=null;

    $total=abs(49.90);
    echo $total;

    $total=round(3.14);
    echo $total;

    $total=floor(3.14);
    echo $total;

    $total=ceil(4.0001);
    echo $total;

    $total=pow($x,$y);
    echo $total;

    $total=sqrt($x);
    echo $total;

    $total=max($x,$y,$z);
    echo $total;

    $total=min($x,$y,$z);
    echo $total;

    $total=pi();
    echo $total;

    $total=rand();
    echo $total;

    $total=rand(1,6);
    echo $total;

    echo $x;

?>