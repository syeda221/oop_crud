<?php
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);

    $id = $_GET['id'];
   if($table->delete($id)){
    header("Location:index.php");
    
   }
?>