<?php
require('Connection.php');
$Connection=Connection();
$requet="SELECT * FROM Matchs";
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
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Numero de Match</th>
      <th scope="col">Equipe1</th>
      <th scope="col"></th>
      <th scope="col">Equipe2</th>
      <th scope="col">Date de Match</th>
      <th scope="col">Heure de Match</th>
      <th scope="col">ButsEquipe1</th>
      <th scope="col">ButsEquipe2</th>
      <th scope="col">Resultat de Match</th>
      <th scope="col">Votre pari!!</th>
    </tr>
  </thead>
  <?php while($data=mysqli_fetch_assoc($together)) { ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $data['IdMatch'];?></th>
      <td><?php echo $data['Equipe1'];?></td>
      <td>VS</td>
      <td><?php echo $data['Equipe2'];?></td>
      <td><?php echo $data['DateMatch'];?></td>
      <td><?php echo $data['HeureMatch'];?></td>
      <td><?php echo $data['ButsEquipe1'];?></td>
      <td><?php echo $data['ButsEquipe2'];?></td>
      <td><?php echo $data['ResultatMatch'];?></td>
      <td><a href="#" class="btn btn-danger ml-3">Pariez</a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>
</body>

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