<?php

session_start();

$user = $_POST["user"];
$pass = $_POST["pass"];

if (isset($user) && isset($pass)) {
    if ($user == "admin" && $pass == "1234"){
        $_SESSION["logged"] = true;
        $_SESSION["user"] = $user;
        return header("Location: ../dashboard.php");
    }
    
    header("Location: ../login.php");
} else {
    header("Location: ../login.php");
}
