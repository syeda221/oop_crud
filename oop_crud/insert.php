<?php
include 'all.php';
include '../ajax_oop/connect.php';
$database = (new database)->db();
$table = new crud($database);

?>

<form class="add-form" id="insert-data" method="post">
        <h5>Add Data</h5>
        <input type="text" name="name" id="name"><br><br>
        <input type="number" name="age" id="age"><br><br>
        <input type="submit" value="Add" class="add-btn">
        <h1 class="cross">X</h1>

    </form>