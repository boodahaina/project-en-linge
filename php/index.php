<?php   
    session_start();
    if(isset($_SESSION["nameuser"]))
    {
        header('Location:profile.php');
    }
$a=0;
if(isset($_GET["nom"]))
{
    $nom=$_GET["nom"];
}else{
    $nom="rien";
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

<body>
<!--Header!-->
<div class="header">
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <h4 class="text-danger col-2 ml-3" style="font-family:Bell MT;font-size:30px;">LALAO GASY</h4>

    <div class="col-5">
    </div>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse col-7" id="navbarSupportedContent" style="float:right;">
	    <ul class="navbar-nav">
            <li class="nav-item">
            <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#exampleModal">Se connecter</button>
            </li>
            <a href="AdmLogin.php" class="btn btn-outline-danger ml-2">Administrateur</a>
            <a href="Inscription.php" class="btn btn-outline-danger ml-2">S'inscrire</a>
        </ul>
      </div>
    </nav>
</div>
<!--Header end!-->
<br>

<!--Container!-->
<div class="container-fluid">
        <div class="card-body">
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/foot/foot1.png" class="d-block w-100" alt="..." width="1200px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/foot/foot2.png" class="d-block w-100" alt="..." width="1200px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/foot/foot3.png" class="d-block w-100" alt="..." width="1200px" height="800px">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <div class="text pt-3 pb-3">
            <h1 class="display-4 text-center text-light">Bienvenue sur Lalao Gasy!!</h1>
            <h1 class="font-weight-light text-center text-light">Celui ou celle qui joue seulement,gagne! Tentez votre chance.</h1>
        </div>
        <div class="card-body text-center text-dark">
            <h3>Tournez votre attention!!</h3>
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <p class="font-weight-light">Voulez-vous vous enrichir en un match? Misez sur la bonne équipe
                        et gagnez le prix.</p>
                    </div>
                    <div class="col-3">
                    </div>
                </div>

                <div class="rowthree">
                    <div class="card-deck" style="border:none;">
                        <div class="card" style="border:none;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1 ml-5">
                                        <div class="borderone">
                                        <i class="fa fa-photo text-danger"></i>
                                        </div>
                                    </div>
                                <div class="col-7 ml-3 text-left">
                                    <h5 class="card-title">Basket</h5>
                                    <p class="card-text font-weight-light">doloremque laudantum, totam rem aperiam, eaque ipsa quae ab ilo inventore veritaos.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border:none;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1 ml-5">
                                        <div class="bordertwo">
                                        <i class="fa fa-code text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 ml-3 text-left">
                                        <h5 class="card-title">Foot</h5>
                                        <p class="card-text font-weight-light">doloremque laudantum, totam rem aperiam, eaque ipsa quae ab ilo inventore veritaos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border:none;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1 ml-5">
                                        <div class="borderthree">
                                        <i class="fa fa-diamond text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 ml-3 text-left">
                                        <h5 class="card-title">Petanque</h5>
                                        <p class="card-text font-weight-light">doloremque laudantum, totam rem aperiam, eaque ipsa quae ab ilo inventore veritaos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h3>Visitez aussi d'autres sites:</h3>
        <div class="rowfour">
        <button type="button" class="btn btn-danger btn-lg mb-2">PMU</button>
        <button type="button" class="btn btn-dark btn-lg mb-2">Bet+</button>
        <button type="button" class="btn btn-dark btn-lg mb-2">Parisport</button>
        </div>
    </div>
</div>
<!--Container end-->

<!--Footer!-->
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
<!--Footer end!-->


</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-danger">
                <h5 class="modal-title" id="exampleModalLabel">Connectez-vous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-danger">
                <form action="Traitementlogin.php" method="post">
                    <h6 class="text-left"><i class="fa fa-pencil"></i>Votre email:</h6>
                        <input type="email" class="form-control" name="takeemail" required>
                        <h6 class="text-left"><i class="fa fa-pencil"></i>Votre mot de passe:</h6>
                        <input type="password" class="form-control" name="takemdp" required>
                        <?php if($nom=="Erreur") { ?>
                            <div class="alert alert-danger text-center mt-3" role="alert">
                            Vérifier votre email ou votre mot de passe, s'il vous plaît!!
                          </div>
                    <?php } ?>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-danger">Connexion</button>
            </div>
                </form>
        </div>
    </div>
</div>



<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>


