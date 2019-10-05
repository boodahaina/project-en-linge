<?php
    function Connection()
    {
        static $Connect=null;
        if($Connect === null)
        {
            $Connect=mysqli_connect('localhost','root','root','ExamFinaleWeb');
        }
        return $Connect;
    }
    function InsertidJoueur()
    {
        $requet="SELECT COUNT(IDJOUEUR) FROM Joueur";
        $sql=mysqli_query(Connection(),$requet);
        $associe=mysqli_fetch_array($sql);
        $associe[0]=$associe[0]+1;
        mysqli_free_result($sql);
        return $associe[0];
    }
    function get_name($email)
    {
        $requet="SELECT Nom FROM Utilisateur WHERE Email='%s'";
        $requet=sprintf($requet,$email);
        $together=mysqli_query(Connection(),$requet);
        $associe=mysqli_fetch_assoc($together);
        $result=$associe["Nom"];
        mysqli_free_result($together);
        return $result;
    }
    function get_surname($email)
    {
        $requet="SELECT Prenom FROM Utilisateur WHERE Email='%s'";
        $requet=sprintf($requet,$email);
        $together=mysqli_query(Connection(),$requet);
        $associe=mysqli_fetch_assoc($together);
        $result=$associe["Prenom"];
        mysqli_free_result($together);
        return $result;
    }
    function get_birthday($email)
    {
        $requet="SELECT Datedenaissance FROM Utilisateur WHERE Email='%s'";
        $requet=sprintf($requet,$email);
        $together=mysqli_query(Connection(),$requet);
        $associe=mysqli_fetch_assoc($together);
        $result=$associe["Datedenaissance"];
        mysqli_free_result($together);
        return $result;
    }
    function get_gender($email)
    {
        $requet="SELECT Sexe FROM Joueur WHERE Email='%s'";
        $requet=sprintf($requet,$email);
        $together=mysqli_query(Connection(),$requet);
        $associe=mysqli_fetch_assoc($together);
        $result=$associe["Gender"];
        mysqli_free_result($together);
        return $result;
    }
    function get_id_all($nom)
    {
        $requet="SELECT * FROM Joueur WHERE Email='%s'";
        $requet=sprintf($requet,$nom);
        $together=mysqli_query(Connection(),$requet);
        $associer=mysqli_fetch_assoc($together);
        return $associer;
    }
    function get_idUtilisateur($nom)
    {
        $requet="SELECT * FROM Utilisateur WHERE Email='%s'";
        $requet=sprintf($requet,$nom);
        $together=mysqli_query(Connection(),$requet);
        $associer=mysqli_fetch_assoc($together);
        $result=$associer["idUtilisateur"];
        return $associer;
    }
?>