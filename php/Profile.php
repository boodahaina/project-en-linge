<?php
session_start();
if(isset($_SESSION["nameuser"])==false)
{
  header('Location:index.php');
}
$user=$_SESSION["nameuser"];
require('Connection.php');
$function5=get_id_all($user); 
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

<body>
<!--Header!-->
<div class="header">
	<nav class="navbar navbar-expand-md navbar-light bg-light">
    <h4 class="text-danger col-2 ml-3" style="font-family:Bell MT;font-size:30px;">LALAO GASY</h4>
    </nav>
</div>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
    <div class="card text-center">
  <div class="card-header bg-light text-danger">
    Bienvenue <?php echo $function5['Prenom']; ?>
  </div>
  <div class="card-body mt-4">
    <h5 class="card-title">                
    <?php if($function5['PhotoProfil']==NULL) { ?>
        <img src="../images/users/default.png" alt="..." class="rounded-circle">
    <?php } else if($function5['PhotoProfil']!=NULL) {?>
        <img src="../Upload/<?php echo $function5['PhotoProfil'];?>" alt="..." class="rounded-circle">
    <?php } ?>
    </h5>
    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModaltwo">Changer de Profil</button>
    <a href="deconnexionTraitement.php" class="btn btn-outline-danger">Se déconnecter</a>
  </div>
</div>
    </div>

    <div class="col-8">
    <div class="card-columns">
    <div class="card bg-danger text-light">
    <div class="card-body">
    <a href="Match.php" class="text-light" style="cursor:pointer;"><h5 class="card-title">Voir les matchs</h5></a>
      <p class="card-text">Regardez les matchs qui vous passionnent et qui vous inspirent. Soyez chanceux parmis tant d'autres joueurs. Que le meilleur gagne!</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <a href="PariSurMatch.php" class="text-dark" style="cursor:pointer;"><h5 class="card-title">Pariez sur un match</h5></a>
      <p class="card-text">Pariez, pariez plus pour avoir pleins d'argents. Laissez-nous vous surprendre.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <a href="Comptebancaire.php" class="text-dark" style="cursor:pointer;"><h5 class="card-title">Rajouter de l'argent dans votre compte</h5></a>
      <p class="card-text">Ajouter votre argent sur Mobile Money. Aillez-confiance.</p>
    </div>
  </div>
  <div class="card bg-danger text-light">
    <div class="card-body">
    <a href="Comptebancaire.php" class="text-light" style="cursor:pointer;"><h5 class="card-title">Consultez vos fonds</h5></a>
      <p class="card-text">Permet de regarder votre solde en cours.Vos fonds representent une grande valeur pour nous.C'est pourquoi nous le protegeons en toute honnetete</p>
    </div>
  </div>
  <div class="card bg-danger text-light">
    <div class="card-body">
    <a href="#" class="text-light" style="cursor:pointer;"><h5 class="card-title">Vos gains durant les matchs</h5></a>
      <p class="card-text">Voir ici tout ce que vous avez gagne durant votre paris</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <a href="Comptebancaire.php" class="text-dark" style="cursor:pointer;"><h5 class="card-title">Vos pertes durant les matchs</h5></a>
      <p class="card-text">Voir ici tout ce que vous avez perdus durant votre paris. Ne soyez pas decu. La chance tourne a tous et a toutes.</p>
    </div>
  </div>
</div>
    </div>
</div>
</div>
<br>
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
<!--Footer!-->
</body>
<div class="modal fade" id="exampleModaltwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <!--Edit Profile!-->
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="exampleModalLabel">Changer de Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="Traitementphoto.php" method="post"enctype="multipart/form-data">
                        <div class="custom-file">
                            <input type="file" name="profil" class="custom-file-input" id="validatedCustomFile">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                            <label class="custom-file-label" for="validatedCustomFile">Choose File...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback
                        </div> 
                        </div>        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button class="btn btn-danger">Valider</button>
                        </div>
                        </div>
                    </form>
             </div>
        </div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>