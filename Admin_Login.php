<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in - CBB</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
    *{
        margin: 0;
        padding: 10;
        color: rgba(58, 7, 7, 0.97);
        font-size: 15;
        font-family: 'Century Gothic',sans-serif;
    }

    html, body{
        display: grid;
        height: 85%;
        width: 100%;
        place-items: center;
        position: absolute;
        top: 60px;
        background: url(hh.jpg) no-repeat center center fixed;
        background-size: cover;
    }

    .container{
        position: fixed;
        background: rgb(242, 67, 54);
        max-width: 800px;
        width: 100%;
        height: 32%;
        margin-top: 170px;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 10px rgb(0, 0, 0);
    }

    .container form .title{
        font-size: 30px;
        color: #100000;
        font-weight: 600;
        margin: 0px 0 10px 0;
        text-align: center;
    }

    .container form .input-box{
        width: 50%;
        height: 45px;
        margin-top: 25px;
        margin-left: 200px;
        position: relative;
    }

    .container form .input-box input{
        width: 100%;
        height: 100%;
        outline: none;
        font-size: 16px;
        border: none;
        border-radius:5px;
    }

    .container form .underline::before{
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        background: #ccc;
        left: 0;
        bottom: 0;
    }

    .container form .underline::after{
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        background: linear-gradient(to right, rgba(58, 7, 7, 0.97) 0%, #d97a86 100%);
        left: 0;
        bottom: 0;
        transform: scaleX(0);
        transform-origin: left;
        transition: all 0.3s ease;
    }

    .container form .input-box input:focus ~ .underline::after,
    .container form .input-box input:valid ~ .underline::after{
        transform: scaleX(1);
    }

    h3{
        font-size:400%;
        font-family: "Lato", sans-serif;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
        position: absolute;
        top: 165px;
        text-align:center;
        color:white;
        margin: 0px;
    }

    .container .input-box input[type="submit"]{
        background: linear-gradient(to top, rgba(58, 7, 7, 0.97) 0%, rgb(16, 0, 0) 100%);
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        border-radius: 10px;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
    }

    .container .input-box input[type="submit"]:hover{
        letter-spacing: 1px;
        color: #000000;
        background: linear-gradient(to bottom, rgba(222, 215, 215, 0.97) 0%, rgba(42, 41, 41, 0.7) 100%);
    }

    p{
        font-size: 18px;
        text-align:center;
        color: #000000;
        font-family:"Century Gothic";
    }

    #footer{
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

<?php
    if(isset($_POST['submit']))
    {
        $uname = $_POST['username'];
        $upass = $_POST['password'];

        $sqlque = "SELECT * FROM admins WHERE username = '$uname' AND password = '$upass' LIMIT 1";
        $result = mysqli_query($conn, $sqlque);

        if (mysqli_num_rows($result) == 1)
        {
            echo "<script>alert('Successfully logged in'); window.location='Admin_home.php';</script>";
        }
        else
        {
            echo "<script>alert('Error. Invalid username or password');</script>";
        }
    }
?>
</head>

<body>

<div id="header">
    <img src="pngaaa.com-5280690.png" width="100" height="120" style="vertical-align:top;margin: -300px 20px">
</div>

<h3>Community Blood Bank</h3>

<div class="container">
    <form method="POST" action="#">
        <div class="title">ADMIN</div>

        <div class="input-box underline">
            <input type="text" name="username" placeholder="   Username" required>
            <div class="underline"></div>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="  Password" required>
            <div class="underline"></div>
        </div>

        <div class="input-box button">
            <input type="submit" name="submit" value="Log In">
            <br>
            <p>Not an Admin? <a href="Home.php">Switch to Homepage</a></p>
        </div>
    </form>
</div>

<div id="footer"><br>
    &copy; 2022. CBB.com. All Rights Reserved
</div>

</body>
</html>
