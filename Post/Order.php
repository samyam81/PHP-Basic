<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item="Momo";
    $price=100;
    $quantity=$_POST["quantity"];

    $total=null;

    echo "You have order {$quantity} X {$item}" . "<br>";
    $total=$quantity*$price;


    echo "Your total is: Rs. {$total}";
?>