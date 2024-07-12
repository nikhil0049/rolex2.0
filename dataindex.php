<?php
include_once "include/config.php";
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql_query = "SELECT * FROM `getinsert` WHERE 1";
$result = mysqli_query($connection, $sql_query);
if (!$result) {
    die("Query Failed: " . mysqli_error($connection));
}
$sno = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .heart-icon {
            cursor: pointer;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-6" style="margin-bottom: 20px; margin-top: 15px;">
            <h2 class="border-bottom text-primary">PHP CRUD APPLICATION</h2>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-3">
                <a class="btn btn-primary btn-sm" href="create.php">ADD NEW</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($sno) ?></th>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['price']) ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" href="delete.php?id=<?= htmlspecialchars($row['id']) ?>">DELETE</a>
                            <span class="heart-icon" data-id="<?= htmlspecialchars($row['id']) ?>">&#x2764;</span>
                        </td>
                    </tr>
                <?php $sno++;
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#heartIcon").click(function(){
                $.ajax({
                    url: 'insert.php',
                    type: 'post',
                    data: {insert_data: 1},
                    success: function(response){
                        alert(response);
                    },
                    error: function(xhr, status, error){
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>

</html>
