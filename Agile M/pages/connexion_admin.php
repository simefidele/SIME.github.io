<?php

ini_set('display_errors', 'on');

include("con_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valeur = $_POST['statut'];
    $password = $_POST['password'];
    $matricule = $_POST['matricule'];

    if ($valeur == 'admin') {
        $requete = "SELECT `matricule_adm`, `password_adm` FROM `admin` WHERE `matricule_adm` = ?";
        
        $stmt = mysqli_prepare($con, $requete);
        mysqli_stmt_bind_param($stmt, "s", $matricule);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $matricule_adm, $password_adm);
        mysqli_stmt_fetch($stmt);

        if ($matricule == $matricule_adm && password_verify($password, $password_adm)) {
            header("Location:admi.html");
            exit;
        } else {
            echo '<script type="text/javascript">alert("Information de connexion en tant qu\'administrateur incorrecte");</script>';
        }
    } 


    else if ($valeur == 'etudiant') {
        $requete = "SELECT `matricule_etd`, `password_etd` FROM `etudiant` WHERE `matricule_etd` = ?";
        
        $stmt = mysqli_prepare($con, $requete);
        mysqli_stmt_bind_param($stmt, "s", $matricule);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $matricule_etd, $password_etd);
        mysqli_stmt_fetch($stmt);

        if ($matricule == $matricule_etd && password_verify($password, $password_etd)) {
            header("Location:etudiant.html");
            exit;
        } else {
            header("Location:../index.html");
            echo '<script type="text/javascript">alert("Information de connexion en tant qu\'etudiant incorrecte");</script>';
        }
    } 


    else if ($valeur == 'enseignant') {
        $requete1 = "SELECT `matricule_ens` FROM `enseignant` WHERE matricule_ens = '$matricule'";
        $requete2 = "SELECT `password_ens` FROM `enseignant` WHERE matricule_ens = '$matricule'";

        $result1 = mysqli_query($con, $requete1);
        $result2 = mysqli_query($con, $requete2);

        $verif1 = false;
        $verif2 = false;

        while($ligne1=mysqli_fetch_array($result1)){
          foreach ($ligne1 as $value1) {
            if($matricule == $value1) $verif1=true;
          }
        }

        while($ligne2=mysqli_fetch_array($result2)){
          foreach ($ligne2 as $value2) {
            if (!password_verify($password, $value2)) $verif2=true;
          }
        }
        
        if($verif1) echo 'Oui v1';
        else echo 'Non v1';
        echo '<br/>';
        if($verif2) echo 'Oui v2';
        else echo 'Non v2';

        if ($verif1 && $verif2) {
            header("Location: prof.php");
            session_start();
            $_SESSION['matricule_ens'] = $matricule;

            exit;
        } else {
            header("Location: ../index.html");
            echo '<script type="text/javascript">alert("Information de connexion en tant qu\'enseignant incorrecte");</script>';
        }
    } else {
        echo "Statut non reconnu.";
    }

} else {
    echo "Méthode de requête invalide.";
}
?>
