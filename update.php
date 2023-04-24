<?php
include 'db-conn.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $address = $_POST['Address'];
   
    $save = "UPDATE emps SET name = '$name' , age = '$age', address = '$address' WHERE id = $id ";

    $sql = mysqli_query($conn,$save);

}
header("Location:index.php");

?>