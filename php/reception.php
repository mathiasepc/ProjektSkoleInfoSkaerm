<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception</title>
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
                <h1>Reception</h1>
            </div>
            
           
            <div class="mainContent">
            <div class="leftContent">
               <img src="../img/Reception.jpg" alt="">
            </div>
            <div class="profilrightContent">
                <div class="profil">
                <img src="../img/profilbillede.png" alt="">
                <p>Navn: Carin Rabell</p>
                <p>E-mail: cra@tec.dk</p>
		<p>Uddannelsesvejleder</p>
                </div>
                <br><br>
                <div class="profil">
                    <img src="../img/profilbillede.png" alt="">
                    <p>Navn: Maja Bjarnesen</p>
                    <p>E-mail: mb@tec.dk</p>
		    <p>Uddanelsesvejleder</p>
                    </div>
                    <br><br>
                    <div class="profil">
                        <img src="../img/profilbillede.png" alt="">
                        <p>Navn: Lonny Grønning</p>
                        <p>E-mail: lg@tec.dk</p>
			<p>Praktikcenter vejleder</p>
                        </div>
                        <br><br>
         <p style="font-weight:bold;color:red;">* IKKE ALTID TILGÆNGELIG PÅ KONTORET</p>
            </div>
        </div>
       

        </div>
        
    </div>

</body>

</html>
