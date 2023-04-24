<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center mt-5  ">
        <div class="box w-25 d-flex justify-content-center align-items-center mt-5 shadow-lg py-3 rounded" >
            <form action="save.php" method="POST">
                <input type="text" name="Name" placeholder="Name" class="form-control mb-3 mt-4">
                <input type="text" name="Age" placeholder="Age" class="form-control mb-3">
                <input type="text" name="Address" placeholder="Address" class="form-control mb-3">
                <button name="submit" class="btn btn-primary w-100 mb-3">Add</button>

            </form>
        </div>
    </div>

</body>

</html>