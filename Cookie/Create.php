<?php
    $Cookie_name="User";
    $Cookie_value="KobbieMainoo";
    setcookie($Cookie_name,$Cookie_value,time()+(86400*30),"/");
?>
<html>
    <body>
        <?php
            if (!isset($_COOKIE[$Cookie_name])) {
                # code... 
                echo "Cookie Name: ".$Cookie_name." is not set!<br>";
            } else {
                # code...
                echo "Cookie Name: ".$Cookie_name." is set!<br>";
                echo "Cookie is: ".$Cookie_value."<br>";
            }
        ?>
    </body>
</html>