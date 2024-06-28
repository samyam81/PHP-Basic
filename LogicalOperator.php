<?php

$age = 25;
$is_student = true;

if ($age > 18 && $is_student) {
    echo "You are eligible for student discounts.";
} else {
    echo "You are not eligible for student discounts.";
}

echo "<br>";

$is_admin = false;
$is_editor = true;

if ($is_admin || $is_editor) {
    echo "You have access to edit content.";
} else {
    echo "You do not have access to edit content.";
}

echo "<br>";

$is_logged_in = true;

if (!$is_logged_in) {
    echo "You are not logged in.";
} else {
    echo "Welcome! You are logged in.";
}

?>
