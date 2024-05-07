<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../fonts/font.css"/>
    <script type="text/javascript">
        
        function remplit(){ 
            var monForm = document.getElementById('myForm');
            
            monForm.nom_prof.value = 
            "<?php 

                include('con_bd.php');
                session_start();
                $matricule_ens = $_SESSION['matricule_ens'];

                $re = "SELECT * FROM `enseignant` WHERE `matricule_ens` = '$matricule_ens'";
                $req=$con->query($re);
                while($resultat3=$req->fetch_assoc()){
                    echo $resultat3["nom_ens"];
                }

            ?>"


            monForm.semaine_du.value = '25 Avril';
            monForm.semaine_au.value = '04 Mai';
        }

        function home(){
            var main1 = document.getElementById('main_home');
            var main2 = document.getElementById('empl_de_temps');

            main1.style.display = "unset";
            main2.style.display = "none";

            var element1 = document.getElementById('edt');
            var element = document.getElementById('home');

            element.style.backgroundColor = "#bec3c9";
            element.style.padding = "10px";
            element.style.color = "#160830";
            element.style.marginRight = "-2px";
            element.style.borderRadius = "10px 0px 0px 10px";

            element1.style.backgroundColor = "unset";
            element1.style.padding = "unset";
            element1.style.color = "unset";
            element1.style.marginRight = "unset";
            element1.style.borderRadius = "unset";

            var icons = document.getElementsByTagName('lord-icon');
            icons[1].colors = 'primary:#dae4eb';
            icons[0].colors = 'primary:#160830';

        }

        function emploidt(){
            var main1 = document.getElementById('main_home');
            var main2 = document.getElementById('empl_de_temps');

            main1.style.display = "none";
            main2.style.display = "unset";

            var element = document.getElementById('edt');
            var element1 = document.getElementById('home');

            element.style.backgroundColor = "#bec3c9";
            element.style.padding = "10px";
            element.style.color = "#160830";
            element.style.marginRight = "-2px";
            element.style.borderRadius = "10px 0px 0px 10px";

            element1.style.backgroundColor = "unset";
            element1.style.padding = "unset";
            element1.style.color = "unset";
            element1.style.marginRight = "unset";
            element1.style.borderRadius = "unset";

            var icons = document.getElementsByTagName('lord-icon');
            icons[0].colors = 'primary:#dae4eb';
            icons[1].colors = 'primary:#160830';
        }


        function oui_dispo_lundi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_lundi.disabled = false;
            monForm.fin_dispo_lundi.disabled = false;
        }
        function non_dispo_lundi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_lundi.disabled = true;
            monForm.fin_dispo_lundi.disabled = true;
        }


        function oui_dispo_mardi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_mardi.disabled = false;
            monForm.fin_dispo_mardi.disabled = false;
        }
        function non_dispo_mardi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_mardi.disabled = true;
            monForm.fin_dispo_mardi.disabled = true;
        }


        function oui_dispo_mercredi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_mercredi.disabled = false;
            monForm.fin_dispo_mercredi.disabled = false;
        }
        function non_dispo_mercredi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_mercredi.disabled = true;
            monForm.fin_dispo_mercredi.disabled = true;
        }


        function oui_dispo_jeudi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_jeudi.disabled = false;
            monForm.fin_dispo_jeudi.disabled = false;
        }
        function non_dispo_jeudi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_jeudi.disabled = true;
            monForm.fin_dispo_jeudi.disabled = true;
        }


        function oui_dispo_vendredi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_vendredi.disabled = false;
            monForm.fin_dispo_vendredi.disabled = false;
        }
        function non_dispo_vendredi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_vendredi.disabled = true;
            monForm.fin_dispo_vendredi.disabled = true;
        }


        function oui_dispo_samedi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_samedi.disabled = false;
            monForm.fin_dispo_samedi.disabled = false;
        }
        function non_dispo_samedi(){
            var monForm = document.getElementById('myForm');
            monForm.debut_dispo_samedi.disabled = true;
            monForm.fin_dispo_samedi.disabled = true;
        }



    </script>
    <title>Session Proffesseur</title>
    <style>
        body{
            font-family: mp-nova;
        }
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
        input[type='text']{
            border: 0px solid red;
            width: 70px;
            height: auto;
            padding: unset;
            font-size: .8em;
        }
        input[id="nom_prof"]{
            width: auto;
            font-size: 1.2em;
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
                <span>&nbsp;Acceuil</span>
            </div>

            <div id="edt" class="icons_nav" onclick="emploidt()">
                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/wmlleaaf.json"
                    trigger="hover"
                    colors="primary:#dae4eb"
                    style="width:30px;height:30px">
                </lord-icon>
                <span>&nbsp;Emploi de temps</span>
            </div>

        </nav>
        <form id="myForm" action="dispo.php" method="post">
            <div id="nav2">
                <div id="log_in"><a href="../index.html">Log out</a></div>
            </div>

            <div id="main_home">
                <div id="img"><h1>Session Proffesseurs</h1></div>
                <div id="nom_prof">Proffesseur: <input type="text" id="nom_prof" name="nom_prof" disabled></div>
                <div id="today">
                    <h3>Definir les periode de disponiblite de la semaine</h3>
                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Lundi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_lundi">Oui</label><input type="radio" name="dispo_lundi" id="dispo_lundi" value="oui_dispo_lundi" required onclick="oui_dispo_lundi()">&nbsp; 
                            <label for="dispo_lundi">Non</label><input type="radio" name="dispo_lundi" id="dispo_lundi" valui="non_dispo_lundi" required onclick="non_dispo_lundi()">
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_lundi" name="debut_dispo_lundi">h<br></div>
                        <div>et: <input type="time" id="fin_dispo_lundi" name="fin_dispo_lundi">h<br></div>
                    </div>

                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Mardi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_mardi">Oui</label><input type="radio" name="dispo_mardi" id="dispo_mardi" value="oui_dispo_mardi" required onclick="oui_dispo_mardi()">&nbsp; 
                            <label for="dispo_mardi">Non</label><input type="radio" name="dispo_mardi" id="dispo_mardi" valui="non_dispo_mardi" required onclick="non_dispo_mardi()">
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_mardi" name="debut_dispo_mardi">h<br></div>
                        <div>et: <input type="time" id="fin_dispo_mardi" name="fin_dispo_mardi">h<br></div>
                    </div>

                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Mercredi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_mercredi">Oui</label><input type="radio" name="dispo_mercredi" id="dispo_mercredi" value="oui_dispo_mercredi" required desabled onclick="oui_dispo_mercredi()">&nbsp; 
                            <label for="dispo_mercredi">Non</label><input type="radio" name="dispo_mercredi" id="dispo_mercredi" valui="non_dispo_mercredi" required desabled onclick="non_dispo_mercredi()">
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_mercredi" name="debut_dispo_mercredi">h<br></div>
                        <div>et: <input type="time" id="fin_dispo_mercredi" name="fin_dispo_mercredi">h<br></div>
                    </div>

                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Jeudi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_jeudi">Oui</label><input type="radio" name="dispo_jeudi" id="dispo_jeudi" value="oui_dispo_jeudi" required desabled onclick="oui_dispo_jeudi()">&nbsp; 
                            <label for="dispo_jeudi">Non</label><input type="radio" name="dispo_jeudi" id="dispo_jeudi" valui="non_dispo_jeudi" required desabled onclick="non_dispo_jeudi()">                   
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_jeudi" name="debut_dispo_jeudi"><br>h</div>
                        <div>et: <input type="time" id="fin_dispo_jeudi" name="fin_dispo_jeudi">h<br></div>
                    </div>

                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Vendredi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_vendredi">Oui</label><input type="radio" name="dispo_vendredi" id="dispo_vendredi" value="oui_dispo_vendredi" required desabled onclick="oui_dispo_vendredi()">&nbsp; 
                            <label for="dispo_vendredi">Non</label><input type="radio" name="dispo_vendredi" id="dispo_vendredi" valui="non_dispo_vendredi" required desabled onclick="non_dispo_vendredi()">   
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_vendredi" name="debut_dispo_vendredi">h<br></div>
                        <div>et: <input type="time" id="fin_dispo_vendredi" name="fin_dispo_vendredi">h<br></div>
                    </div>

                    <div id="div">
                        <div> 
                            <span style="font-weight: bold; font-family: mp-nova;">Samedi ?</span>&nbsp; &nbsp; &nbsp; 
                            <label for="dispo_samedi">Oui</label><input type="radio" name="dispo_samedi" id="dispo_samedi" value="oui_dispo_samedi" required desabled onclick="oui_dispo_samedi()">&nbsp; 
                            <label for="dispo_samedi">Non</label><input type="radio" name="dispo_samedi" id="dispo_samedi" valui="non_dispo_samedi" required desabled onclick="non_dispo_samedi()">
                        </div>
                        <div>entre: <input type="time" id="debut_dispo_samedi" name="debut_dispo_samedi">h<br></div>
                        <div>et: <input type="time" id="fin_dispo_samedi" name="fin_dispo_samedi">h<br></div>
                    </div>

                </div>


                <div><input type="submit" value="Soumettre"/></div>


            </div>

            <div id="empl_de_temps">
                <h1>Emploi de temps de la Semaine</h1>

                <div id="semaine_du">Semaine du : <input type="text" name="semaine_du" disabled> au : <input type="text" name="semaine_au" disabled></div>

                <table>

                    <thead>
                        <tr>
                            <th style="border-top-width: 0; border-left-width: 0"></th><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>7h30 - 9h30</td>
                            <td><input type="text" name="lundi1" disabled><br/><input type="text" name="lundi1p" disabled></td>
                            <td><input type="text" name="mardi1" disabled><br/><input type="text" name="mardi1p" disabled></td>
                            <td><input type="text" name="mercredi1" disabled><br/><input type="text" name="mercredi1p" disabled></td>
                            <td><input type="text" name="jeudi1" disabled><br/><input type="text" name="jeudi1p" disabled></td>
                            <td><input type="text" name="vendredi1" disabled><br/><input type="text" name="vendredi1p" disabled></td>
                            <td><input type="text" name="samedi1" disabled><br/><input type="text" name="samedi1p" disabled></td>
                        </tr>
                        <tr>
                            <td>9h30 - 11h30</td>
                            <td><input type="text" name="lundi2" disabled><br/><input type="text" name="lundi2p" disabled></td>
                            <td><input type="text" name="mardi2" disabled><br/><input type="text" name="mardi2p" disabled></td>
                            <td><input type="text" name="mercredi2" disabled><br/><input type="text" name="mercredi2p" disabled></td>
                            <td><input type="text" name="jeudi2" disabled><br/><input type="text" name="jeudi2p" disabled></td>
                            <td><input type="text" name="vendredi2" disabled><br/><input type="text" name="vendredi2p" disabled></td>
                            <td><input type="text" name="samedi2" disabled><br/><input type="text" name="samedi2p" disabled></td>
                        </tr>
                        <tr>
                            <td>11h30 - 12h45</td><td colspan="7" style="text-align: center;">P.A.U.S.E</td>
                        </tr>
                        <tr>
                            <td>12h45 - 14h45</td>
                            <td><input type="text" name="lundi3" disabled><br/><input type="text" name="lundi3p" disabled></td>
                            <td><input type="text" name="mardi3" disabled><br/><input type="text" name="mardi3p" disabled></td>
                            <td><input type="text" name="mercredi3" disabled><br/><input type="text" name="mercredi3p" disabled></td>
                            <td><input type="text" name="jeudi3" disabled><br/><input type="text" name="jeudi3p" disabled></td>
                            <td><input type="text" name="vendredi3" disabled><br/><input type="text" name="vendredi3p" disabled></td>
                            <td><input type="text" name="samedi3" disabled><br/><input type="text" name="samedi3p" disabled></td>
                        </tr>
                        <tr>
                            <td>14h45 - 16h45</td>
                            <td><input type="text" name="lundi4" disabled><br/><input type="text" name="lundi4p" disabled></td>
                            <td><input type="text" name="mardi4" disabled><br/><input type="text" name="mardi4p" disabled></td>
                            <td><input type="text" name="mercredi4" disabled><br/><input type="text" name="mercredi4p" disabled></td>
                            <td><input type="text" name="jeudi4" disabled><br/><input type="text" name="jeudi4p" disabled></td>
                            <td><input type="text" name="vendredi4" disabled><br/><input type="text" name="vendredi4p" disabled></td>
                            <td><input type="text" name="samedi4" disabled><br/><input type="text" name="samedi4p" disabled></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </from>

        <footer>
            <p>©Copyright | TP-Methode Agile | Groupe 5</p>
        </footer>

    </div>

</body>
</html>