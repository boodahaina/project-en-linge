<?php
session_start();
require('Connection.php');
echo $username=$_POST["takeemail"];
$_SESSION["nameuser"]=$username;
echo $userpassword=$_POST["takemdp"];
$Connection=Connection();
$requet='SELECT * FROM Joueur WHERE Email="%s" AND MotdePasse=sha1("%s")';
$requet=sprintf($requet,$username,$userpassword);
$together=mysqli_query($Connection,$requet);
$row=mysqli_fetch_assoc($together);
if($username==$row['Email'] && sha1($userpassword)==$row['MotdePasse'])
{
  header('Location:Profile.php');
}
else
{
  header('Location:index.php?nom=Erreur');
}
?>
