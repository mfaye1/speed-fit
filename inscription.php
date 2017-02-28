<?php
require_once 'define.php';
require_once 'db/db_access.php';
require_once 'db/db_define_local.php';
require_once 'views/top.php';

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

    <title></title>
    </head>

<?php
require_once 'views/header.php';
?>
    <img src="<?= PATH_IMAGE, $articles[14]['image'] ?>" alt=""/>
    <div  class="fond row" id="wrapper">
        <h1>Inscription</h1>
        <div id="bloc_form" class="col-10">
            <form id='form_contact' action="#">
                <label class="col-12" for="nom">Nom</label>
                <input class="col-6 text_int" type="text" name="nom" id="nom" placeholder="Placez votre nom de famille">
                <label class="col-12" for="prenom">Prenom</label>
                <input class="col-6 text_int"  type="text" name="prenom" id="prenom" placeholder="Placez votre prenom ici">
                <label class="col-12"for="email">Email</label>
                <input class="col-6 text_int" type="email" name="email" id="email" placeholder="blabla@gmail.com">
                <label class="col-12"for="sexe">Sexe</label>
                <div class="col-12" id="bloc_sexe">
                <label class="col-3"for="sexe_h">Homme:</label>
                <input class="col-3"  type="radio" name="sexe" id="sexe_h" value="sexe_h"/>
                <label class="col-3" for="sexe_f">Femme:</label>
                <input class="col-3"  type="radio" name="sexe" id="sexe_f" value="sexe_f"/>
                </div>
                <label class="col-12"for="age">Age</label>
                <input class="col-6 text_int" type="number" name="age" id="age" placeholder="25 ans">
                <div class="col-12" id="bloc_enfant">
                    <label class="col-12"for="enfant">Avez-vous des enfants</label>
                    <input class="col-3"  type="checkbox" name="oui" id="oui" value="oui"/>
                    <input class="col-3"  type="checkbox" name="non" id="non" value="non"/>
                </div>
                <input  class="col-12"type="submit" value="Soumettre">
            </form>
        </div>
    </div>
<?php
require_once 'views/footer.php';
?>