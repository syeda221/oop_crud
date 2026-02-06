<?php
include 'connect.php';
include 'allmeth.php';

$database =new database()->connect();
$table = new crud($database);

?>