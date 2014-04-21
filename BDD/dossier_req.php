<?php

// fonction de requete de tous les dossiers
function dossiers() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM dossier ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    while ($dossier = $req->fetch()) {
        $dossier_sport = sport_color($dossier);
        $dossier_ref = ref_color($dossier);
        echo '<div id="article_wrapper">
              <a id="aform_dos">
              <form id="form_dos" method="post" action="dossier.php" style="display:none">
              <input type="hidden" name="id_dossier" value="' . $dossier['id'] . '"/>
                  <input type="submit"/>
                  </form>
              <div id="article_une">
              <h3>' . $dossier['titre'] . '</h3>
              <div id="article_une_image" style="background: url(\'Ressources/Images/' . $dossier['url_image'] . '\') no-repeat;background-size:100% 100%;">
              <div class="article_image_sport" style="background-color:' . $dossier_sport . '">' . $dossier['sport'] . '</div>
                  <div class="article_image_ref" style="background-color:' . $dossier_ref . '">' . $dossier['ref'] . '</div>
                      </div>
              <p>' . $dossier['contenu'] . '</p>
                  </div>
                  </a>
                  ';
    }
    $req->closeCursor();
}

function dossier($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM dossier WHERE id=" . $num . "") or die(print_r($bdd->errorInfo()));
    $dossier = $req->fetch();

    return $dossier;
    $req->closeCursor();
}

function dossier_last($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM dossier ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i=0;$i<$num;$i++){
    $dossier = $req->fetch();
    }
    return $dossier;
    $req->closeCursor();
}
?>
