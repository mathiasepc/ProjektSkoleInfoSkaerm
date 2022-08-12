<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drift</title>
    <link rel="stylesheet" href="../css/style.css">
   
</head>

<body>
    <?php
require_once('./db_connect.php'); // Database connection file
require_once('./buttonCounter.php');  // PHP functions file

$page_id = 5;

session_start();

add_view($conn, $page_id);
?>
    
    <script src="../js/scripts.js"></script>
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
                <h1>Lokaler</h1>
            </div>

                <div class="topContent3">

                    <button class="loginButton"
                        onclick=lokale6()>
                    Infrastruktur
                    </button>

                    <button class="loginButton"
                        onclick=lokale7();>
                    Infrastruktur og IT-support
                    </button>

                    <button class="loginButton"
                        onclick=lokale8();>
                    Programmering
                    </button>
                </div>  
           
            <div class="mainContent">
               <img id="myImage" class="kort" src="../img/BilledeAfSkole.jpg" alt="">
            </div>
            
        </div>
    </div>
</body>
</html>
