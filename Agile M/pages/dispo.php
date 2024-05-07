<?php

ini_set('display_errors', 'on');
include("con_bd.php");
session_start();

$matricule_ens = $_SESSION['matricule_ens'];

$lundi = $_POST['dispo_lundi'];
$mardi = $_POST['dispo_mardi'];
$mercredi = $_POST['dispo_mercredi'];
$jeudi = $_POST['dispo_jeudi'];
$vendredi = $_POST['dispo_vendredi'];
$samedi = $_POST['dispo_samedi'];

if($lundi == 'oui_dispo_lundi'){
	$lundi_de = $_POST['debut_dispo_lundi'];
	$lundi_a = $_POST['fin_dispo_lundi'];
	$jour = 'lundi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

if($mardi == 'oui_dispo_mardi'){
	$lundi_de = $_POST['debut_dispo_mardi'];
	$lundi_a = $_POST['fin_dispo_mardi'];
	$jour = 'mardi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

if($mercredi == 'oui_dispo_mercredi'){
	$lundi_de = $_POST['debut_dispo_mercredi'];
	$lundi_a = $_POST['fin_dispo_mercredi'];
	$jour = 'mercredi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

if($jeudi == 'oui_dispo_jeudi'){
	$lundi_de = $_POST['debut_dispo_jeudi'];
	$lundi_a = $_POST['fin_dispo_jeudi'];
	$jour = 'jeudi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

if($vendredi == 'oui_dispo_vendredi'){
	$lundi_de = $_POST['debut_dispo_vendredi'];
	$lundi_a = $_POST['fin_dispo_vendredi'];
	$jour = 'vendredi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

if($samedi == 'oui_dispo_samedi'){
	$lundi_de = $_POST['debut_dispo_samedi'];
	$lundi_a = $_POST['fin_dispo_samedi'];
	$jour = 'samedi';

	$re = "INSERT INTO `disponibilite`(`jour`, `dispo_de`, `dispo_a`, `matricule_ens`) VALUES ('$jour','$lundi_de','$lundi_a','$matricule_ens')";
	$result = mysqli_query($con, $re);
}

header("Location:prof.php");



?>