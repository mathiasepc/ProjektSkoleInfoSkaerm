<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrastruktur</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
require_once('./db_connect.php'); // Database connection file
require_once('./buttonCounter.php');  // PHP functions file

session_start();

$page_id = 3;

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
        <p class="ITFagTitle">Infrastruktur</p>
    
        
        <div class="ITFagSite">
            <div class="LeftSide">
                <div style="display:inline-block;vertical-align:top;">
                    <img class="ImgSupport" src="../img/Infrastruktur.jpg" alt="">
                </div>
            </div>
            <div class="RightSide">
                <div style="display:inline-block;" >
                    <p>Varighed: 5 ½ år (inkl. grundforløb 1)</p><br>
                    <br>
                    <p>Som datatekniker opbygger, vedligeholder og reparerer du it-systemer og dataanlæg.</p>
                    <p>Med specialet i infrastruktur arbejder du med at designe, installere og konfigurere serverløsninger og avancererede LAN- og WAN-netværk.</p><br>
                    <p>Se hvor de forskellige linjer har lokale: <a href="./labmain.php"> Klik Her</a></p>
                </div>
            </div>
        </div>
        
    </div>
</body>
