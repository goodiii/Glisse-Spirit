<?php
// fonction couleurs de sport associé à l'article
function sport_color($sport) {
    if ($sport['sport'] == 'surf') {
        $art_sport_color = '#a0cce1';
    } else if ($sport['sport'] == 'glisseecolo') {
        $art_sport_color = '#cceecc';
    } else if ($sport['sport'] == 'skate') {
        $art_sport_color = '#d3d3d3';
    } else if ($sport['sport'] == 'snow') {
        $art_sport_color = '#feae6e';
    } else if ($sport['sport'] == 'kite') {
        $art_sport_color = '#cff6f3';
    } else if ($sport['sport'] == 'ski') {
        $art_sport_color = '#daa51f';
    } else if ($sport['sport'] == 'longboard') {
        $art_sport_color = '#b8b8ba';
    } else if ($sport['sport'] == 'autre') {
        $art_sport_color = 'white';
    } else {
        $art_sport_color = 'white';
    }
    return $art_sport_color;
}

// fonction couleurs de ref associé à l'article 
function ref_color($sport) {
    if ($sport['ref'] == 'c9') {
        $art_ref_color = 'blue';
    } else if ($sport['ref'] == 'x-games') {
        $art_ref_color = 'green';
    } else if ($sport['ref'] == 'SLS') {
        $art_ref_color = 'red';
    } else if ($sport['ref'] == 'red bull') {
        $art_ref_color = 'darkblue';
    } else if ($sport['ref'] == 'dossier') {
        $art_ref_color = 'darkgrey';
    } else if ($sport['ref'] == 'interview') {
        $art_ref_color = 'darkgreen';
    } else {
        $art_ref_color = 'white';
    }
    return $art_ref_color;
}


// Fonctions de requete sur la BDD
// fonction table article

// fonction recuperation de tout les champs d'un article de la table article en fonction de son ordre de parution
function articles($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM article_test ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i = 0; $i < $num; $i++) {
        $article = $req->fetch();
    }
    return $article;
    $req->closeCursor();
}

// fonction recuperation de tout les champs d'un article de la table article en fonction de l'id de cet article
function article($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM article_test WHERE id=" . $num . "") or die(print_r($bdd->errorInfo()));
    $article = $req->fetch();

    return $article;
    $req->closeCursor();
}
// Ecrire un article
function article_ecrire($num){
    $num_sport_col = sport_color($num);
    $num_ref_col =  ref_color($num);
            echo '<form id="form_art1" method="post" action="article.php" style="display:none"><input type="hidden" name="id_article" value="'.$num['id'].'"/><input type="submit"/></form>
            <div class="article">
                <div class="article_image" style="background: url(\'Ressources/Images/'.$num["url_image"].'\');background-size: 100% 100%">
                    <div class="article_image_sport" style="background-color:'. $num_sport_col.'">'.$num["sport"].'</div><div class="article_image_ref" style="background-color:'.$num_ref_col.'">'.$num["ref"].'</div>
                </div>
                <h2>'.$num["title"].'</h2>
                <p>'.$num["article"].'</p>
            </div>';
};

// surf
// 
// appel les x=$num derniers articles parus
function articles_surf($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM article_test WHERE sport='surf' ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i = 0; $i < $num; $i++) {
        $article = $req->fetch();
    }
    return $article;
    $req->closeCursor();
}

// skate
// 
// appel les x=$num derniers articles parus
function articles_skate($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM article_test WHERE sport='skate' ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i = 0; $i < $num; $i++) {
        $article = $req->fetch();
    }
    return $article;
    $req->closeCursor();
}

// snow
// 
// appel les x=$num derniers articles parus
function articles_snow($num) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=glissespirit', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->query("SELECT * FROM article_test WHERE sport='snow' ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
    for ($i = 0; $i < $num; $i++) {
        $article = $req->fetch();
    }
    return $article;
    $req->closeCursor();
}
?>

