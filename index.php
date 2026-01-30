<?php 
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data </title>
    
</head>
<body>
    <h1>All Data</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
<?php 
$users = $table->getall();
foreach($users as $user){
?>
<tr>
    <td><?=$user['id']?></td>
    <td><?=$user['NAME']?></td>
    <td><?=$user['age']?></td>
    <td>DELETE</td>
    <td>UPDATE</td>
</tr>
  <?php} ?>  
    </table>

</body>
</html>