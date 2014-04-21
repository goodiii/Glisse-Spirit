<!DOCTYPE html>
<html>
    <?php include_once('head.php'); ?>
    <body>
        <div id="header_wrapper">
            <?php include('header.php'); ?>
        </div>
        <div id="submain">
            <div id="submain_pub">
            </div>
            <div id="submain_main">
                <?php include ('submain_nav.php'); ?>
                <?php include('dossier_section_left.php'); ?><?php include('section_right.php'); ?>
            </div>
            <?php include('footer.php'); ?>   
        </div>
        <script>$("a#article_image").fancybox();</script>
    </body>
</html>
