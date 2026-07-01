<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin - Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<style>
    h5 {font-family: "Lato", sans-serif}
    h1 {font-family:"Lato",sans-serif; font-weight: bold}
    h7 {
        font-family: "Lato", sans-serif; 
        font-size: 23px; 
        font-weight: bold;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }

    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}

    html {
        background: url(hh.jpg) no-repeat center center fixed;
        background-size: cover;
    }

    .main {
        background-color: rgba(252, 250, 250, 0.66);
        margin-top: 100px;
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom: -20px;
        border-radius:20px;
        height: 650px;
        font-size:40;
        padding:10px;
        font-weight:bold;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.86);
    }

    .snip1559 {
        position: relative;
        display: inline-block;
        border-radius: 10px;
        overflow: hidden;
        margin: 45px 10px 0px 200px;
        min-width: 320px;
        max-width: 310px;
        height:400px;
        width: 165%;
        background-color: #fdfcfc;
        color: #2B2B2B;
        text-align: center;
        font-size: 16px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.96);
    }

    .snip1559 .profile-image img {
        margin: 25px 5px 0px 22px;
        max-width: 90%;
        border-radius: 5%;
    }

    .snip1559 figcaption {
        padding: 0% 10% 10%;
    }

    h5 {
        font-size:50px;
        font-weight: bold;
        text-align:center;
        text-shadow: 0 10px 10px rgb(255, 255, 255);
        color: #000000;
        font-family:"Century Gothic";
    }

    h1 {
        font-size:20px;
        margin-top: 35px;
        text-align:center;
        color: #000000;
        font-weight: bold;
        font-family:"Century Gothic";
    }

    #footer {
        color: #ffffff;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
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
            <a href="Admin_home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="Admin_Inventory.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Inventory</a>            
            <a href="Admin_Donor.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Donors</a>
            <a href="Admin_Request.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Request</a>
            <a onclick="javascript:return confirm('Do you want to logout?');" href="Admin_Login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Logout</a>
        </div>
    </div>
</div>

<div class="main">
    <br>
    <h5>WELCOME ADMIN</h5>

    <figure class="snip1559">
        <div class="profile-image">
            <a href="Admin_Donor.php"><img src="user.png" alt="Donors"></a>
        </div>
        <figcaption><h1>DONORS</h1></figcaption>
    </figure>

    <figure class="snip1559">
        <div class="profile-image">
            <a href="Admin_Request.php"><img src="file.png" alt="Request"></a>
        </div>
        <figcaption><h1>REQUEST</h1></figcaption>
    </figure>

    <figure class="snip1559">
        <div class="profile-image">
            <a href="Admin_Inventory.php"><img src="shipping.png" alt="Inventory"></a>
        </div>
        <figcaption><h1>INVENTORY</h1></figcaption>
    </figure>
</div>

<div id="footer"><br>
    &copy; 2022. CBB.com. All Rights Reserved
</div>

</body>
</html>
