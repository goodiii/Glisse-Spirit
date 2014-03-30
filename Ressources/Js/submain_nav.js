// Définition des variables: contenu des li sous menu1
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
    });
    // onglet surf
    $('#nav_surf').click(function() {
        $('#sn1').html(s1);
        $('#sn2').html(s2);
        $('#sn3').html(s3);
        $('#sn4').html(s4);
        $('#sn5').html("");
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
        }
        // onglet surf
        if ($(this).text() === s1) {
            $('#ss1').html(s1s1);
            $('#ss2').html(s1s2);
            $('#ss3').html(s1s3);
            $('#ss4').html(s1s4);
            $('#sn_snav').css("display", "block");
        }
    });
    //////////////////////////////////////////////
    // Article contenu dynamique
    // ///////////////////////////////////////////
    
    $('#article_une').click(function() {
        $('#submain_section_left').html('<div id="article_wrapper">\n\
        <div class="article_une_image_sport">Surf</div>\n\
<div class="article_une_image_ref">X-games</div>\n\
<h2 style="margin-top:15px;margin-bottom:15px">Titre de l\'article à la une eeee eee eeeeeee e</h2>\n\
<p><i>Publié le 2 Juin 2014 par Glisse Spirit</i></p>\n\
<div id="article_image"> \n\
</div>\n\
<p>Dans cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j  cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j v cette article qui est à la une, vous pourrez lire... eee e eeeeee eee eeeeeeeeeeeeeee ee eeeeeee ee eeeeeeeeee ee eeeeeeeeeeeeeee e e IOEHEZVHEV EF ¨ZEKËZCK¨EC¨ZC  jfffffffffffffffffff  ff fzjz jjjjjjjj j j</p>\n\
<div id="article_video"><iframe style="margin-left:auto;margin-right:auto;" frameborder="0" width="100%" height="100%" src="http://www.dailymotion.com/embed/video/xv3oj" allowfullscreen></iframe><br /></div>\n\
\n\
<div id="article_reseauxsociaux"><ul><li id="article_fb"></li><li id="article_tw"></li><li id="article_gm"></li></ul>\n\
</div>\n\
<div id="article_let_commentaire"><form action="" method=""><legend>Laissez un commentaire</legend><input type="text class="article_input" value="Pseudo"/><br/><textarea class="article_input" style="width:600px" rows="3" value="Commentaire"/><input type="submit" value="OK"/></form></div>\n\
<div id="article_pub"></div>\n\
<div id="article_commentaire"><h3>Commentaires</h3><div class="article_commentaires_postes"><p>Merci pour cet article passionnant bla bla bla</p><p>Posté par \"TomTom\"</p></div>\n\
</div>');
    });
});


