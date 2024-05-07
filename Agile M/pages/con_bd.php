<?php
$con= new mysqli("localhost","root","","gestion_emploi");
    if ($con->connect_error) {
      echo "echec de la connection a la base de donnee";
    }
?>