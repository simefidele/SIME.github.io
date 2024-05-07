function remplit(){ 
    var monForm = document.getElementById('myForm');
    monForm.date.value = '28 Avril 2024';
    monForm.en_cour.value = 'En cour...';
    monForm.debut.value = '8h00';
    monForm.cour_de.value = 'Methode Agile';
    monForm.enseignant.value = 'M. MBAM';
    monForm.fin.value = '14h45'

    monForm.lundi1.value = 'Methode Agile';
    monForm.lundi1p.value = 'Monsieur MBAM';
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
