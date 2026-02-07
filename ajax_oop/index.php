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
    <form class="add-form" id="insert-data" method="get">
        <h5>Add Data</h5>
        <input type="text" name="name" id="name"><br><br>
        <input type="number" name="age" id="age"><br><br>
        <input type="submit" value="Add" class="add-btn">
        <h1 class="cross">X</h1>

    </form>
     <form class="up-form" id="update-data" method="get">
       
    </form>
</div>
<script>
    $(document).ready(function(){
        //fetch function 
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
         //form show
        $(".btn.add").on('click', function(){
            $("#insert-data").show();
        });  
        $(".cross").on('click', function(){
            $("#insert-data").hide();
        });

        //insert function
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
                  $("#insert-data")[0].reset();
                  $("#insert-data").hide();
                  fetchData();
                }
            });
        }
        //insert funxtio  call
       $(".add-form").on('submit', insert);

       //dlete function
        function deletefun(e){
            e.preventDefault();
            var id = $(this).data("did");
            if(!id) return;
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {"id": id},
                success: function(data){
                    alert(data);
                    fetchData();

                }
            });
        }
        //delete function call
        $(document).on('click','.delete', deletefun);

        $(document).on('click','.edit',function(){
            let id = $(this).data('eid');
            $("#update-data").show();
            $.ajax({
                url: "edit.php",
                type: "POST",
                data: {"id":id},
                success: function(data){
                $("#update-data").html(data)
                }
            });
        })
         $(document).on('click','.cross',function(){
            $("#update-data").hide();
        })
        //update function 
        
    });
</script>
</body>
</html>
