<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<title>CBB - Request Form</title>
<?php
	//Database connection
	$con = mysqli_connect('localhost','eth','gunzs12345','blood_db');
	//Variable
	if (isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$cnum = $_POST['cnum'];
		$addr = $_POST['addr'];
		$email = $_POST['email'];
		$btype = $_POST['btype'];
		$bpacks = $_POST['bpacks'];

		$sql = "INSERT INTO `request_info` (`name`,`num`,`address`,`email`,`blood_type`,`blood_packs`,`status`) VALUES 
		('$name','$cnum','$addr','$email','$btype','$bpacks','0')";
		$que = mysqli_query($con,$sql);
		if($que)
		{
			echo '<script>alert("Successfully recorded")</script>';
		}
		else
		{
			echo '<script>alert("Failed")</script>';
		}
	}
?>
    <style>
        body,h4,h5,h6 {font-family: "Lato", sans-serif}
        h1{font-family:"Lato",sans-serif; font-weight: bold}
        h7{font-family: "Lato", sans-serif; font-size: 23px; font-weight: bold}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        html {
            background: rgb(64, 64, 64) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        h3{
            font-size:260%;
            text-shadow: 0 10px 10px rgb(0, 0, 0);
            text-align:left;
            position: relative;
            left: 0px;
            color:white;
            margin-bottom: 5px;
            font-family:"Century Gothic"}
        h2{
            font-size:305%;
            text-shadow: 0 10px 10px rgb(0, 0, 0);
            font-weight: bold;
            position: relative;
            /*left: 10px;*/
            text-align:center;
            color: rgb(0, 0, 0);
            font-family:"Century Gothic"}
        label {
            display: inline-block;
            width: 140px;
            text-align: left;
            position: relative;
            left: 60px;
        }
        input {
            display: inline-block;
            width: 250px;
            text-align: left;
            position: relative;
            border: none;
            border-radius: 5px;
            left: 60px;
        }
        select {
            display: inline-block;
            width: 250px;
            text-align: center;
            position: relative;
            border: none;
            border-radius: 5px;
            left: 60px;
        }
        .header-img {
            width: 100%;
            height: 200px;
            background:url("vector-DEC-2020-39_generated.jpg")no-repeat center center fixed;;
            background-size: cover;
        }

        .main{
            background-color: rgb(239, 239, 239);
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: -15px;
            border-radius:10px;
            font-size:40;
            padding:  10;
            font-weight:bold;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);}
        .row{
            display: table-row;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -130px;
        }
        .row label{
            display:table-cell;
            padding:2px,40px;
            color: rgb(16, 0, 0);
        }

        .row input{
            display:table-cell;
            border: none;
            border-radius: 5px;
            padding:10px;
        }
        input-box{
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-left: 300px;
            margin-top: 20px;
        }
        .input-box input[type="submit"]{
            background: linear-gradient(to top, rgb(243, 67, 54) 0%, rgb(243, 67, 54) 100%);
            font-size: 17px;
            margin:0 auto;
            display:block;
            font-weight: bold;
            color: #000000;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 18px;
            text-align: center;
            border: none;
        }

        .input-box input[type="submit"]:hover{
            letter-spacing: 1px;
            color: #000000;
            background: linear-gradient(to bottom, rgba(222, 215, 215, 0.97) 0%, rgba(42, 41, 41, 0.7) 100%);
        }
        .input-box input[type="button"]{
        background: linear-gradient(to top, rgb(243, 67, 54) 0%, rgb(243, 67, 54) 100%);
        font-size: 17px;
        margin:0 auto;
        display:block;
        font-weight: bold;
        color: #000000;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 18px;
        text-align: center;
        border: none;
    }
    .input-box input[type="button"]:hover{
        letter-spacing: 1px;
        color: #000000;
        background: linear-gradient(to bottom, rgba(222, 215, 215, 0.97) 0%, rgba(42, 41, 41, 0.7) 100%);
    }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        #footer{
            color: #ffffff;
            /*background-color: #134370;*/
            margin-top:25px;
            height:5px;
            clear:both;
            border-radius:5px;
            text-align:center;
            padding:15px;
            font-size:90%;
        }
</style>
<body>

<div id="navbar">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a href="Home.php" class="w3-bar-item w3-button w3-wide"><img src ="pngaaa.com-5280690.png" alt="" width="45" height="48"style="vertical-align:middle;margin:-10px 20px"><h7>Community Blood Bank</h7></a>
        <div class="w3-right w3-hide-small">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Home.php" class="wbutton w3-3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
            <a href="DonateForm.php" class="w3-bar-item w3-hide-small w3-padding-large w3-hover-white "style="text-decoration:none">Donor</a>
            <a href="RequestForm.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Request</a>
            <a href="Aboutus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
            <a href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
        </div>
    </div>
    <div id="header">
        <div class=header-img> </div>
    <br>
    <br>
    <h2>REQUESTER'S INFORMATION</h2>
</div>

<div class="main">

    <form action = "#" method="POST">
        <p>
            <br>
        <div class="row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
            </br> </br>
        </div>

        <div class="row">
            <label for="phone">Phone No.:</label>
            <input type="number" id="phone" name="cnum" placeholder="Phone No." required> </br> </br>
        </div>

        <div class="row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required> </br> </br>
        </div>

        <div class="row">
            <label for="address">Address:</label>
            <input type="text" id="address" name="addr" placeholder="House No./Street" required> </br> </br>
        </div>
        <p>
        </p>
        </p>
        <div class="row">
            <label for="blood type">Blood Type:</label>
            <select name="btype" id="blood type" name="btype" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select> </br> </br>
        </div>
        <div class="row">
            <label for="blood amount">Blood Packs:</label>
            <input type="text" id="blood amount" name="bpacks" size="20" maxlength="50" placeholder="Enter Amount"> </br> </br>
        </div>
        <br>
        <br>
        <div class="input-box button">
            <input type="submit" name="submit" value="Submit">
            </p>
        </div>
        <div class="input-box button"> <a href="Home.php" style="text-decoration:none"><input type="button" name=""  value="Back">
            </a>
        </div>
        <div id="footer"><br>
            &copy; 2022. CBB.com. All Rights Reserved
        </div>
    </form>
</body>
</html>