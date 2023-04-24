<?php  
    include "db-conn.php";
    if (isset($_POST['Login'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";

        $result = mysqli_query($conn,$sql);

        // $store = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            echo ("Login Sucessfully");
            header ("location:index.php");
        }
        else{
            echo "Username or password is in valid ";
            header ("location:login_form.php");
        }
    }


?>