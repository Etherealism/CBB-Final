<?php
// Use shared DB connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Inventory</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <style>
        h4,h5{font-family: "Lato", sans-serif}
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
            height: auto;
            margin-top: 20px;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: -5px;
            border-radius:10px;
            font-size:40;
            padding:  10;
            font-weight:bold;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.73);}
        .row{
            display: table-row;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -130px;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #9d2927;
            color: white;
        }

        button {
            padding: 5px 15px;
            font-size: 15px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #9c2927;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px #000000;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        button:hover {background-color: rgb(0, 0, 0);}

        button:active {
            background-color: rgba(252, 250, 250, 0);
            box-shadow: 0 5px #000000;
            transform: translateY(4px);
        }
        .footer {
            padding:40px 0;
            background-color:#ffffff;
            color:#4b4c4d;
        }
        .footer-basic .copyright {
            margin-top:15px;
            text-align:center;
            font-family: "Lato", sans-serif;
            font-size:13px;
            color: #000000;
            margin-bottom:0;
        }
    </style>
</head>
<body>
<div id="navbar">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a href="Admin_home.php" class="w3-bar-item w3-button w3-wide">
            <img src="pngaaa.com-5280690.png" alt="" width="45" height="48" style="vertical-align:middle;margin:-10px 20px">
            <h7>Community Blood Bank</h7>
        </a>
        <div class="w3-right w3-hide-small">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Admin_home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
            <a href="Admin_Donor.php" class="w3-bar-item w3-hide-small w3-padding-large w3-hover-white">Donors</a>
            <a href="Admin_Request.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Request</a>
            <a href="Admin_Inventory.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Inventory</a>
            <a onclick="javascript:return confirm('Do you want to logout?');" href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
        </div>
    </div>
</div>

<div class="main">
    <br>
    <table id="customers">
        <tr>
            <th scope="col">Blood ID</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Available Blood Packs</th>
            <th scope="col">Operations</th>
        </tr>
        <tbody>
        <?php
            $sql = "SELECT * FROM blood_inventory";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $btype = $row['blood_type'];
                    $bamount = $row['blood_packs'];

                    echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$btype.'</td>
                        <td>'.$bamount.'</td>
                        <td>
                            <button><a href="Admin_Edit_Inventory.php?editid='.$id.'">Edit</a></button>
                        </td>
                    </tr>';
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
