<?php
session_start();
$email=$_SESSION["nameuser"];
require('Connection.php');
$dossier = '../Upload/';
$_FILES['profil']['name'];
$fichier = basename($_FILES['profil']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['profil']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['profil']['name'], '.');
if(!in_array($extension, $extensions))
{
$erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
}
if($taille>$taille_maxi)
{
$erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur))
{
$fichier = strtr($fichier,
    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    if(move_uploaded_file($_FILES['profil']['tmp_name'], $dossier . $fichier))
    {
        $Connection=Connection();
        $requet="UPDATE Joueur SET PhotoProfil='%s' WHERE Email='%s'";
        $requet=sprintf($requet,$fichier,$email);
        $together=mysqli_query($Connection,$requet);
        header('Location:Profile.php');
    }
    else
    {
        echo 'Echec de l\'upload !';
    }
}
else
{
echo $erreur;
}
?>