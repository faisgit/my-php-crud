<!-- Php Code  -->
<?php
include 'db-conn.php';
$display = "SELECT * FROM emps";
$result = mysqli_query($conn, $display);
?>
<!-- Nav Bar Components  -->
<?php include "navbar.php"; ?>
<!-- Bootstrap Link  -->
<link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.css">
<!-- Html code  -->
<div class="container d-flex justify-content-center align-items-center mt-5">
    <table class="table table-stripped table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) {
                $index = 0;

            ?>
                <tr>
                    <td>
                        <?php $sr = 1;
                         while ($sr <= $row['id']) {
                            echo $sr ;
                            $sr++;
                         }
                        ?>
                    </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger ">Delete</a>
                        <a href="updateForm.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary">Edit</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>