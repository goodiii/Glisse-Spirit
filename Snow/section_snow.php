<section class="submain_section_sport">
    <div id="snow_titre">
        <h2>SNOW</h2>
    </div>
    <section id="snow_left">
        <div id="snow_left_bandecolor">
        </div>
                <?php
                $dernier_article = articles_snow(1);
                $avantdernier_article = articles_snow(2);
                article_ecrire($dernier_article);
                article_ecrire($avantdernier_article);
                ?>
    </section><section id="snow_right">
        <h3>CLASSEMENT</h3>
        <img id="snow_resultat" src="Ressources/Images/classement_surf_exemple.jpg"/>
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