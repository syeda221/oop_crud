<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple CRUD Table</title>
    <link rel="stylesheet" href="style.css">
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
            <tr>
                <td>1</td>
                <td>Ali</td>
                <td>22</td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete">Delete</button>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Sara</td>
                <td>20</td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete">Delete</button>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Ahmed</td>
                <td>25</td>
                <td>
                    <button class="btn edit">Edit</button>
                    <button class="btn delete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
