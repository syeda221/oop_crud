<?php
if(isset($_POST['username'] && $_POST['password'])){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] =  $_POST['password'];
    echo "welcome ". $_SESSION['username'];
}else{
    header("location:login.php");
}
?>