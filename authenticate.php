<?php
session_start();
$email = $_POST['email'];
$pwd = $_POST['password'];
if (($email=="a@a.a") && ($pwd=="aaa")) {
    
    header ("Location: index.php"); 
    die();
    session_destroy();
    
} else {
    $_SESSION['error'] = "Invalid login credential.";
    header ("Location: login.php"); 
    exit;
    
}
    