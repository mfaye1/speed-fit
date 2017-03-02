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
        $where = " WHERE `id` = ";
    }
}
//var_dump($where);
//SELECT image FROM `article` WHERE id=29
// Chargement des articles
$articles = get_articles($where);
//var_dump($articles[29]);
?>

    <img src="<?= PATH_IMAGE, $articles[28]['image'] ?>" alt=""/>
    <div class="fond row" id="wrapper">
        <div class="bloc_activite">
            <h2>L'activité</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec consequat metus, at finibus eros.
                Pellentesque porttitor lectus at erat accumsan, eget cursus sapien pharetra. Praesent sit amet euismod
                magna. Mauris sit amet tempor erat, vitae ornare justo. Aenean mattis purus sem, in efficitur justo
                semper eu. Proin accumsan nibh iaculis mauris lacinia, sed malesuada ex vestibulum. Nulla sed lorem
                odio. Maecenas non eros pharetra, sodales mauris ut, feugiat massa. Mauris eget mauris turpis. Curabitur
                in eros volutpat, ullamcorper velit non, viverra augue.</p>
        </div>

        <div id="accordion">
            <h3>Section 1</h3>
            <div>
                <p>
                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
            </div>
            <h3>Section 2</h3>
            <div>
                <p>
                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                    suscipit faucibus urna.
                </p>
            </div>
            <h3>Section 3</h3>
            <div>
                <p>
                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                </p>
                <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                </ul>
            </div>
            <h3>Section 4</h3>
            <div>
                <p>
                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                    mauris vel est.
                </p>
                <p>
                    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos.
                </p>
            </div>
        </div>
    </div>


<?php
require_once 'views/footer.php';
?>