<?php 

include 'db-conn.php';

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $add = $_POST['Address'];

    $save = "INSERT INTO emps (name,age,address) VALUES ('$name','$age','$add')";

    $sql = mysqli_query($conn,$save);
}

header("LOcation:index.php");

?>