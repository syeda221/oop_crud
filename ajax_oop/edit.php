<?php
include 'connect.php';
include 'allmeth.php';

$database =(new database())->db();
$table = new crud($database);
$id=$_POST["id"];

$fetch_id = $table->edit_fetch($id);
?>
 <h5>edit Data</h5>
<?php

?>
     <input type="text" name="name" value="<?=$fetch_id['name']?>" id="edit-name"><br><br>
        <input type="number" name="age" value="<?=$fetch_id['age']?>" id="edit-age"><br><br>
        <input type="submit" value="edit"  class="edit-btn">
        <h1 class="cross">X</h1>
<?php

?> 