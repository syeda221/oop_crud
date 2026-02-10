<?php
include 'all.php';
include '../ajax_oop/connect.php';
$database = (new database)->db();
$table = new crud($database);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple oop CRUD Table</title>
    <link rel="stylesheet" href="../ajax_oop/style.css">
</head>
<body>

<div class="container">
    <h2>Simple CRUD Table</h2>

    <!-- Create Button -->
    <button class="btn add">+ Add User</button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Image</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
          <?php  
          $data = $table->getAll();
          foreach($data as $d){

          ?>
 <tr>
                <td ><?=$d['id']?></td>
                <td ><?=$d['age']?></td>
                <td ><?=$d['name']?></td>
                <td ><?=$d['image']?></td>
                <td ><?=$d['password']?></td>
             
                <td>
                    <button class="btn edit"  id="edit"><a href="edit.php?id=<?= $d['id'] ?>">Edit</a></button>
                    <button class="btn edit"  id="delete"><a href="delete.php?id=<?= $d['id'] ?>">Delete</a></button>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
    
     <div class="up-form" id="update-data" method="post">
       
</div>
</div>


</body>
</html>
