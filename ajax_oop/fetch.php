<?php
include 'connect.php';
include 'allmeth.php';
$database = (new database)->db();
$table = new crud($database);
$all = $table->getAll();
foreach($all as $a){
$id = $a['id'];
$name = $a['name'];
$age =$a['age'];

?>
            
            
            
            
            <tr>
                <td ><?=htmlspecialchars($id, ENT_QUOTES, 'UTF-8')?></td>
                <td><?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?></td>
                <td><?=htmlspecialchars($age, ENT_QUOTES, 'UTF-8')?></td>
                <td>
                    <button class="btn edit" data-eid="<?=$a['id']?>" id="edit">Edit</button>
                    <button class="btn delete" data-did="<?=$a['id']?>">Delete</button>
                </td>
            </tr>
<?php } ?>