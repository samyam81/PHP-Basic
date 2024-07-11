<?php
    #..Start the Session..
    session_start();
    # Set session Variable
    $_SESSION["favcolor"]="green";
    $_SESSION["favanimal"]="cat";
    echo "Session Variables are set";
?>