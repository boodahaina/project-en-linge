<?php

session_start();
if(isset($_SESSION["nameuser"])==false)
{
  header('Location:index.php');
}
$user=$_SESSION["nameuser"];
require('Connection.php');
$function5=get_id_all($user);
$matchMandeha=0;
if(isset($_GET["matchType"]))
{
    $matchMandeha=$_GET["matchType"];
}
?>
<!DOCTYPE html>
<html>
    <title>Parier sur Match</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE_Edge">
    <meta name="viewport" content="width=device-width,initial-scale">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">   
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Profile.css">
    <link rel="stylesheet" href="../css/PariCss.css">

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
        <div class="col-md-2" id="partieGauche">
            <h4>Les matchs:</h4>
            <div class="row">
                <a href="PariSurMatch.php?matchType=1" <?php if($matchMandeha==1){?> style="color: black;opacity: 1;font-size: 20px;" <?php } ?>>En cours</a>
            </div>
            <div class="row">
                <a href="PariSurMatch.php?matchType=2" <?php if($matchMandeha==2){?> style="color: black;opacity: 1;font-size: 20px;" <?php } ?>>A venir</a>
            </div>
        </div>
        <!-- misy anle liste match bedbe -->
        <div class="col-md-8">
            <?php   if($matchMandeha==1){   ?>
                        <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>
                        <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>
                        <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>
                        <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>
                        <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>
                    
                    </div>
            <?php   }   
                    elseif($matchMandeha==2){   ?>
                    <h5>Les Matchs à venir sont:</h5>
                    <div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div><div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div><div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div><div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div><div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div><div>
                        <h5>Les Matchs en cours sont:</h5>
                        <div class="row" id="global">
                        <div class="col-md-6" id="matchField">
                            <div class="row justify-content-md-center">
                                <div class="col-md-5" style="text-align:right">
                                    Barea <img src="../images/drapeau/1.png" class="rounded-circle" id="logoEquipe"> <span>Cote1</span> 
                                </div>
                                <div class="col-md-1">V.S</div>
                                <div class="col-md-5"style="text-align:left">
                                    <span>Cote2</span> <img src="../images/drapeau/2.jpg" class="rounded-circle" id="logoEquipe"> Barcelona
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-5">
                            <form action="">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" style="text-align:center">12/12/2019</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Montant en Ar" style="text-align:right">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-danger">Parier</button>
                            </form>
                        </div> 
                        </div>  
            <?php   }   ?>
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