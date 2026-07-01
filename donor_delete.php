<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Delete</title>

    <?php
    if (isset($_GET['deleteid'])) {

        $id = $_GET['deleteid'];

        $sql = "UPDATE donors SET status = 2 WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Deleted Successfully'); 
            window.location='donor_display.php';</script>";
        } else {
            echo "<script>alert('Failed to Delete'); 
            window.location='admin_donor.php';</script>";
        }
    }
    ?>
</head>
<body>
</body>
</html>
