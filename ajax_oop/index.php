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
    <form class="add-form" id="insert-data" method="post">
        <h5>Add Data</h5>
        <input type="text" name="name" id="name"><br><br>
        <input type="number" name="age" id="age"><br><br>
        <input type="submit" value="Add" class="add-btn">
    </form>
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
        $(".btn.add").on('click', function(){
            $(".add-form").show();
        });
        function insert(e){
            e.preventDefault();
            let name = $("#name").val();
            let age = $("#age").val();
            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {"name":name,"age":age},
                success: function(data){
                  alert(data);
                  $("form").hide();
                  fetchData();
                }
            });
        }
       $(".add-form").on('submit', insert);
        function deletefun(e){
            e.preventDefault();
            var id = $(this).data("id");
            if(!id) return;
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {"id": id},
                success: function(data){
                    alert(data);
                    $("#insert-data").trigger("reset");
                    fetchData();

                }
            });
        }
        $(document).on('click','.delete', deletefun);
    });
</script>
</body>
</html>
