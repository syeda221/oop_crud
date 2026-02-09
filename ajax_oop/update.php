<?php
nclude 'connect.php';
include 'allmeth.php';

$database =(new database())->db();
$table = new crud($database);
$id=$_POST["id"];
$name = $_POST['name'];
$age = $_POST['age'];
    $table->edit($id, $name, $age);
      echo "'Updated successfully";

?>