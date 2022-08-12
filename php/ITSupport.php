<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITSupport</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
     <?php
require_once('./db_connect.php'); // Database connection file
require_once('./buttonCounter.php');  // PHP functions file

$page_id = 1;

session_start();

add_view($conn, $page_id);
?> 
    
    <div class="wrapper" id="wrapper">
        <header class="pageHeader">
            <a Class="logoLink" href="../index.php"><p class="logoName">Skoleoplæringscenter</p></a>
            <div>
                <a><button class="backAndForward" onclick="history.back()">Back</button></a>
       <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton" <?php if((isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Login</Button></a>
       <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Admin</Button></a> 
       <a class="AdminLogin" href="./logout.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Logout</Button></a> 
    </div>
        </header>
        <p class="ITFagTitle">IT-Supporter</p>
        
        <div class="ITFagSite">
            <div class="LeftSide">
                <div style="display:inline-block;vertical-align:top;">
                    <img class="ImgSupport" src="/img/Support.jpg" alt="">
                </div>
            </div>
            <div class="RightSide">
                <div style="display:inline-block;" >
                    <p>Varighed: 3 år (inkl. grundforløb 1)</p><br>
                    <br>
                    <p>Som it-supporter står du altid klar med bred og opdateret it-viden, for det er dig, der bliver ringet efter, når uheldet er ude.</p>
                    <p>Du supporterer brugere, hvis fx computere eller netværk driller, og du har også kendskab til sikkerhedsløsninger.</p>     
                    <p>Du er med andre ord en it-ambulance, der rykker ud og redder dagen, når der er tekniske problemer.</p><br>
                    <p>Se hvor de forskellige linjer har lokale: <a href="./labmain.php"> Klik Her</a></p>
                </div>
            </div>

        </div>
        
         
    </div>     
   
</body>
