<?php
include 'connect.php';
include 'allmeth.php';
$database = (new database)->db();
$table = new crud($database);
$id  = isset($_POST['id']) ? (int)$_POST['id'] : 0;
if(!$id){
    echo "invalid id";
    exit;
}
$deleted = $table->delete($id);
if($deleted > 0){
    echo "{$id} id is deleted";
}else{
    echo "no record deleted";
}
?>