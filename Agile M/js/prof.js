function remplit(){ 
    var monForm = document.getElementById('myForm');
    monForm.nom_prof.value = 'M. MBAM Freddy';

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

