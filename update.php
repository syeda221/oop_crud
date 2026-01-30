<?php
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);
?>