<?php
include '../ajax_oop/allmeth.php';
include '../ajax_oop/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple CRUD Table</title>
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
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
          

          
        </tbody>
    </table>
    <form class="add-form" id="insert-data" method="post">
        <h5>Add Data</h5>
        <input type="text" name="name" id="name"><br><br>
        <input type="number" name="age" id="age"><br><br>
        <input type="submit" value="Add" class="add-btn">
        <h1 class="cross">X</h1>

    </form>
     <div class="up-form" id="update-data" method="post">
       
</div>
</div>


</body>
</html>
