<!--  récupération de l'id de l'article par POST et requete des toutes les données de l'article concernées-->

<?php
include_once('BDD/index_req.php');
$id = $_POST['id_article'];
$arti = article($id);
$article_sport_color = sport_color($arti);
$article_ref_color = ref_color($arti);
?>

<!-- contenu de l'article -->
<section id="submain_section_left">
    <div id="article_wrapper">

        <!-- entete de l'article -->
        <div class="article_image_sport" style="background-color:<?php echo $article_sport_color; ?>"><?php echo $arti['sport']; ?></div>
        <div class="article_image_ref" style="background-color:<?php echo $article_ref_color; ?>"><?php echo $arti['ref']; ?></div>
        <h2 style="margin-top:15px;margin-bottom:15px"><?php echo $arti['title']; ?></h2>
        <p><i>Publié le <?php echo $arti['date_creation']; ?> par <?php echo $arti['auteur']; ?></i></p>

        <!-- image et contenu de l'article -->
        <a id="article_image" href="Ressources/Images/<?php echo $arti['url_image']; ?>">
            <img class="article_image" alt="article_image" src="Ressources/Images/<?php echo $arti['url_image']; ?>" />
        </a>
        <p><?php echo $arti['article']; ?></p>

        <!-- video de l'article -->
        <div id="article_video">
            <iframe style="margin-left:auto;margin-right:auto;" frameborder="0" width="100%" height="100%" src="<?php echo $arti['url_video']; ?>" allowfullscreen></iframe><br />
        </div>

        <!-- Réseau sociaux et commentaires -->
        <div id="article_reseauxsociaux">
            <ul>
                <li id="article_fb"></li>
                <li id="article_tw"></li>
                <li id="article_gm"></li>
            </ul>
        </div>
        <div id="article_let_commentaire">
            <form action="" method="">
                <legend>Laissez un commentaire</legend>
                <input type="text" class="article_input" value="Pseudo"/><br/>
                <textarea class="article_input" style="width:600px" rows="3" value="Commentaire" ></textarea>
                <input type="submit" value="OK"/>
            </form>
        </div>
        <div id="article_pub"></div>
        <div id="article_commentaire"><h3>Commentaires</h3>
            <div class="article_commentaires_postes">
                <p>Merci pour cet article passionnant bla bla bla</p><p>Posté par \"TomTom\"</p>
            </div>
        </div>
    </div>
</section>