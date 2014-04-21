<?php

include_once('BDD/index_req.php');
include_once('BDD/interview_req.php');
if (isset($_POST['id_interview']) || isset($_GET['id_interview'])) {
    //  récupération de l'id de l'interview par POST et requete des toutes les données de l'interview concernées
if (isset($_POST['id_interview'])){
    $id = $_POST['id_interview'];
}
 //  récupération de l'id de l'interview par GET et requete des toutes les données de l'interview concernées
else if (isset($_GET['id_interview'])){
    $id = $_GET['id_interview'];
}

    $int = interview($id);
    $i_sport_color = sport_color($int);
    $i_ref_color = ref_color($int);
    $i_sport = $int['sport'];
    $i_ref = $int['ref'];
    $i_title = $int['titre'];
    $i_date = $int['date_interview'];
    $i_aut = $int['auteur'];
    $i_img = $int['url_image'];
    $i_art = $int['contenu'];
    $i_vid = $int['url_video'];
    $i_cit = $int['citation1'];

    echo "<section id='submain_section_left'>
        
        <div id = 'article_wrapper'>

        <div class='article_image_sport' style='background-color:" . $i_sport_color . "'>" . $i_sport . "</div>
        <div class='article_image_ref' style='background-color:" . $i_ref_color . "'>" . $i_ref . "</div>
        <h2 style='margin-top:15px;margin-bottom:15px'>" . $i_title . "</h2>
        <p><i>Publié le " . $i_date . " par " . $i_aut . "</i></p>

        <!-- image et contenu de l'article-->
    <a id = 'article_image' href = 'Ressources/Images/" . $i_img . "'>
    <img class = 'article_image' alt = 'article_image' src = 'Ressources/Images/" . $i_img . "' />
    </a>
    <p>" . $i_art . "</p>

    <!-- video de l'article -->
    <div id='article_video'>
        <iframe style='margin-left:auto;margin-right:auto;' frameborder='0' width='100%' height='100%' src='" . $i_vid . "' allowfullscreen></iframe><br />
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
    echo interviews();
    echo '</section>';
}
?>
