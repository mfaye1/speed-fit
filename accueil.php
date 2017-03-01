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
<?php echo "<main>" ?>
<?php { ?>
    <div class="banner">
        <img src="<?= PATH_IMAGE, $articles[29]['image'] ?>"
             alt="une fille en pompe comme banner de la page d'accueil"/></a>
    </div>
<?php } ?>
<div>
    <div class="row text_bande_bleu">
        <div class="col-4">
            <p>QUI SOMMES NOUS ?</p>
        </div>
        <div class="col-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio ex, porta mollis maximus vel,
                imperdiet sed enim. Vivamus condimentum et arcu ac fermentum. Morbi sed interdum lectus. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Fusce viverra ornare nulla, nec tempus augue malesuada in.
                Sed lacinia odio ac rutrum laoreet. Aliquam placerat libero non facilisis elementum.</p>
        </div>
    </div>
    <div class="bande_bleu">
        <img src="images/bande_bleu.png" alt="">
    </div>
</div>

<div class="categorie_index row">
    <?php { ?>
        <div id="promo_famille" class="col-4">
            <a href="#">
                <img src="<?= PATH_IMAGE, $articles[118]['image'] ?>" alt=""/>
                <p class="genre">cette homme est avec son enfant n'est ce pas ? maintenant allons-y</p>
            </a>
        </div>
        <div id="promo_mass" class="col-4">
            <a href="#">
                <img src="<?= PATH_IMAGE, $articles[115]['image'] ?>" alt=""/>
                <p class="genre">cette femme est en train de se masser n'est ce pas ? maintenant allons-y</p>
            </a>
        </div>
        <div id="promo_vieu" class="col-4">
            <a href="#">
                <img src="<?= PATH_IMAGE, $articles[106]['image'] ?>" alt=""/>
                <p class="genre">cette femme est en train de se masser n'est ce pas ? maintenant allons-y</p>
            </a>
        </div>
    <?php } ?>
</div>


<?php
require_once "views/footer.php";
?>


