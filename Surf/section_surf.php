<section class="submain_section_sport">
    <div id="surf_titre">
        <h2>SURF</h2>
    </div>
    <section id="surf_left">
        <div id="surf_left_bandecolor">
        </div>
        <a id="aform_art1">
            <form id="form_art1" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="<?php echo $art_surf1['id']; ?>"/><input type="submit"/></form>
            <div class="sport_article">
                <?php
                $dernier_article = articles_surf(1);
                $avantdernier_article = articles_surf(2);
                article_ecrire($dernier_article);
                article_ecrire($avantdernier_article);
                ?>
    </section><section id="surf_right">
        <h3>CLASSEMENT</h3>
        <img id="surf_resultat" src="Ressources\Images\classement_surf_exemple.jpg"/>
        <div class="Dossier">
            <div class="dossier_titre"><h3>Titre de l'interview</h3></div>
            <div class="flexslider">
                <ul class="slides">
                    <li >
                        <img src="Ressources/Images/olivia-piana.jpg" style="width:100%;float:left"/>
                    </li>
                    <li>
                        <img src="Ressources/Images/mirjam.jpg" style="width:100%;float:left" />
                    </li>
                </ul>
            </div>
        </div>
    </section>
</section>