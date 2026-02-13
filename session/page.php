<?php
if(isset($_POST['username'] && $_POST['password'])){
    session_start();
    $name = $_POST['username'];
    $password =  $_POST['password'];
    echo "welcome ". $name;
}else{
    header("location:login.php");
}
?>