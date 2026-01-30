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

?>