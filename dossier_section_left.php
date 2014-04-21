

<?php

include_once('BDD/index_req.php');
include_once('BDD/dossier_req.php');
if (isset($_POST['id_dossier'])) {

    //  récupération de l'id du dossier par POST et requete des toutes les données du dossier concernées
    $id = $_POST['id_dossier'];
    $dos = dossier($id);
    $dossier_sport_color = sport_color($dos);
    $dossier_ref_color = ref_color($dos);
    $d_sport = $dos['sport'];
    $d_ref = $dos['ref'];
    $d_title = $dos['titre'];
    $d_date = $dos['dossier_date'];
    $d_aut = $dos['auteur'];
    $d_img = $dos['url_image'];
    $d_art = $dos['contenu'];
    $d_vid = $dos['url_video'];

    echo "<section id='submain_section_left'>
        
        <div id = 'article_wrapper'>

        <div class='article_image_sport' style='background-color:" . $dossier_sport_color . "'>" . $d_sport . "</div>
        <div class='article_image_ref' style='background-color:" . $dossier_ref_color . "'>" . $d_ref . "</div>
        <h2 style='margin-top:15px;margin-bottom:15px'>" . $d_title . "</h2>
        <p><i>Publié le " . $d_date . " par " . $d_aut . "</i></p>

        <!-- image et contenu de l'article-->
    <a id = 'article_image' href = 'Ressources/Images/" . $d_img . "'>
    <img class = 'article_image' alt = 'article_image' src = 'Ressources/Images/" . $d_img . "' />
    </a>
    <p>" . $d_art . "</p>

    <!-- video de l'article -->
    <div id='article_video'>
        <iframe style='margin-left:auto;margin-right:auto;' frameborder='0' width='100%' height='100%' src='" . $d_vid . "' allowfullscreen></iframe><br />
</div>

<!-- Réseau sociaux et commentaires -->
<div id='article_reseauxsociaux'>
    <ul>
        <li id='article_fb'></li>
        <li id='article_tw'></li>
        <li id='article_gm'></li>
    </ul>
</div>
<div id='article_let_commentaire'>
    <form action='' method=''>
        <legend>Laissez un commentaire</legend>
        <input type='text' class='article_input' value='Pseudo'/><br/>
        <textarea class='article_input' style='width:600px' rows='3' value='Commentaire' ></textarea>
        <input type='submit' value='OK'/>
    </form>
</div>
<div id='article_pub'></div>
<div id='article_commentaire'><h3>Commentaires</h3>
    <div class='article_commentaires_postes'>
        <p>Merci pour cet article passionnant bla bla bla</p><p>Posté par \"TomTom\"</p>
    </div>
</div>
</div>
</section>";
} else {
// récuperation du contenu de tout les dossiers
    echo '<section id="submain_section_left">';
    echo dossiers();
    echo '</section>';
}
?>
