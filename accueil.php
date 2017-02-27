<?php
require_once "define.php";
require_once 'db/db_access.php';
require_once 'db/db_define_local.php';
?>
<?php
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
<?php
require_once 'views/top.php';
?>
</head>
<?php
require_once 'views/header.php';
?>
<?php echo "<main>"?>
<?php   { ?>
<div>
    <img src="<?= PATH_IMAGE, $articles[29]['image'] ?>" alt=""/></a>
</div>
<?php } ?>



