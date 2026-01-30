<?php 
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);
if(isset($_GET['id'])){
     $id = $_GET['id'];
     $table->delete($id);
     header("location:index.php?deleted=true");

}
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data </title>
    <link rel="stylesheet" href="style.css">
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
   <td><a class="delete-link" href="index.php?id=<?=$user['id']?>">DELETE</a></td>
   <td><a href="update.php?id=<?=$user['id']?>">UPDATE</a></td>
</tr>
  <?php
    } 
    ?>  
    </table>
    <?php
    if(isset($_GET['deleted'])){
   
        echo " <div class='delete'>this record is deleted</div>";
    }
    ?>
    <script>
        let msg = document.querySelector(".delete");
        if(msg){
            setTimeout(() => {
                msg.style.display = 'none';
                msg.style.transition = 'ease-out 0.5s';
            }, 2000);
        }
    </script>
<!-- <script>
    let dlt = document.querySelectorAll(".delete-link");
    let dltdiv = document.querySelector(".delete");
    dlt.forEach(function(e){
        e.addEventListener('click',function (){
            dltdiv.style.display = "flex";
        })
    })
</script> -->
</body>
</html>