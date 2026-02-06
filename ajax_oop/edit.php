<?php
include 'connect.php';
include 'allmeth.php';

$database =new database()->connect();
$table = new crud($database);
$id=$_POST["id"];

$fetch_id = $table->edit_fetch($id);
?>
 <h5>edit Data</h5>
<?php
while($row= $fetch_id->fetch()){
// ?>
//      <input type="text" name="name" value="$row['name']" id="edit-name"><br><br>
//         <input type="number" name="age" value="$row['email']" id="edit-age"><br><br>
//         <input type="submit" value="edit"  class="edit-btn">
//         <h1 class="cross">X</h1>
<?php
}
?> 