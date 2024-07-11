<?php
    setcookie("Test_Cookie","Test",time()+3600,"/")
?>
<html>
    <body>
        <?php
            if (count($_COOKIE)>0) {
                # code...
                echo "Cookies are enabled.";
            } else {
                # code...
                echo "Cookies are disabled.";
            }
        ?>
    </body>
</html>