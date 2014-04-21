<!DOCTYPE html>
<html>
    <?php include_once('head.php') ?>

    <body>
        <div id="header_wrapper">
            <?php include_once('header.php') ?>
        </div>
        <div id="submain">
            <div id="submain_pub">
            </div>
            <div id="submain_main">
                <?php include ('submain_nav.php') ?>
                <?php include('index_section_left.php') ?><?php include('section_right.php') ?>
                <?php include ('Surf/section_surf.php') ?>
                <?php include ('Skate/section_skate.php') ?>
                <?php include ('Snow/section_snow.php') ?>
            </div>
            <?php include('footer.php') ?>         
        </div>
    </body>
</html>
