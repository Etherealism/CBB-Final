<html>
<head>
    <title>Welcome to CBB</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    *{
        margin: 0;
        padding: 10;
        box-sizing: border-box;
        font-size: 18;
        font-family: 'Century Gothic',sans-serif;
    }

    html, body{
        /*background-color: #134370;*/
        margin-left: 70px;
        margin-right: 70px;
        /*margin: 0px;*/
        font-family: 'Arial', sans-serif;

    }
    html {
        background: url(hex1.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    }
    #header{
        background-color: #134370;
        font-size:25;
        margin:0;
        height:90;
        border-radius:0px;
        text-align:center;
    }
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


    .snip1559 {
        position: relative;
        display: inline-block;
        border-radius: 10px;
        overflow: hidden;
        min-width: 320px;
        width: 100%;
        padding: 25;
        background-color: rgb(220, 215, 215);
    }

    .snip1559 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .main{
        background-color: rgba(232, 65, 52, 0.64);
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom: -20px;
        margin-top: 20px;
        border-radius:10px;
        font-size:40;
        padding:  50;
        font-weight:bold;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
    }
    #footer{
        color: #ffffff;
        /*background-color: #134370;*/
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        clear:both;
        border-radius:5px;
        text-align:center;
        padding:15px;
        font-size:90%;
    }
    .input-box{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: -120px;
        margin-top: -20px;
    }
    .input-box input[type="submit"]{
        background: linear-gradient(to right, rgb(49, 48, 48) 0%, rgb(46, 47, 49) 100%);
        font-family: "Lato", sans-serif;
        color: #ffffff;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border: none;
    }

    .input-box input[type="submit"]:hover{
        letter-spacing: 1px;
        background: linear-gradient(to left, rgb(216, 209, 209) 0%, rgb(41, 43, 45) 100%);
        color: white;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    h5{
        font-family: "Lato", sans-serif;
        font-size:65px;
        font-weight: bold;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
        position: relative;
        margin-top: 10px;
        /*left: 10px;*/
        text-align:center;
        color: #ffffff;
        font-family:"Century Gothic"}
    h3{
        font-size:260%;
        text-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
        text-align:left;
        position: relative;
        left: 0px;
        color:white;
        margin-bottom: 5px;
        font-family:"Century Gothic"}
    p{
        font-size:16px;
        font-weight: normal;
        position: relative;
        /*left: 10px;*/
        text-align:center;
        color:#134370;
        font-family:"Century Gothic"}
    h1{
        font-size:20px;
        position: relative;
        /*left: 10px;*/
        text-align:center;
        color:#134370;
        font-family:"Century Gothic"}

    img{
        display: block;
        float: left;
        max-width: 100%;
        max-height: 100%;
    }
</style>
<body>
<div id="header">
    <img src ="pngaaa.com-5280690.png" alt="" width="90" height="100" style="vertical-align:middle;margin:-10px 20px">
    <h3>Community Blood Bank</h3>
</div>

<div class="main">
    <h5>Welcome to Community Blood Bank</h5>
    <figure class="snip1559">
        <div class="input-box button">
            <a href="DonateForm.php">
                <input type="submit" name="" value="DONATE">
            </a>
        </div>
        <div class="input-box button">
            <a href="RequestForm.php">
                <input type="submit" name="" value="REQUEST">
            </a>
        </div>
        <div class="input-box button">
            <a href="Admin_Login.php">
                <input type="submit" name="" value="LOG IN AS ADMIN">
            </a>
        </div>
    </figure>
</div>
<div id="footer">
    &copy; 2022. CBB.com. All Rights Reserved
</div>
</body>
</html><?php
