<?php
$description = '';
$title = '';
require_once "define.php";
require_once 'db/db_define_local.php';
require_once 'db/db_access.php';
require_once 'views/top.php';
require_once 'views/header.php';
function retire_accents($str) {
    return str_replace('é','e',$str);
}
$id_cat = '';
$where = '';
if (array_key_exists(CAT_ID, $_GET)) {
    // Est-ce que l'id de categorie est valide ?
    if (array_key_exists($_GET[CAT_ID], $categories)) {
        $id_cat = $_GET[CAT_ID];
        $where = " WHERE `category_id`=$id_cat";
    }
}

function make_m_filename($filename)
{
    return str_replace('.jpg', '-m.jpg', $filename);
}

//var_dump($where);
//SELECT image FROM `article` WHERE id=29
// Chargement des articles
$articles = get_articles($where);
//var_dump($articles);
//var_dump($articles[1]['id']);


?>
<main>
    <div id="wrapper" class="row">
        <div class="col-3 col-m-12">
            <?php require_once 'views/aside.php'; ?>
        </div>
        <div class=" row col-9">
            <?php foreach ($articles as $id => $article) { ?>
                <div class="col-6" id="promo_famille">
                    <div class="img_activites" id="promo_famille">
                        <a href="details.php?art_id=<?=$article['id']?>">
                            <img src="<?= PATH_IMAGE, make_m_filename($article['image']) ?>"
                                 alt="<?= $article['description'] ?>"/>
                            <p class="genre" style="margin-left:3% ; "><?= retire_accents($article['name']) ?></p>
                        </a>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec consequat metus, at
                            finibus eros. Pellentesque porttitor lectus at erat accumsan, eget cursus sapien
                            pharetra.
                            Praesent sit amet euismod magna. Mauris sit amet tempor erat, vitae ornare justo. Aenean
                            mattis purus sem, in efficitur justo semper eu. Proin accumsan nibh iaculis mauris
                            lacinia,
                            sed malesuada ex vestibulum. Nulla sed lorem odio. Maecenas non eros pharetra, sodales
                            mauris ut, feugiat massa. Mauris eget mauris turpis. Curabitur in eros volutpat,
                            ullamcorper
                            velit non, viverra augue.
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
