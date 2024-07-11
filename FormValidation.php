<?php
    // Name Validation
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

    //Email Validation
    if(empty($_POST["email"])){
        $emailErr="Email is Required";
    } else{
        $emailErr=input_data($_POST["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            # code...
            $emailErr="Invalid Email Format";
        }
    }

    function input_data($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);

        return $data;
    }