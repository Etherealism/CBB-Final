<?php 
include 'db.php';

// Get donor record to edit
$id = $_GET['editid'];

$sql1 = "SELECT * FROM donors WHERE id = $id";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);

$name1  = $row['name'];
$cnum1  = $row['num'];
$addr1  = $row['address'];
$email1 = $row['email'];
$btype  = $row['blood_type'];
$bpacks = $row['blood_amount'];

// Handle update
if (isset($_POST['submit'])) {

    $name  = $_POST['name'];
    $cnum  = $_POST['cnum'];
    $addr  = $_POST['addr'];
    $email = $_POST['email'];

    $sql = "UPDATE donors 
            SET name='$name', num='$cnum', address='$addr', email='$email' 
            WHERE id='$id'";

    $que = mysqli_query($conn, $sql);

    if ($que) {
        echo "<script>alert('Successfully Edited');
        window.location='Admin_Donor.php';
        </script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit DONOR - CBB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<style>
    body,h4,h5,h6 {font-family: "Lato", sans-serif}
    h1{font-family:"Lato",sans-serif; font-weight: bold}
    h7{
        font-family: "Lato", sans-serif;
        font-size: 23px;
        font-weight: bold;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    html {
        background: rgb(64, 64, 64) no-repeat center center fixed;
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
    label {
        display: inline-block;
        width: 140px;
        text-align: left;
        left: 60px;
    }
    input {
        display: inline-block;
        width: 250px;
        border: none;
        border-radius: 5px;
        left: 60px;
    }
    select {
        display: inline-block;
        width: 250px;
        text-align: center;
        border: none;
        border-radius: 5px;
        left: 60px;
    }
    .header-img {
        width: 100%;
        height: 200px;
        background:url("hex1.png")no-repeat center center fixed;
        background-size: cover;
    }

    .main{
        background-color: rgb(239, 239, 239);
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom: -15px;
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
    .row input{
        border-radius: 5px;
        padding:10px;
    }
    .input-box input[type="submit"]{
        background: linear-gradient(to top, rgb(243, 67, 54), rgb(243, 67, 54));
        font-size: 18px;
        font-weight: bold;
        color: #000000;
        border-radius: 10px;
        cursor: pointer;
        border: none;
    }
    .input-box input[type="submit"]:hover{
        letter-spacing: 1px;
        background: linear-gradient(to bottom, rgba(222, 215, 215, 0.97), rgba(42, 41, 41, 0.7));
    }
    .input-box input[type="button"]{
        background: linear-gradient(to top, rgb(243, 67, 54), rgb(243, 67, 54));
        font-size: 18px;
        font-weight: bold;
        color: #000000;
        border-radius: 10px;
        cursor: pointer;
        border: none;
    }
    .input-box input[type="button"]:hover{
        letter-spacing: 1px;
        background: linear-gradient(to bottom, rgba(222, 215, 215, 0.97), rgba(42, 41, 41, 0.7));
    }
    #footer{
        color: rgb(247, 247, 252);
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
            <a onclick="javascript:return confirm('Do you want to logout?');" href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Logout</a>
            <a href="Admin_Donor.php" class="w3-bar-item w3-button w3-padding-large w3-white">Donors</a>
            <a href="Admin_Request.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Request</a>
        </div>
    </div>

    <div id="header">
        <div class="header-img"></div>
        <br><br>
        <h2>EDIT DONOR'S INFORMATION</h2>
    </div>
</div>

<div class="main">

    <form action="#" method="POST">

        <div class="row">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name1; ?>" required>
        </div>

        <div class="row">
            <label>Phone No.:</label>
            <input type="number" name="cnum" value="<?php echo $cnum1; ?>" required>
        </div>

        <div class="row">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email1; ?>" required>
        </div>

        <div class="row">
            <label>Address:</label>
            <input type="text" name="addr" value="<?php echo $addr1; ?>" required>
        </div>

        <div class="row">
            <label>Blood Type:</label>
            <select disabled>
                <option><?php echo $btype; ?></option>
            </select>
        </div>

        <div class="row">
            <label>Blood Packs:</label>
            <input type="text" value="<?php echo $bpacks; ?>" disabled>
        </div>

        <br>

        <div class="input-box button">
            <input type="submit" name="submit" value="Submit">
        </div>

        <div class="input-box button">
            <a href="Admin_Donor.php" style="text-decoration:none">
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
