<?php
    #set the expiration date in the past
    setcookie("user","",time()-3600,"/")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Cookie is Deleted.";
    ?>
</body>
</html>