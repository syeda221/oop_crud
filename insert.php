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
            header("Location:index.php")
        }
        else {
            echo "data inserting issue";
        }
    }

?>
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