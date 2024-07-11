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

    // Number Validation
    if (empty($_POST["mobileno"])) {
        # code...
        $mobilenoErr="Mobile Number is required";
    } else{
        $mobilenoErr=input_data($_POST["mobileno"]);
        if (!preg_match("/^[0-9]*$/",$mobileno)) {
            # code...
            $mobilenoErr="Only Numeric Value is Allowed";
        }
    }
    if (strlen($mobileno)!=10) {
        # code...
        $mobilenoErr="Mobile number must be 10 digits.";
    }

    //Empty Field Validation
    if (empty($_POST["gender"])) {
        # code...
        $genderErr="Gender is Required";
    } else {
        # code...
        $gender=input_data($_POST["gender"]);
    }

    function input_data($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);

        return $data;
    }