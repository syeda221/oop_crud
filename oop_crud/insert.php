<?php
include 'all.php';
include '../ajax_oop/connect.php';
$database = (new database)->db();
$table = new crud($database);
if(isset($_POST['add']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $image = $_POST['image']['name'];
    $tmp = $_POST['image']['tmp_name'] ;
    move_uploaded_file($tmp , "/pics/".$image);
    $name = $_POST['password'];
}
?>

<form class="add-form" style="opacity:1;" id="insert-data" method="post">
        <h5>Add Data</h5>
        <input type="text" name="name" id="name"><br><br>
        <input type="number" name="age" id="age"><br><br>
        <input type="file" name="image" id="age"><br><br>
        <input type="password" name="password" id="age"><br><br>
        <input type="submit" name="add" value="Add" class="add-btn">
        <h1 class="cross">X</h1>

    </form>