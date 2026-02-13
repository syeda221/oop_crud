<?php
if($_POST['username'] && $_POST['password']){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] =  $_POST['password'];
    echo "welcome ". $_SESSION['username'];
    echo "<br><button><a href='logout.php'>logout</a></button>";
}else{
    header("location:login.php");
}
?>