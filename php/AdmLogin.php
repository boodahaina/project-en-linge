<?php    $misy_erreur=0;
        if(isset($_GET["erreur"]))
        {
            $misy_erreur=1;
        }
?>
<!DOCTYPE html>
<html>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE_Edge">
    <meta name="viewport" content="width=device-width,initial-scale">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">   
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Profile.css">
    <link rel="stylesheet" href="../css/AdmLoginCss.css">

<body>
<!--Header!-->
<div class="header">
	<nav class="navbar navbar-expand-md navbar-light bg-light">
   
        <h4 class="text-danger col-2 ml-3" style="font-family:Bell MT;font-size:30px;"> <a href="index.php" style="text-decoration:none;color:rgb(214, 59, 59); font-size:30px;">LALAO GASY </a></h4>

    <div class="col-5">
    </div>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
      
    </nav>
</div>
<br>

<!--Container!-->
<div class="container-fluid">
        <div class="row">
                <div class="col-md-6">
                    <div class="left" style="margin-top:10%;">
                    <h2 class="display-3 text-danger text-justify ml-5" style="font-size:50px">Bon retour Mr l'Administrateur!!</h2>
                    <h1 class="display-4 text-danger ml-5 text-justify" style="font-size:60px">Voulez-vous faire quelques changements? Veuillez-vous connectez.</h1>
                    </div>
                </div>

                <div class="col-md-6">
                   <div class="row">
                        <div class="col-sm-8 col-md-12 col-lg-8 col-xl-6 offset-sm-2 offset-lg-3">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12" id="SoratraLogin">   
                                        CONNEXION
                                    </div>
                                </div>
                                <form action="AdmLoginTraitement.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="Email" placeholder="Email" required>
                                            <img src="../images/icons/icons8-user-50.png" width="15">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="Pwd" placeholder="Mots de Passe" required>
                                            <img src="../images/icons/icons8-lock-50.png" width="15">
                                        </div>
                                    </div>
                                    <?php   if($misy_erreur==1)
                                            {   ?>
                                                <div class="row" id="erreurContent">
                                                    <div class="col-md-12">
                                                        Erreur de validation. Veuillez verifirier les champs!
                                                    </div>
                                                </div>
                                    <?php   }   ?>
                                    <div class="row">
                                        <div class="col-md-12 " style="margin-top:7%;">
                                            <button type="submit">Se connecter</button>        
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
        <div class="row mr-2">
        </div>
    </div>
    </div>
<br>
<!--Container end!-->

<div class="footer">
    <div class="footer-top">
    <div class="container-fluid">
        <div class="row justify-content-md-center">   
        <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30">
            <h2 class="font-weight-light">Suivez-nous</h2>
            <p class="font-weight-light">Suivez-nous d'ailleurs sur les réseaux sociaux.</p>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class=" fa fa-twitter"></i></a>
            <a href="#"><i class=" fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        </div>
    </div>
    </div>
    <p class="footer-bottom-text"><i class="fa fa-copyright"></i>Copyright 2019</p>
</div>
<!--Container end!-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>