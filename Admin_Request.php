<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Request</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<style>
    h4,h5,h6 {font-family: "Lato", sans-serif}
    h1{font-family:"Lato",sans-serif; font-weight: bold}
    h7{
        font-family: "Lato", sans-serif; 
        font-size: 23px; 
        font-weight: bold;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}

    html {
        background: url(hex1.png) no-repeat center center fixed;
        background-size: cover;
    }
    h3{
        font-size:260%;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
        text-align:left;
        color:white;
        margin-bottom: 5px;
        font-family:"Century Gothic"}
    h2{
        font-size:305%;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
        font-weight: bold;
        text-align:center;
        color: rgb(255, 255, 255);
        font-family:"Century Gothic"}

    .header-img {
        width: 100%;
        height: 200px;
        background-color: rgb(43, 43, 43);
        background-size: cover;
    }

    .main{
        background-color: rgb(217, 214, 210);
        margin: 20px 40px -5px 40px;
        border-radius:10px;
        padding:10px;
        font-weight:bold;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.73);
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}
    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding: 12px;
        text-align: center;
        background-color: #9d2927;
        color: white;
    }

    button {
        padding: 5px 15px;
        font-size: 15px;
        cursor: pointer;
        color: #fff;
        background-color: #9c2927;
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px #000000;
        margin-left: 20px;
        margin-bottom: 10px;
    }

    button:hover {background-color: rgb(0, 0, 0)}
    button:active {
        background-color: rgba(252, 250, 250, 0);
        box-shadow: 0 5px #000000;
        transform: translateY(4px);
    }

    .footer-basic .copyright {
        margin-top:15px;
        text-align:center;
        font-family: "Lato", sans-serif;
        font-size:13px;
        color: #000000;
    }
</style>

<body>

<div id="navbar">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a href="Admin_home.php" class="w3-bar-item w3-button w3-wide">
            <img src="pngaaa.com-5280690.png" width="45" height="48" style="vertical-align:middle;margin:-10px 20px">
            <h7>Community Blood Bank</h7>
        </a>
        <div class="w3-right w3-hide-small">
            <a href="Admin_home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
            <a href="Admin_Inventory.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Inventory</a>
            <a onclick="javascript:return confirm('Do you want to logout?');" href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Logout</a>
            <a href="Admin_Donor.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Donors</a>
            <a href="Admin_Request.php" class="w3-bar-item w3-button w3-padding-large w3-white">Request</a>
        </div>
    </div>
</div>

<div class="main">
    <br>
    <button><a href="Admin_Add_Request.php" style="text-decoration:none;color:white;">Add Request</a></button>

    <table id="customers">
        <tr>
            <th>Request ID</th>
            <th>Requester’s Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Blood Type</th>
            <th>Blood Packs</th>
            <th>Date Requested</th>
            <th>Status</th>
            <th>Operations</th>
        </tr>

        <tbody>
        <?php
            $sql = "SELECT * FROM request_info";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $id      = $row['id'];
                    $name    = $row['name'];
                    $number  = $row['num'];
                    $address = $row['address'];
                    $email   = $row['email'];
                    $btype   = $row['blood_type'];
                    $bamount = $row['blood_packs'];
                    $status  = $row['status'];
                    $date    = $row['date'];

                    echo "<tr>
                        <th>$id</th>
                        <td>$name</td>
                        <td>$number</td>
                        <td>$address</td>
                        <td>$email</td>
                        <td>$btype</td>
                        <td>$bamount</td>
                        <td>$date</td>";

                    if ($status == 0) {
                        echo "<td>Pending</td>
                              <td>
                                <button><a href='req_approve_del.php?approveid=$id' style='color:white;text-decoration:none;'>Approve</a></button>
                                <button><a href='Admin_Edit_Request.php?editid=$id' style='color:white;text-decoration:none;'>Edit</a></button>
                                <button><a onclick=\"return confirm('Do you want to delete this record?');\" href='req_approve_del.php?deleteid=$id' style='color:white;text-decoration:none;'>Delete</a></button>
                              </td>";
                    } else {
                        echo "<td>Approved</td>
                              <td>
                                <button><a href='Admin_Edit_Request.php?editid=$id' style='color:white;text-decoration:none;'>Edit</a></button>
                                <button><a onclick=\"return confirm('Do you want to delete this record?');\" href='req_approve_del.php?deleteid=$id' style='color:white;text-decoration:none;'>Delete</a></button>
                              </td>";
                    }

                    echo "</tr>";
                }
            }
        ?>
        </tbody>
    </table>
</div>

<div class="footer-basic">
    <p class="copyright">&copy; 2022. CBB.com. All Rights Reserved</p>
</div>

</body>
</html>
