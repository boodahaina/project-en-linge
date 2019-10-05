<?php
session_start();
require('Connection.php');
$usernameAdm=$_POST["Email"];
$_SESSION["nameuserAdm"]=$usernameAdm;
$userpassword=$_POST["Pwd"];
$Connection=Connection();
$requet="SELECT * FROM Administrateur WHERE Email='%s' AND MotsPasse=sha1('%s')";
$requet=sprintf($requet,$usernameAdm,$userpassword);
$together=mysqli_query($Connection,$requet);
$row=mysqli_fetch_assoc($together);
if($usernameAdm==$row['Email'] && sha1($userpassword)==$row['MotsPasse'])
{
  header('Location:Administrateur.php');
}
else
{
  header('Location:index.php?nom=Erreur');
}
?>
