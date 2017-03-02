<?php
$description='';
$title='';
require_once "define.php";
require_once 'db/db_access.php';
require_once 'db/db_define_local.php';
require_once 'views/top.php';
require_once 'views/header.php';
$id_cat = '';
$where = '';
if (array_key_exists(CAT_ID, $_GET)) {
    // Est-ce que l'id de categorie est valide ?
    if (array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where = " WHERE `id` = ";
    }
}
//var_dump($where);
//SELECT image FROM `article` WHERE id=29
// Chargement des articles
$articles = get_articles($where);
//var_dump($articles[29]);
?>
<main>
    <div id="wrapper" class="row">
        <div class="col-3">
            <?php require_once 'views/aside.php'; ?>

        </div>
        <div class=" row col-9">
            <?php foreach ($articles as $id => $article) { ?>
                <div id="article" class="col-4">
                    <div>
                        <!--<h2><? /*= utf8_encode($article['name']) */ ?></h2>-->
                    </div>
                    <div>
                        <a href="details.php"><img src="<?= PATH_IMAGE, $article['image'] ?>" alt=""/></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>