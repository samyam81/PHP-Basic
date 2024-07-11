<?php
    if (empty($_POST["name"])) {
    #code....
    $nameErr = "Name is Required";
} else {
    $name = input_data($_POST["name"]);
    #code....
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "Only Alphabets and White Space are Allowed";
    }
}

    function input_data($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);

        return $data;
    }