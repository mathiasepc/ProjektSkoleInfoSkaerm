<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruktoer</title>
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
                <h1>Instruktør</h1>
            </div>
        
            <div class="profilmainContent">
                <div class="profiln">  
<img src="../img/profilbillede.png" alt="">
                    <div class="profiltekst">
                    <p>Navn: Kim Møller Jensen</p>
                    <p>E-mail: kmj@tec.dk</p>
                    <p>Hold: Programmering P2</p>
                </div>
                    </div>     
                        <div class="profiln">
 			<img src="../img/profilbillede.png" alt="">
                        <div class="profiltekst">
                        <p>Navn: Steve Jørgensen</p>
                        <p>E-mail: sjoe@tec.dk</p>
                        <p>Hold: Programmering P2</p>
                    </div>
                        </div>  
                            <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                            <div class="profiltekst">
                            <p>Navn: Tuner Budanur</p>
                            <p>E-mail: tbu@tec.dk</p>
                            <p>Hold: IT-Support P2-P3</p>
                        </div>
                            </div>  
                                <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                                <div class="profiltekst">
                                <p>Navn: Sophie Dang</p>
                                <p>E-mail: sda@tec.dk</p>
                                <p>Hold: IT-Support P2-P3</p>
                            </div>
                                </div>  
                                    <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                                    <div class="profiltekst">
                                    <p>Navn: Casper N. Vestergaard</p>
                                    <p>E-mail: cv@tec.dk</p>
                                    <p>Hold: Programmering P3-P4</p>
                                </div>
                                    </div>  
                                        <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                                        <div class="profiltekst">
                                        <p>Navn: Kristian Kure</p>
                                        <p>E-mail: kku@tec.dk</p>
                                        <p>Hold: Programmering P3-P4</p>
                                    </div>
                                        </div>  
                                            <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                                            <div class="profiltekst">
                                            <p>Navn: Nicklas Flindt Nilsson</p>
                                            <p>E-mail: nfn@tec.dk</p>
                                            <p>Hold: Infrastruktur P2-P6</p>
                                        </div>
                                            </div>  
                                                <div class="profiln">
<img src="../img/profilbillede.png" alt="">
                                                <div class="profiltekst">
                                                <p>Navn: Rami Andreas El Said</p>
                                                <p>E-mail: reds@tec.dk</p>
                                                <p>Hold: Programmering P5-P6</p>
                                            </div>
                                                </div>  
                                                                                                                       
            </div>
        </div>
        
             
    </div>
</body>

</html>
