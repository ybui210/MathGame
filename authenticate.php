<?php
$email = $_POST['email'];
$pwd = $_POST['password'];
if (($email=="a@a.a") && ($pwd=="aaa")) {
    session_start();
    header ("Location: index.php"); 
    exit;
    
} else {
    header ("Location: login.php"); 
    exit;
    echo "Invalid login creentials";
}
    