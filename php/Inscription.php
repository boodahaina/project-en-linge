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
   
        <h4 class="text-danger col-2 ml-3" style="font-family:Bell MT;font-size:30px;"> <a href="index.php" style="text-decoration:none;color:rgb(214, 59, 59);">LALAO GASY </a></h4>

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
                    <h1 class="display-3 text-danger text-justify ml-5">INSCRIVEZ-VOUS!!</h1>
                    <h1 class="display-4 text-danger ml-5 text-justify">LALAO GASY n'attend plus que vous!! Jouez et Gagnez plus d'argent.</h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light" style="margin-left:8%;max-width:30rem;">
                        <div class="card-body text-dark">
                            <p class="card-text">
                            
                                <form action="Traitementinscription.php" method="post">
                            <!--Name!-->
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <h6><i class="fa fa-user"></i>Nom</h6>
                                            <input type="text" class="form-control" placeholder="First name" name="username" style="border:1px solid rgb(214, 59, 59);"> 
                                        </div>
                                        <div class=" col-sm-6 col-md-6 col-lg-6">
                                            <h6><i class="fa fa-user"></i>Prenom</h6>
                                            <input type="text" class="form-control" placeholder="Last name" name="lastname" required style="border:1px solid rgb(214, 59, 59);"> 
                                        </div>
                                    </div>
                            <!--Name end!-->

                            <!--Email!-->
                                    <div class="row">
                                        <div class="col">
                                            <h6><i class="fa fa-envelope-o"></i>Email</h6>
                                            <input type="email" class="form-control" placeholder="Email" name="useremail" required style="border:1px solid rgb(214, 59, 59);">
                                        </div>
                                </div>
                            <!--Emailend!-->

                            <!--Password!-->
                                <div class="row">
                                    <div class="col">
                                        <h6><i class="fa  fa-pencil-square-o"></i>Mot de Passe</h6>
                                        <input type="password" class="form-control" placeholder="Password" name="useremdp" required style="border:1px solid rgb(214, 59, 59);">
                                    </div>
                                </div>
                            <!--Password end!-->

                            <!--Birthday!-->
                                <div class="row">
                                <!--Year!-->
                                <div class="col-md-4 col-sm-3">
                                        <h6><i class="fa fa-calendar-check-o"></i>Année</h6>
                                        <select class="custom-select mr-sm-2" name="year" id="inlineFormCustomSelect" style="border:1px solid rgb(214, 59, 59);">
                                            <option selected>Annee</option>
                                                <?php for($i=1960;$i<2000;$i++){ ?>
                                                    <option><?php echo $i;?></option>
                                                <?php } ?>
                                        </select>
                                </div>
                                <!--Year end!-->

                                <!--Month!-->
                                    <div class="col-md-4 col-sm-3">
                                        <h6><i class="fa fa-calendar-check-o"></i>Mois</h6>
                                        <select class="custom-select mr-sm-2"  name="month" id="inlineFormCustomSelect" style="border:1px solid rgb(214, 59, 59);" >
                                            <option selected>Mois</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <!--Month!-->

                                <!--Day!-->
                                <div class="col-md-4 col-sm-3">
                                        <h6><i class="fa fa-calendar-check-o"></i>Jour</h6>
                                        <select class="custom-select mr-sm-2"  name="day" id="inlineFormCustomSelect" style="border:1px solid rgb(214, 59, 59);">
                                            <option selected>Day</option>
                                            <?php for($i=01;$i<31;$i++){ ?>
                                            <option><?php echo $i;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    </div>
                                <!--Day end!-->
                            
                                <!--Gender!-->
                                <h6><i class="fa fa-mars"></i>Genre</h6>
                                    <div class="row">
                                        <div class="col ml-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Female" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Femelle
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <!--Gender end!-->

                                <!--Terms&Condditions!-->
                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ok" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            <a href="#" class="text-dark">J'accepte les termes et les conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <!--Terms&Conditions end!-->
                            
                                <!--Button!-->
                                    <center><button class="btn btn-outline-danger">Inscription</button></center>
                                <!--Button end!-->                           
                                </form>
                            </p>
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