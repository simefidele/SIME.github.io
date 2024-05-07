<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../fonts/font.css"/>
    <script type="text/javascript" src="../js/prof.js"></script>
    <title>Ajouter Enseignant</title>

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
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
            font-size: 1.1em;
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
                <span>&nbsp;ajouter un Enseignant</span>
            </div>
        </nav>

        <form id="myForm" action="ajout_ens.php" method="post">
            <div id="nav2">
                <div id="log_in"><a href="admi.html">back</a></div>
            </div>

            <div id="main_home">
                <div id="img"><h1>ajouter un enseignant</h1></div>
                <table>
                    <tr>
                        <th colspan=2>Ajout d'un enseignant</th>
                    </tr>
                    <tr>
                        <th>Matricule</th>
                        <td><input type="text" name="matricule_ens" ></td>
                    </tr>
                    <tr>
                        <th>Nom complet</th>
                        <td><input type="text" name="nom_ens" ></td>
                    </tr>
                    <tr>
                        <th>Matiere</th>
                        <td>
                        <input type="text" name="matiere_ens" >
                        </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>
                        <input type="Password" name="Password" >
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="submit" value="enregistrer" name="submit1"></th>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th colspan="3">Liste des Enseignant</th>
                    </tr>
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>matiere</th>
                    </tr>
                    <?php 
                        $req=$con->query("SELECT*  FROM enseignant");
                        while($resultat3=$req->fetch_assoc()){
                            echo "<tr>";
                            echo "<td align='center' class='td'>",$resultat3['matricule_ens'],"</td>";
                            echo "<td align='center' class='td'>",$resultat3['nom_ens'],"</td>";
                            echo "<td align='center' class='td'>",$resultat3['matiere_ens'],"</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </from>

        <footer>
            <p>©Copyright | TP-Methode Agile | Groupe 5</p>
        </footer>

    </div>

</body>
</html>