
<?php

include 'db-conn.php';

$id  = $_GET['id'];

$update = "SELECT * FROM emps WHERE id = $id";

$sql = mysqli_query($conn,$update);

while ($row = mysqli_fetch_array($sql)) {
    $name = $row['name'];
    $age = $row['age'];
    $address = $row['address'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method = "post">
        <input type = "text" name="id" value = <?php echo $id; ?> readonly>
        <input type = "text" name="Name" value = <?php echo $name; ?>>
        <input type = "text" name="Age" value = <?php echo $age; ?>>
        <input type = "text" name="Address" value = <?php echo $address;?>>
        <input type = "Submit" name="update" value = "update">
    </form>
</body>
</html>



