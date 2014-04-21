<section id="submain_section_right">
    <div id="login">
        <div id="login_pub">
            <div class="flexslider">
                <ul class="slides">
                    <li >
                        <img src="Ressources/Images/pub_carre.jpg" />
                    </li>
                    <li>
                        <img src="Ressources/Images/pub_carre.jpg" />
                    </li>
                    <li>
                        <img src="Ressources/Images/Logo/home.png" />
                    </li>
                    <li>
                        <img src="Ressources/Images/pub_carre.jpg" />
                    </li>
                </ul>
            </div>
        </div>
        <fieldset>    
            <legend>Compte Ride</legend>
            <form method="post">
                <input type="submit" value="LOGIN"/>
            </form>
        </fieldset>
    </div>
    <a id="Pub1" href='Ressources/Images/pub_carre.jpg'><img alt='test' src='Ressources/Images/pub_carre.jpg' /></a>
    <div class="Dossier">
        <?php
        include_once('BDD/dossier_req.php');
        $dos1 = dossier_last(1);
        $dos2 = dossier_last(2);
        $dos3 = dossier_last(3);
        ?>


        <a href="dossier.php"><h3>DOSSIERS</h3></a>
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="Ressources/Images/<?php echo $dos1['url_image']; ?>" style="width:100%;float:left"/>
                </li>
                <li>
                    <img src="Ressources/Images/<?php echo $dos2['url_image']; ?>" style="width:100%;float:left"/>
                </li>
                <li>
                    <img src="Ressources/Images/<?php echo $dos3['url_image']; ?>" style="width:100%;float:left"/>
                </li>
            </ul>
        </div>
    </div>
    <div class="Dossier">
        <?php
        include_once('BDD/interview_req.php');
        $int1 = interview_last(1);
        $int2 = interview_last(2);
        $int3 = interview_last(3);
        ?>
        <a href="interview.php"><h3>INTERVIEWS</h3></a>
        <div class="flexslider">
            <ul class="slides">
                <li >
                    <img src="Ressources/Images/<?php echo $int1['url_image']; ?>" style="width:100%;float:left"/>
                </li>
                <li>
                    <img src="Ressources/Images/<?php echo $int2['url_image']; ?>" style="width:100%;float:left" />
                </li>
                <li>
                    <img src="Ressources/Images/<?php echo $int3['url_image']; ?>" style="width:100%;float:left" />
                </li>
            </ul>
        </div>
    </div>
</section>