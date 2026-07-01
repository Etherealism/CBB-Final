<!DOCTYPE html>
<html lang="en">
<title>Home - CBB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h4,h5,h6 {font-family: "Lato", sans-serif}
    h1{
        font-family:"Lato",sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }
    h3{
        font-family:"Lato",sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }
    h2{
        font-family:"Lato",sans-serif;
        font-weight: bold;
        color: #0a0000;
        text-shadow: 0 10px 10px rgb(0, 0, 0);
    }
    h7{font-family: "Lato", sans-serif; font-size: 23px; font-weight: bold}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .header-img {
        width: auto;
        height: auto;
        background:url("2580695.jpg")no-repeat center center fixed;;
        background-size: cover;

    }

</style>
<body>
<<div style="overflow-y: scroll;">
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a href="Home.php" class="w3-bar-item w3-button w3-wide"><img src ="pngaaa.com-5280690.png" alt="" width="45" height="48"style="vertical-align:middle;margin:-10px 20px"><h7>Community Blood Bank</h7></a>
            <div class="w3-right w3-hide-small">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="Home.php" class="wbutton w3-3-bar-item w3-button w3-padding-large w3-white">Home</a>
                <a href="DonateForm.php" class="w3-bar-item w3-hide-small w3-padding-large w3-hover-white"style="text-decoration:none">Donor</a>
                <a href="RequestForm.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Request</a>
                <a href="Aboutus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
                <a href="Admin_Login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
            </div>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container header-img w3-center" style="padding:128px 16px">

        <h1 class="w3-margin w3-jumbo">COMMUNITY BLOOD BANK</h1>
        <h3 class="w3-xlarge">"Excuses never save a life, Blood donation does.''</h3>
        <button class="w3-button w3-red w3-padding-large w3-large w3-margin-top"><a href="DonateForm.php"style="text-decoration:none">Donate now!</a></button>
    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h2>General Guidelines for Blood Donation</h2>
                <h5 class="w3-padding-32">
                    <p>- Be in good general health and feeling well.</p>
                    <p>- Be at least 17 years old in most states (16 years old with parental consent in some states).</p>
                    <p>- Weigh at least 110 lbs. Additional height and weight requirements apply for donors 18 years old and younger and all high school student donors.</p>
                    <p>- Have not donated blood in the last 56 days.</p>
                    <p>- Blood volume collected will depend mainly on you body weight.</p>
                    <p>- Pulse rate: Between 60 and 100 beats/minute with regular rhythm.</p>
                    <p>- Blood pressure: Between 90 and 160 systolic and 60 and 100 diastolic.</p>
                    <p>- Hemoglobin: At least 125 g/L.</p>
                </h5>

            </div>

            <div class="w3-third w3-center">
                <img src ="bloodsm.png" alt="" width="370" height="350"style="vertical-align:middle;margin:-10px 20px">
            </div>
        </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <img src ="wblood.png" alt="" width="300" height="280"style="vertical-align:middle;margin:-10px -95px">
            </div>

            <div class="w3-twothird">
                <h2>BLOOD DONATION PROGRAM</h2>
                <h5 class="w3-padding-32">Republic Act No. 7719, also known as the National Blood Services Act of 1994, promotes voluntary blood donation to provide sufficient supply of safe blood and to regulate blood banks. This act aims to inculcate public awareness that blood donation is a humanitarian act.</h5>

                <p class="w3-text-grey">Based from the data from the National Voluntary Blood Services Program, a total of 654,763 blood units were collected in 2009. Fifty-eight percent of which was from voluntary blood donation and the remaining from replacement donation. This year, particular provinces have already achieved 100% voluntary blood donation. The DOH is hoping that many individuals will become regular voluntary unpaid donors to guarantee
                    sufficient supply of safe blood and to meet national blood necessities.</p>
            </div>
        </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">A donation of blood means a few minutes to you, but a lifetime for somebody else.</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">

        &copy; 2022. CBB.com. All Rights Reserved
    </footer>



</body>
</html>
