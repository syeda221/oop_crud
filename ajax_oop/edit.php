<?php
include 'connect.php';
include 'allmeth.php';

$database =(new database())->db();
$table = new crud($database);
$id=$_POST["id"];

$fetch_id = $table->edit_fetch($id);
if(isset($_POST['update'])){
     $id = $_POST['id'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      // perform update
      $table->edit($id, $name, $age);
      echo "<script>alert('Updated successfully');</script>";
}
?>
<form method="post">
 <h3>edit Data</h3>
 <br>
<?php

?>
<h6>Name</h6> 
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="text" name="name" value="<?=$fetch_id['name']?>" id="edit-name">
     <br>
   <h6>Age</h6>
    
        <input type="number" name="age" value="<?=$fetch_id['age']?>" id="edit-age"><br><br>
        <input type="submit" value="update" name="update" class="edit-btn">
        <h1 class="cross">X</h1>
        </form>
<?php

?> 