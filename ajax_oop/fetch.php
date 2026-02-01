<?php
include 'connect.php';
include 'allmeth.php';
$database = (new database)->db();
$table = new crud($database);
$all = $table->getAll();
foreach($all as $a){


?>
            
            
            
            
            <tr>
                <td ><?=$a['id']?></td>
                <td><?=$a['name']?></td>
                <td><?=$a['age']?></td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete" data-id="<?=$a['id']?>">Delete</button>
                </td>
            </tr>
<?php } ?>