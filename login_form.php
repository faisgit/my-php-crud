<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center mt-5  ">
        <div class="mt-5 d-flex justify-content-center align-items-center ">
            <div class="box w-100 d-flex justify-content-center align-items-center flex-column mt-5  shadow-lg px-4 py-4">
                <div class="mb-2">
                <h6 class="text-center ">Login to Acoount</h6>
                </div>
               
                <form action="log-action.php" method="post" class=" d-flex justify-content-center align-items-center flex-column">
                    <input type="text" name="Username" placeholder="Username" required class="form-control mb-2">
                    <input type="Password" name="Password" required placeholder="Password" class="form-control mb-2">
                    <button name="Login" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>