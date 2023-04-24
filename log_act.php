<?php 

    include 'db-conn.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password' ";

        $result = mysqli_query($conn,$sql);
        $store = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            echo '<script>alert("code working")</script>';
        }
        else {
            echo '<script> alert("Username or password is invalid") </script';
        }
    }

?>