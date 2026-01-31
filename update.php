<?php
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);
$id = $_GET['id'];
$update = $database->prepare("select * from users where id=?");
$update->execute([$id]);
$data = $update->fetch(PDO::FETCH_ASSOC);
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    if($table->update($id,$name,$age)){
        header("Location:index.php");
    }
}


?>
<form method="post">
    <input type="text" value=<?=$data['name']?> name="name"><br><br>
    <input type="number"  value=<?=$data['age']?> name="age"><br><br>
    <br><input type="submit"  name="update">
</form>