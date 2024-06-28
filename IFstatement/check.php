<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="check.php" method="post">
        <label>Number: </label>
        <input type="text" name="number">
        <input type="submit" name="Check">
    </form>
</body>

</html>

<?php
$number = $_POST["number"];

if ($number % 2 == 0) {
    echo "The Number is even. <br>";
} else {
    echo "The Number is odd. <br>";
}

?>