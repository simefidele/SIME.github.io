<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../fonts/font.css"/>
    <script type="text/javascript" src="../js/prof.js"></script>
    <title>Realisation de l'emploi de temps</title>

    <?php
         include("con_bd.php");
         if(isset($_POST['submit1'])){
            $matricule_ens=$_POST['matricule_ens'];
            $nom_ens=$_POST['nom_ens'];
            $matiere_ens=$_POST['matiere_ens'];
            $password_n=$_POST['password'];
            $password = password_hash($password_n, PASSWORD_DEFAULT);
            $re="INSERT INTO enseignant (matricule_ens, nom_ens, matiere_ens, password_ens) VALUES ('$matricule_ens','$nom_ens','$matiere_ens','$password')";
            if($con->query($re)===true){
            
            }else{
                echo "<script type='text/javascript'>
                alert('UNE ERREUR EST SURVENUE LORS DE L’ENREGISTREMENT ');
                </script>";
            }
        }
    ?>
    <style>
        select{
            padding: 5px;
            border-radius: 10px;
            margin: 0px;
            font-size: .8em;
            font-family: mp-nova;
        }
        #main_home #today div input{
            height: 50px;
        }
        #main_home #today{
            height: 45vh;
            overflow: auto;
            display: block;
        }
        #main_home #today h3{
            font-family: mp-nova;
            font-weight: bold;
        }
        #main_home #today div input[type="radio"]{
            height: unset;
            border-radius: unset;
            margin: unset;
            font-size: unset;
            cursor: pointer;
        }
        label{
            font-family: mp-nova;
        }
        input[type="submit"]{
            margin-top: 30px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            background-color: #160830;
            color: #dae4eb;
            font-family: mp-nova;
            padding: 5px 10px;
            border-radius: 5px;
        }
        #dasboard{
            box-shadow: 0 0 10px 1px #222;
            border-radius: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin-top: 70px;
        }
        .bouttons{
            border: 2px solid #160830;
            margin: 40px;
            height: 120px;
            width: 120px;
            display: flex;
            flex-direction: column;
            font-family: mp-nova;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 3px 1px;
            cursor: pointer;
            font-weight: 900;
        }
        .bouttons:hover{
            box-shadow: unset;
        }
        .bouttons:active{
            transform: scale(.9);
        }
        #make_e{
            transform: scale(1.2);
        }
        #make_e:active{
            transform: scale(1.1);
        }
        option{
            padding: unset;
            font-size: 1em;
            font-family: mp-nova;
            text-align: center;
        }
        #soumettre input[type="submit"]{
            top: 30vh;
            bottom: 20px;
        }
    </style>
</head>
<body onload="remplit()">

    <div id="main">

        <nav>

            <div id="home" class="icons_nav" onclick="home()">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wmwqvixz.json"
                    trigger="hover"
                    colors="primary:#160830"
                    style="width:30px;height:30px">
                </lord-icon>
                <span>&nbsp;Realiser un emploi de temps</span>
            </div>
        </nav>

        <form id="myForm" action="traitement.php" method="post">
            <div id="nav2">
                <div id="log_in"><a href="admi.html">back</a></div>
            </div>


            <div id="main_home">
                <div id="img"><h1>Realiser l'emploi de temps</h1></div>

                <table>
                    <tr>
                        <td colspan="5" style="text-align: center">
                            <span>Classe </span>
                            <select name="salle">

                                <option></option>
                                <?php
                                    $req=$con->query("SELECT*  FROM  salle");
                                    while($resultat3=$req->fetch_assoc()){
                                        echo "<option>",$resultat3['id_salle'],"</option>";
                                    }
                                ?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Jours</th><th>07h30-09h30</th><th>09h30-11h30</th><th>12h45-14h45</th><th>14h45-16h45</th>
                    </tr>
                    <tr>
                        <td>Lundi</td>

                        <td>
                            <select name="lundi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'lundi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>

                            </select>

                        </td>

                        <td>
                            
                            <select name="lundi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'lundi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '01:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>

                            </select>

                        </td>
                        <td>
                            
                            <select name="lundi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'lundi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>

                            </select>

                        </td>
                        <td>
                            
                            <select name="lundi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'lundi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>

                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>
                            
                            <select name="mardi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mardi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>

                            </select>

                        </td>
                        <td>
                            <select name="mardi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mardi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '11:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="mardi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mardi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="mardi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mardi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>
                            <select name="mercredi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mercredi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="mercredi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mercredi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '11:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="mercredi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mercredi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="mercredi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'mercredi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>
                            <select name="jeudi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'jeudi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="jeudi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'jeudi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '11:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="jeudi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'jeudi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="jeudi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'jeudi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>
                            <select name="vendredi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'vendredi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="vendredi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'vendredi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '11:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="vendredi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'vendredi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="vendredi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'vendredi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td>
                            <select name="samedi11">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'samedi' 
                                    AND disponibilite.dispo_de <= '07:30:00'
                                    AND disponibilite.dispo_a >= '09:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="samedi22">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'samedi' 
                                    AND disponibilite.dispo_de <= '09:30:00'
                                    AND disponibilite.dispo_a >= '11:30:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="samedi33">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'samedi' 
                                    AND disponibilite.dispo_de <= '12:45:00'
                                    AND disponibilite.dispo_a >= '14:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                        <td>
                            <select name="samedi44">
                            <option></option>

                            <?php 
                                $i=1;
                                $re = "
                                    SELECT enseignant.nom_ens, enseignant.matiere_ens, disponibilite.matricule_ens 
                                    FROM disponibilite 
                                    INNER JOIN enseignant 
                                    ON disponibilite.matricule_ens = enseignant.matricule_ens 
                                    WHERE disponibilite.jour = 'samedi' 
                                    AND disponibilite.dispo_de <= '14:45:00'
                                    AND disponibilite.dispo_a >= '16:45:00'";
                                $req=$con->query($re);
                                while($resultat3=$req->fetch_assoc()){
                                    echo "<option>",$resultat3['matiere_ens'],"-",$resultat3['nom_ens'],"</option>";
                                    $i++;
                                }
                            ?>
                        </td>
                    </tr>
                </table>

            </div>

            <div id="soumettre"><input type="submit" value="Soumettre"/></div>
        </from>

        <footer>
            <p>©Copyright | TP-Methode Agile | Groupe 5</p>
        </footer>

    </div>

</body>
</html>