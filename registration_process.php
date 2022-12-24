<?php

if (empty($_POST["id"])) {
    die("ID is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["psw"]) < 8) {
    die("Password must be at least 8 characters");
}

if (! preg_match("/[a-z]/i", $_POST["psw"])) {
    die("Password must contain at least one letter");
}

if (! preg_match("/[0-9]/", $_POST["psw"])) {
    die("Password must contain at least one number");
}

if ($_POST["psw"] != $_POST["conf_psw"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["psw"], PASSWORD_DEFAULT);

print_r($_POST);
var_dump($password_hash);
