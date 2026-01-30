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
            header("Location:index.php");
        }
        else {
            echo "data inserting issue";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         button{
            padding:15px 40px ;
            border-radius:20px;
         }
         form{
            width:500px;
            background-color:grey;
            border-radius:20px;
            displaY:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            padding:60px 30px;

         }
         form input{
            height: 2rem;
            width:90%;
         }
    </style>
</head>
<body>
    

    <div class="buttons">
        <a href="index.php"><button>Go Back</button></a>

    </div>
    <div class="insert"> <h1>Insert new user </h1><br>
    <form method="post">
        Name: <br>
        <input type="text" name="name" ><br>
        Email: <br>
        <input type="text" name="age" ><br>
        <input type="submit" value="Insert" name="submit">
    </form></div>
    </body>
</html>