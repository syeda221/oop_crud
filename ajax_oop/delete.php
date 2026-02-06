<?php
include 'connect.php';
include 'allmeth.php';
$database = (new database)->db();
$table = new crud($database);
$id  = $_POST['id'];
if($table->delete($id)){
    echo "{$id}  id is deteted";
}
?>