<?php

if (isset($_POST["submit"])) {
   
$Username = $_POST["uid"];
$Password = $_POST["pwd"];
$Repeatpassword = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($Username, $Password, $Repeatpassword) !==false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
}
if (invalidUid($username) !==false) {
    header("location: ../signup.php?error=invalidUid");
    exit();
}
if (passwordmatch($password, $Repeatpassword ) !==false) {
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
}
if (uidexists($conn, $username) !==false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
}
}
else {
    header ("location: ../login/signup.php");
    exit();
}