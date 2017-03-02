<?php
$description = "";
$title = "";
require_once "define.php";
require_once 'db/db_access.php';
require_once 'db/db_define_local.php';
?>

<?php
require_once "views/top.php";
require_once "views/header.php";
$id_cat = '';
$where = '';
if (array_key_exists(CAT_ID, $_GET)) {
    // Est-ce que l'id de categorie est valide ?
    if (array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where = " WHERE `category_id` = $id_cat";
    }
}
//var_dump($where);
//SELECT image FROM `article` WHERE id=29
// Chargement des articles
$articles = get_articles($where);
//var_dump($articles[29]);
?>


    <img src="<?= PATH_IMAGE, $articles[15]['image'] ?>" alt=""/>
    <div class="fond row" id="wrapper">
    <h1></h1>
    <div id="bloc_categorie">
        <h2>Catégories</h2>
        <ul>
            <li>Natation</li>
            <li>Fitness</li>
            <li>Art Martiaux</li>
            <li>Course a pied</li>
            <li>Velos</li>
            <li>Centre de massage</li>
        </ul>
    </div>
    <div id="Bloc_descriptif">

    <img class="img_descriptif" src="<?= PATH_IMAGE, $articles[54]['image'] ?>" alt=""/>
    <div>
        Prix : <span><?= $article['prix'] . "$" ?></span>
        <form class="panier_action" method="post">
            <input type="submit" name="panier_add" value="Ajouter au panier"/>
            <input type="hidden" name="article_id" value="<?= $id ?>"/>
            <input type="hidden" name="article_name" value="<?= utf8_encode($article['name']) ?>"/>
        </form>
    </div>
    </div>

    </div>
    <?php
    require_once 'views/footer.php';
    ?>