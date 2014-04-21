<?php

// fonction de requete de tous les dossiers
function interviews() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM interview ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    while ($interview = $req->fetch()) {
        $interview_sport = sport_color($interview);
        $interview_ref = ref_color($interview);
        echo '<div id="article_wrapper">
              <a id="aform_int">
              <form id="form_int" method="post" action="interview.php" style="display:none">
              <input type="hidden" name="id_interview" value="' . $interview['id'] . '"/>
                  <input type="submit"/>
                  </form>
              <div id="article_une">
              <h3>' . $interview['titre'] . '</h3>
              <div id="article_une_image" style="background: url(\'Ressources/Images/' . $interview['url_image'] . '\') no-repeat;background-size:100% 100%;">
              <div class="article_image_sport" style="background-color:' . $interview_sport . '">' . $interview['sport'] . '</div>
                  <div class="article_image_ref" style="background-color:' . $interview_ref . '">' . $interview['ref'] . '</div>
                      </div>
              <p>' . $interview['contenu'] . '</p>
                  </div>
                  </a>
                  ';
    }
    $req->closeCursor();
}

function interview($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM interview WHERE id=" . $num . "") or die(print_r($bdd->errorInfo()));
    $interview = $req->fetch();

    return $interview;
    $req->closeCursor();
}

function interview_last($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM interview ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i=0;$i<$num;$i++){
    $interview = $req->fetch();
    }
    return $interview;
    $req->closeCursor();
}
?>

