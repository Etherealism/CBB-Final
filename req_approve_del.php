<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval and Delete</title>

    <?php
    // DELETE REQUEST
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "UPDATE request_info SET STATUS = 2 WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Deleted Successfully'); window.location='admin_request.php';</script>";
        } else {
            echo "<script>alert('Failed to Delete'); window.location='admin_request.php';</script>";
        }
    }

    // APPROVE REQUEST
    elseif (isset($_GET['approveid'])) {

        $id = $_GET['approveid'];

        // Get request info
        $que = "SELECT * FROM request_info WHERE id = $id";
        $get = mysqli_query($conn, $que);
        $row = mysqli_fetch_assoc($get);

        $btype  = $row['blood_type'];
        $bpacks = $row['blood_packs'];

        // Get inventory packs
        $get_blood = "SELECT blood_packs FROM blood_inventory WHERE blood_type = '$btype'";
        $que1 = mysqli_query($conn, $get_blood);
        $blood_db = mysqli_fetch_assoc($que1);

        $invepacks = $blood_db['blood_packs'];

        // Check inventory
        if ($invepacks > $bpacks) {

            $deducpacks = $invepacks - $bpacks;

            // Update inventory
            $sql2 = "UPDATE blood_inventory SET blood_packs = '$deducpacks' WHERE blood_type = '$btype'";
            $result1 = mysqli_query($conn, $sql2);

            // Approve request
            $sql = "UPDATE request_info SET STATUS = 1 WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Approved Successfully'); window.location='admin_request.php';</script>";
            } else {
                echo "<script>alert('Failed to Approve'); window.location='admin_request.php';</script>";
            }

        } else {
            echo "<script>alert('Insufficient Blood Packs'); window.location='admin_request.php';</script>";
        }
    }
    ?>
</head>
<body>
</body>
</html>
