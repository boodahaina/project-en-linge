<?php    $misy_erreur=0;
        if(isset($_GET["erreur"]))
        {
            $misy_erreur=1;
        }
?>
<!doctype html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/loginadministration.css">
        <script src="../jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="row justify-content-md-center">
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        <div class="row justify-content-md-center">
                            <div class="col-md-12" id="SoratraLogin">
                                CONNEXION
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="Email" placeholder="Email">
                                    <img src="tools/imge/icon/icons8-user-50.png" width="15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="password" name="Pwd" placeholder="Mots de Passe">
                                    <img src="tools/imge/icon/icons8-lock-50.png" width="15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md" style="text-align:right; font-size:12px"><a href="#">Oublié?</a>
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
                                <div class="col-md-12 ">
                                    <button type="submit">Se connecter</button>        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="text-align: left">
                                    <a href="ListeInscris.php">Liste des inscris</a>
                                </div>
                                <div class="col-md-6" style="text-align: right">
                                    <a href="Inscription.php">Créer un compte</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>     
            </div>            
        </div>
    </body>
</html>