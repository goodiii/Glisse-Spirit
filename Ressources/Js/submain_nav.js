//////////////////////////////////
//  Index to article: Validation du submit du formulaire caché 

// déclaration de la fonction

function submit(a, form) {
    $('#' + a).click(function() {
        $('#' + form).submit();
    });
}

// déclaration des variables du submit

var aform_art1 = 'aform_art1';
var form_art1 = 'form_art1';
var aform_art2 = 'aform_art2';
var form_art2 = 'form_art2';
var aform_art3 = 'aform_art3';
var form_art3 = 'form_art3';
var aform_art4 = 'aform_art4';
var form_art4 = 'form_art4';

// dossier
var form_dos = 'form_dos';
var aform_dos = 'aform_dos';

// interview
var form_int = 'form_int';
var aform_int = 'aform_int';

//// Déclaration des variables: contenu des li sous menu1
// var ecolo 
var eco1 = "SKI ECOLO";
var eco2 = "SURF ECOLO";
var eco3 = "KITE ECOLO";
var eco4 = "SNOW ECOLO";
// var surf
var s1 = "ASP HOMME";
var s2 = "ASP FEMME";
var s3 = "FRANCE HOMME";
var s4 = "FRANCE FEMME";
// definition des variables: contenu des li sous menu2
// var ASP
var s1s1 = "CALENDRIER";
var s1s2 = "RESULTATS";
var s1s3 = "CLASSEMENT";
var s1s4 = "RIDERS";
// var SKI ECOLO
var e1e1 = "ECOLOGIE";
var e1e2 = "ARTICLES";
var e1e3 = "INTERVIEWS";
var e1e4 = "RIDERS";

// Au lancement de la page

$(function() {
//////////////////////////////////////////////
// Menu naviguer contenu dynamique
// ///////////////////////////////////////////

// Changement du contenu du sous menu1
// onglet glisse ecolo
    $('#nav_glissecolo').click(function() {
        $('#sn1').text(eco1);
        $('#sn2').html(eco2);
        $('#sn3').html(eco3);
        $('#sn4').html(eco4);
        $('#sn5').html("");
        $('#sn_snav').css("display", "none");
    });
    // onglet surf
    $('#nav_surf').click(function() {
        $('#sn1').html(s1);
        $('#sn2').html(s2);
        $('#sn3').html(s3);
        $('#sn4').html(s4);
        $('#sn5').html("");
        $('#sn_snav').css("display", "none");
    });
    // Changement du contenu du sous menu naviguer2    
// Changement du contenu du sous menu2

    $("#sn1").click(function() {
// onglet glisse ecolo
        if ($(this).text() === eco1) {
            $('#ss1').html(e1e1);
            $('#ss2').html(e1e2);
            $('#ss3').html(e1e3);
            $('#ss4').html(e1e4);
            $('#sn_snav').css("display", "block");
            $('#sn_snav').css("background-color", "#cceecc");
        }
// onglet surf
        if ($(this).text() === s1) {
            $('#ss1').html(s1s1);
            $('#ss2').html(s1s2);
            $('#ss3').html(s1s3);
            $('#ss4').html(s1s4);
            $('#sn_snav').css("display", "block");
            $('#sn_snav').css("background-color", "#a0cce1");
        }
    });


//////////////////////////////////////////////////////
// Submit pour tout les articles
/////////////////////////////////////////////////////

    submit(aform_art1, form_art1);
    submit(aform_art2, form_art2);
    submit(aform_art3, form_art3);
    submit(aform_art4, form_art4);
    submit(aform_dos, form_dos);
    submit(aform_int, form_int);
});

