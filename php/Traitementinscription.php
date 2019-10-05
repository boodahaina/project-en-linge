<?php
session_start();
require('Connection.php');
$takename=$_POST["username"];
$takesurname=$_POST["lastname"];
$takeemail=$_POST["useremail"];
$_SESSION["nameuser"]=$takeemail;
$takemdp=$_POST["useremdp"];
$takeyear=$_POST["year"];
$takemonth=$_POST["month"];
$takeday=$_POST["day"];
$takegender=$_POST["gender"];
$Connection=Connection();
$requetinscription="INSERT INTO Joueur SET Nom='%s',Prenom='%s',DateNaissance='%d-%d-%d',Sexe='%s',Email='%s',MotdePasse='%s',DateInscription=NOW()";
echo $requetinscription=sprintf($requetinscription,$takename,$takesurname,$takeyear,$takemonth,$takeday,$takegender,$_SESSION["nameuser"],sha1($takemdp));
$resultat=mysqli_query($Connection,$requetinscription);
header('Location:Profile.php');
?>