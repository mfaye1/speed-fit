<?php
/**
 *
 */
require_once('db_define_local.php');
//require_once('db_define.php');
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}

// Rédaction de la requete sur les catégories articles
$query_str = 'SELECT * FROM `article_category`'; // Sélection de toutes les catégories articles

$res = $mysqli->query($query_str); // Exécution de la requête

// Chargement des données, ligne par ligne (boucle while)
$categories = array();
if ($res && ($res->num_rows > 0)) {
    while ($article_cat = $res->fetch_assoc()) {
        $categories[$article_cat['id']] = $article_cat;
    }
}
//var_dump($query_str);
//var_dump($res);
//var_dump($categories);

/**
 * Fournit un tableu d'article
 * @return array
 */
function get_articles()
{
    global $mysqli;
    // Rédaction de la requete sur les articles
    $query_str = "SELECT * FROM `article` WHERE `image` LIKE '%-m%' ORDER BY `name` ASC"; // Sélection de tous les articles

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows >0)) {
        while ($article = $res->fetch_assoc()) {
            $data[$article['id']] = $article;
        }
    }
    return $data;
}
/*
function get_article($where = ''){
    global $mysqli;
    // Rédaction de la requete sur les articles
    $query_str = 'SELECT * FROM `article` '. $where .'LIKE \'%-m%\'ORDER BY `id`'; // Sélection de tous les articles

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0))
        while ($article = $res->fetch_assoc()) {
            $data[$article['id']] = $article;
        }
    }

return $data ;
}*/

