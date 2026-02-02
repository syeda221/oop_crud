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
    <form class="add-form" method="post">
        <input type="text" name="name"><br><br>
        <input type="number" name="name"><br><br>
        <input type="submit" value="add">
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
        $("add").on('click', function(){
            $("")
        })
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
                    fetchData();

                }
            });
        }
        $(document).on('click','.delete', deletefun);
    });
</script>
</body>
</html>
