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
    
</head>
<body>
    <div class="buttons">
        <button>Select All Data</button><button></button><button></button>
    </div>
      <h1>Insert new user </h1><br>
    <form method="post">
        Name: <br>
        <input type="text" name="name" ><br>
        Email: <br>
        <input type="text" name="age" ><br>
        <input type="submit" value="Insert" name="submit">
    </form>
</body>
</html>