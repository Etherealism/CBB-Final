<?php 
include 'db.php';

// Handle form submission
if (isset($_POST['submit'])) {

    $name   = $_POST['name'];
    $cnum   = $_POST['cnum'];
    $addr   = $_POST['addr'];
    $email  = $_POST['email'];
    $btype  = $_POST['btype'];
    $bpacks = $_POST['bpacks'];

    $sql = "INSERT INTO request_info 
            (name, num, address, email, blood_type, blood_packs, status)
            VALUES ('$name', '$cnum', '$addr', '$email', '$btype', '$bpacks', '0')";

    $que = mysqli_query($conn, $sql);

    if ($que) {
        echo "<script>alert('Successfully Recorded');
        window.location='Admin_Request.php';
        </script>";
    } else {
        echo "<script>alert('Failed');
        window.location='Admin_Request.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Add Request</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<style>
    body,h4,h5,h6 {font-family: "Lato", sans-serif}
    h1{font-family:"Lato",sans-serif; font-weight: bold}
    h7{font-family: "Lato", sans-serif; font-size: 23px; font-weight: bold}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}

    html {
        background: rgb(64, 64, 64) no-repeat center center fixed;
        background-size: cover;
    }

    h2{
        font-size:305%;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
        font-weight: bold;
        text-align:center;
        color: rgb(255, 255, 255);
        font-family:"Century Gothic"
    }

    label {
        display: inline-block;
        width: 140px;
        text-align: left;
        left: 60px;
    }

    input, select {
        display: inline-block;
        width: 250px;
        border: none;
        border-radius: 5px;
        left: 60px;
    }

    .header-img {
        width: 100%;
        height: 200px;
        background:url("blood.jpg")no-repeat center center fixed;
        background-size: cover;
    }

    .main{
        background-color: rgb(239, 239, 239);
        margin: 40px;
        border-radius:10px;
        padding:10px;
        font-weight:bold;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
    }

    .row{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -130px;
    }

    .input-box input[type="submit"],
    .input-box input[type="button"]{
        background: rgb(243, 67, 54);
        font-size: 18px;
        font-weight: bold;
        color: #000000;
        border-radius: 10px;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
    }

    .input-box input[type="submit"]:hover,
    .input-box input[type="button"]:hover{
        letter-spacing: 1px;
        background: linear-gradient(to bottom, rgba(222,215,215,0.97), rgba(42,41,41,0.7));
    }

    #footer{
        color: #ffffff;
        margin-top:25px;
        text-align:center;
        padding:15px;
        font-size:90%;
    }
</style>
</head>

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
            <a onclick="return confirm('Do you want to logout?');" href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Logout</a>
            <a href="Admin_Donor.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Donors</a>
            <a href="Admin_Request.php" class="w3-bar-item w3-button w3-padding-large w3-white">Request</a>
        </div>
    </div>
</div>

<div id="header">
    <div class="header-img"></div>
    <br><br>
    <h2>ADD REQUEST</h2>
</div>

<div class="main">

<form action="#" method="POST">

    <div class="row">
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>

    <div class="row">
        <label>Phone No.:</label>
        <input type="number" name="cnum" required>
    </div>

    <div class="row">
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>

    <div class="row">
        <label>Address:</label>
        <input type="text" name="addr" required>
    </div>

    <div class="row">
        <label>Blood Type:</label>
        <select name="btype" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
    </div>

    <div class="row">
        <label>Blood Packs:</label>
        <input type="text" name="bpacks">
    </div>

    <br>

    <div class="input-box button">
        <input type="submit" name="submit" value="Submit">
    </div>

    <div class="input-box button">
        <a href="Admin_Request.php" style="text-decoration:none">
            <input type="button" value="Back">
        </a>
    </div>

    <div id="footer"><br>
        &copy; 2022. CBB.com. All Rights Reserved
    </div>

</form>

</div>

</body>
</html>
