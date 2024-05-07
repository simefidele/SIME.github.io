<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../fonts/font.css"/>
    <script type="text/javascript" src="../js/prof.js"></script>
    <title>Session Proffesseur</title>
    <?php 
        include("con_bd.php"); 
        if(isset($_POST['submit1'])){
            $id_salle=$_POST['id_salle'];
            $nom_salle=$_POST['nom_salle'];
            $re="INSERT INTO salle (id_salle, nom_salle) VALUES ('$id_salle','$nom_salle')";
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
                <span>&nbsp;ajouter une salle de classe</span>
            </div>
        </nav>
        <form id="myForm" action="ajout_class.php" method="post">
            <div id="nav2">
                <div id="log_in"><a href="admi.html">back</a></div>
            </div>

            <div id="main_home">
                <div id="img"><h1>ajouter une salle de classe</h1></div>
                    <table>
                        <tr>
                            <th colspan=2>Ajout d'une salle de classe</th>
                        </tr>
                        <tr>
                            <th>Id salle</th>
                            <td><input type="text" name="id_salle" ></td>
                        </tr>
                        <tr>
                            <th>Nom salle</th>
                            <td><input type="text" name="nom_salle" ></td>
                        </tr>
                        <tr>
                            <th colspan="2"><input type="submit" value="enregistrer" name="submit1"></th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th colspan="3">Liste des classes disponible</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Id salle</th>
                            <th>Nom salle</th>
                        </tr>
                        <?php 
                            $i=1;
                            $req=$con->query("SELECT*  FROM  salle");
                            while($resultat3=$req->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td align='center' class='td'>",$resultat3['id_salle'],"</td>";
                                echo "<td align='center' class='td'>",$resultat3['nom_salle'],"</td>";
                                echo "</tr>";
                                $i++;
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