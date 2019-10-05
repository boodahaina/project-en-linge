<?php
session_start();
require('Connection.php');
$Connection=Connection();
$email=$_SESSION["nameuser"];
$requet="SELECT Montant FROM AjoutFonds JOIN Joueur ON AjoutFonds.IDJOUEUR=Joueur.IDJOUEUR WHERE Email='%s'";
$requet=sprintf($requet,$email);
$together=mysqli_query($Connection,$requet);
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
<div class="header">
	<nav class="navbar navbar-expand-md navbar-light bg-light">
    <h4 class="text-danger col-2 ml-3" style="font-family:Bell MT;font-size:30px;">LALAO GASY</h4>
  </nav>
</div>
<br>

<div class="container-fluid">
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-danger font-weight-light">Faire une transaction:</h5>
      <p class="card-text font-weight-light">Effectuez votre transaction ici! S'il vous plait veuillez remplir les champs suivants:</p>
      <form action="Traitementtransaction.php" method="post">
      <div class="row">
            <div class="col">
                <h6 class="font-weight-light">Numero de transaction:</h6>
                <input type="text" class="form-control" name="numero" placeholder="Entrez votre numero">
                </div>
            <div class="col">
                <h6 class="font-weight-light">Montant:</h6>
                <input type="text" class="form-control" name="montant" placeholder="Entrez votre montant">
                </div>
            </div>
            <center><button class="btn btn-outline-danger mt-3">Valider la transaction</button></center>
            </form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-danger font-weight-light">Solde de mon compte:</h5>
      <?php while($data=mysqli_fetch_assoc($together)) { ?>
      <p class="card-text font-weight-light">Votre solde est de:
      <h1><?php echo $data['Montant'];?>Ar</h1></p>
      <?php } ?>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-danger">Gains et Pertes</h5>
      <p class="card-text">Gains:59600Ar</p>
      <p class="card-text">Pertes:0Ar</p>
    </div>
  </div>
</div>
</div>
</body>
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

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
