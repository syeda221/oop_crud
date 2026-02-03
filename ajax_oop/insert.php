<?php
include 'connect.php';
include 'allmeth.php';

$database = (new database)->db();
$table = new crud($database);
$name = trim($_POST['name']);
$age = (int)$_POST['age'];
if($name != "" || $age !=""){
    if($table->insert($name,$age)){
    echo "data inserted";
}

}
else{
    echo "fill all fields";
} 

?>