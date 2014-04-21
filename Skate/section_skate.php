<section class="submain_section_sport">
    <div id="skate_titre">
        <h2>SKATE</h2>
    </div>
    <section id="skate_left">
        <div id="skate_left_bandecolor">
        </div>
                <?php
                $dernier_article = articles_skate(1);
                $avantdernier_article = articles_skate(2);
                article_ecrire($dernier_article);
                article_ecrire($avantdernier_article);
                ?>
    </section><section id="skate_right">
        <h3>CLASSEMENT</h3>
        <img id="skate_resultat" src="Ressources/Images/classement_surf_exemple.jpg"/>
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