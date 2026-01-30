<?php 
include 'connect.php';
include 'functions.php';
$database = (new database)->connect();
$table = new allfunc($database);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        if($table->insert($name , $age)){
            echo "<script>alert('data inserted successfully')</script>";
        }
        else {
            echo "data inserting issue";
        }
    }
// function sanitize($data){
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data,)
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
    <style>
        .insert{
            display:none:
        }
    </style>
</head>
<body>
    <div class="buttons">
        <a href="fetch.php"> <button>Select All data</button></a>
        <a href="insert.php"><button class="insertbtn">Insert data</button></a>
        <a href=""> <button>Fetch All Data</button></a>
      
    </div>
    <div class="insert"> <h1>Insert new user </h1><br>
    <form method="post">
        Name: <br>
        <input type="text" name="name" ><br>
        Email: <br>
        <input type="text" name="age" ><br>
        <input type="submit" value="Insert" name="submit">
    </form></div>
     <script>
     let insert  = document.querySelector(".insert");
     let insertbtn = document.querySelector(".insertbtn");
     insertbtn.addEventListner('click',function ()=>{
        insert.style.display = block;
     } )
     </script>
</body>
</html>