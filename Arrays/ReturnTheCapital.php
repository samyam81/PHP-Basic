<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ReturnTheCapital.php" method="post">
        <label>
            Enter a Country
        </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>

<?php
    $capitals = array(
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "Japan" => "Tokyo"
);

    $capital=$capitals[$_POST["country"]];

    echo "The capital is :{$capital}";
?>