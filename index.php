<!DOCTYPE html>
<html>
    <?php include('head.php') ?>

    <body>
        <div id="header_wrapper">
            <?php include('header.php') ?>
        </div>
        <div id="submain">
            <div id="submain_pub">
            </div>
            <div id="submain_main">
                <nav id="submain_nav"><ul><li>DERNIER ARTICLE</li><li>DERNIER ARTICLE</li><li>DERNIER ARTICLE</li><li>METEO</li><li>SUB5</li></ul><ul id="ul_multimedia"><li>MULTIMEDIA</li><li>AGENDA PAR SPORT</li></ul></nav>
                            <?php include('section_left.php') ?><?php include('section_right.php') ?>
                            <?php include ('Surf/section_surf.php') ?>
                            <?php include ('Skate/section_skate.php') ?>
            </div>
            <?php include('footer.php') ?>         
        </div>
    </body>
</html>
