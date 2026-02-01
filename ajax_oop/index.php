<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple CRUD Table</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
</div>
<script>
    $(document).ready(function(){
        function fetchData(){
            $.ajax({
                url: "fetch.php",
                type: "POST",
                success: function(data){
                    $("tbody").html(data);
                }
                });
            }
         fetchData();
        function delete(){
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {"id": $(this).data("id")}
                success: function(data){
                    alert(data);
                    fetchData();

                }
            }):
        }
         $(".delete").on('click', delete())
    });
</script>
</body>
</html>
