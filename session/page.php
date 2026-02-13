<?php
if(isset($_POST['username'] && $_POST['password'])){
    $name = $_POST['username'];
    $password =  $_POST['password'];
    echo "welcome ". $name;
}else{
    
}
?>