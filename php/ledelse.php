<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ledelse</title>
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
                <h1>Ledelse</h1>
            </div>
           
            <div class="profilmainContent2">
                <div class="profiln2">
                    <img src="../img/profilbillede.png" alt="">
                    <div class="profiltekst">
                    <p>Navn: Noree Ismael</p>
                    <p>E-mail: ni@tec.dk</p>
                    <p>Uddanelsesleder</p>
                </div>
                    </div>  
                <div class="profiln2">
                    <img src="../img/profilbillede.png" alt="">
                    <div class="profiltekst">
                    <p>Navn: Annette Thestrup</p>
                    <p>E-mail: at@tec.dk</p>
                    <p>Salgskonsulent</p>
                </div>
                    </div>     
                <div class="profiln2">
                    <img src="../img/profilbillede.png" alt="">
                    <div class="profiltekst">
                    <p>Navn: Lennart Tvede</p>
                    <p>E-mail: LTV@tec.dk</p>
                    <p>Salgskonsulent</p>
                </div>
                    </div>        
                                                                                                                
        </div>
        
       

        </div>
        
    </div>
</body>


</html>
