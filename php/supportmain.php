<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
 <?php
session_start();
?>
    
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="../index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <div>
                    <a><button class="backAndForward" onclick="history.back()">Back</button></a>
       <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton" <?php if((isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Login</Button></a>
       <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Admin</Button></a> 
       <a class="AdminLogin" href="./logout.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Logout</Button></a> 
    </div>
        </div>

        <div class="mainSection">

            <div class="topContent">
                <h1>Support</h1>
            </div>
        
            <div class="mainContent">
                <div class="textBox">
                <p>Har du problemer i forhold til hardware eller brugerlogin? </p>
                <p>Har du brug for administrator login til software installation?</p>
                <br>
                <p>Gå ned til service desk for at få IT hjælp!</p>
                <br>
                <p style="color:red;font-size:20px;font-weight:bold;">HVIS DE IKKE ER TIL STEDE OG DET ER AKUT!</p>
                <br>
                <p class="boldText">Kontakt service desk:</p>
                <p>Tlf: 25 45 34 15</p> 
                <br>
                <img height="400px" src="../img/ServiceDisk.jpg" alt="">
            </div>
        </div>
    
           
    </div>
</body>

</html>
