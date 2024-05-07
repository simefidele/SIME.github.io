<?php 

ini_set('display_errors', 'on');
include('con_bd.php');

$lundi11=$_POST['lundi11'];
$lundi22=$_POST['lundi22'];
$lundi33=$_POST['lundi33'];
$lundi44=$_POST['lundi44'];
$mardi11=$_POST['mardi11'];
$mardi22=$_POST['mardi22'];
$mardi33=$_POST['mardi33'];
$mardi44=$_POST['mardi44'];
$mercredi11=$_POST['mercredi11'];
$mercredi22=$_POST['mercredi22'];
$mercredi33=$_POST['mercredi33'];
$mercredi44=$_POST['mercredi44'];
$jeudi11=$_POST['jeudi11'];
$jeudi22=$_POST['jeudi22'];
$jeudi33=$_POST['jeudi33'];
$jeudi44=$_POST['jeudi44'];
$vendredi11=$_POST['vendredi11'];
$vendredi22=$_POST['vendredi22'];
$vendredi33=$_POST['vendredi33'];
$vendredi44=$_POST['vendredi44'];
$samedi11=$_POST['samedi11'];
$samedi22=$_POST['samedi22'];
$samedi33=$_POST['samedi33'];
$samedi44=$_POST['samedi44'];


$req1="
	UPDATE `emploi_de_temps` 
	SET `lundi`='$lundi11',
	`mardi`='$mardi11',
	`mercredi`='$mercredi11',
	`jeudi`='$jeudi11',
	`vendredi`='$vendredi11',
	`samedi`='$samedi11'
	WHERE semaine = 1;
";

$req2="
	UPDATE `emploi_de_temps` 
	SET `lundi`='$lundi22',
	`mardi`='$mardi22',
	`mercredi`='$mercredi22',
	`jeudi`='$jeudi22',
	`vendredi`='$vendredi22',
	`samedi`='$samedi22'
	WHERE semaine = 2;
";

$req3="
	UPDATE `emploi_de_temps` 
	SET `lundi`='$lundi33',
	`mardi`='$mardi33',
	`mercredi`='$mercredi33',
	`jeudi`='$jeudi33',
	`vendredi`='$vendredi33',
	`samedi`='$samedi33'
	WHERE semaine = 3;
";

$req4="
	UPDATE `emploi_de_temps` 
	SET `lundi`='$lundi44',
	`mardi`='$mardi44',
	`mercredi`='$mercredi44',
	`jeudi`='$jeudi44',
	`vendredi`='$vendredi44',
	`samedi`='$samedi44'
	WHERE semaine = 4;
";



$result1 = mysqli_query($con, $req1);
$result2 = mysqli_query($con, $req2);
$result3 = mysqli_query($con, $req3);
$result4 = mysqli_query($con, $req4);

echo 'Hello World';

?>
