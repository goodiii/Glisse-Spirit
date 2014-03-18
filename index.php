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
                <nav id="submain_nav"><ul><li>INTERVIEWS</li><li>VIDEOS</li><li>PHOTOS</li><li>MULTIMEDIA</li><li>AGENDA</li></ul>
                    <form id="rechercher">
                        <input class="search" type="text" name="search" value="Rechercher ..."/>
                        <input class="loupe" type="submit" value="GO"/>
                    </form>
                </nav>
                <?php include('section_left.php') ?><?php include('section_right.php') ?>
                <?php include ('Surf/section_surf.php') ?>
                <?php include ('Skate/section_skate.php') ?>
            </div>
            <?php include('footer.php') ?>         
        </div>
    </body>
</html>
