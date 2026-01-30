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
    <style>
         table{
            width:700px;
            border:1px solid;
         }
         tr,th{
            border:1px solid;

         }
         button{
            padding:15px 40px ;
            border-radius:20px;
         }
    </style>
</head>
<body>
    <a href="insert.php"><button>Insert Data</button></a>
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
    <td><?=$user['name']?></td>
    <td><?=$user['age']?></td>
   <td><a href="delete.php?id=<?=$user['id']?>">DELETE</a></td>
   <td><a href="update.php?id=<?=$user['id']?>">UPDATE</a></td>
</tr>
  <?php  } ?>  
    </table>

</body>
</html>