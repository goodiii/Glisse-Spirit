<?php
// recuperation du contenu des articles 

$art_1 = articles(1);
$art_2 = articles(2);
$art_3 = articles(3);
$art_4 = articles(4);

// couleur div article_image_sport 

$art_1_sport_color = sport_color($art_1);

// couleur div article_image_ref 

$art_1_ref_color = ref_color($art_1);

?>

<section id="submain_section_left">
    <!-- article a la une -->
    <a id="aform_art1">
        <form id="form_art1" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="<?php echo $art_1['id']; ?>"/><input type="submit"/></form>
        <div id="article_une">
            <h2><?php echo $art_1['title']; ?></h2>
            <div id="article_une_image" style="background: url('Ressources/Images/<?php echo $art_1['url_image']; ?>') no-repeat;background-size:100% 100%;">
                <div class="article_image_sport" style="background-color:<?php echo $art_1_sport_color; ?>"><?php echo $art_1['sport']; ?></div><div class="article_image_ref" style="background-color:<?php echo $art_1_ref_color; ?>"><?php echo $art_1['ref']; ?></div>
            </div>
            <p><?php echo $art_1['article']; ?></p>                           
        </div>
    </a>

    <!-- article 2 -->
    <a id="aform_art2">
        <form id="form_art2" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="<?php echo $art_2['id']; ?>"/><input type="submit"/></form>
        <?php article_ecrire($art_2); ?> 
    </a>

    <!-- article 3 -->
    <a id="aform_art3">
        <form id="form_art3" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="<?php echo $art_3['id']; ?>"/><input type="submit"/></form>
        <?php article_ecrire($art_3); ?> 
    </a>    

    <!--  article 4  -->
    <a id="aform_art4">
        <form id="form_art4" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="<?php echo $art_4['id']; ?>"/><input type="submit"/></form>
            <?php article_ecrire($art_4); ?> 
    </a>  

</section>