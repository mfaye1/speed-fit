<?php
$description = "";
$title = "";
require_once "db/define.php";
require_once 'db/db_access.php';
require_once 'db/db_define_local.php';
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
function retire_accents($str)
{
    $resultat = strtolower(str_replace(array('é', 'ï'), array('e', 'i'), $str));
    return $resultat;
}



$liste_villes = array('choisir', 'Montréal', 'Quebec', 'Longueil', 'Laval', 'Autres');
$liste_activite = array('choisir', 'Natation', 'Course', 'Velos', 'Fitness', 'Art Martiaux');
$reception = array_key_exists('champ_prenom', $_POST)
    && array_key_exists('champ_nom', $_POST)
    && array_key_exists('champ_email', $_POST)
    && array_key_exists('champ_adresse', $_POST);

/*validation du nom*/
$nom = '';
$nom_valide = true;
if (array_key_exists('champ_nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'champ_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/', $nom));
}
/***validation du nom*/
$prenom = '';
$prenom_valide = true;
if (array_key_exists('champ_prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'champ_prenom', FILTER_SANITIZE_STRING);
    $prenom_valide = (1 === preg_match('/[A-Za-z]\w{1,}/', $prenom));
}

/****la validation du champ email*/
$email = '';
$email_valide = true;
if (array_key_exists('champ_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'champ_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}
/****validation de sexe*/
$sexe = array();
$sexe_valide = true;
if (array_key_exists('sexe', $_POST)) {
    $sexe = $_POST['sexe'];
}
if ($reception && empty($sexe)) {
    $sexe_valide = false;
}
/*********validation du champ age-----*/
$age = '';
$age_valide = 'true';
if (array_key_exists('champ_age', $_POST)) {
    $age = filter_input(INPUT_POST, 'champ_age', FILTER_SANITIZE_NUMBER_INT);
}
if ($reception && empty($age)) {
    $age_valide = false;
}
/*****------validatio du champ adresse*/
$adresse = '';
$adresse_valide = true;
if (array_key_exists('champ_adresse', $_POST)) {
    $adresse = filter_input(INPUT_POST, 'champ_adresse', FILTER_SANITIZE_STRING);
    $adresse_valide = (1 === preg_match('/[0-9][A-Za-z]\w{1,}/', $adresse));
}

/******************validation du champ enfant************/
$enfant = array();
$enfant_valide = true;
if (array_key_exists('enfant', $_POST)) {
    $enfant = $_POST['enfant'];
}
if ($reception && empty($enfant)) {
    $enfant_valide = false;
}
/***********validation des selects ******----*/


$ville= array();
$ville_valide=true;
if (array_key_exists('ville', $_POST)) {
    $ville = $_POST['ville'];
}
if ($reception && empty($ville)) {
    $ville_valide = false;
}
$villes_valides = true;
$villes = ''; // villes sélectionnés par l'utilisateur
if (array_key_exists('ville', $_POST) && (array_search($_POST['ville'], $liste_villes) > 0)) {
    $villes = $_POST['ville'];
}
// villes est valide si on est affichage initial ou bien si on a au moins un sport sélectionné
if ($reception && empty($villes)) {
    $villes_valides = false;

}


$activite_valide = true;
$activite = array(); // villes sélectionnés par l'utilisateur
if (array_key_exists('activite', $_POST)) {
    $activite = $_POST['activite'];
}
// villes est valide si on est affichage initial ou bien si on a au moins un sport sélectionné
if ($reception && empty($activite)) {
    $activite_valide = false;
}




if ($reception && $nom_valide && $prenom_valide && $email_valide && $sexe_valide && $age_valide && $adresse_valide
    && $enfant_valide && $villes_valides && $activite_valide
) {
    header('Location:inscription.php');
    exit;
}

?>
<img src="<?= PATH_IMAGE, $articles[14]['image'] ?>" alt=""/>
<div class="fond row" id="wrapper">
    <h1>Inscription</h1>
    <div id="bloc_form" class="col-10">
        <form method="post" id='form_contact' action="#">

            <div class="<?= $nom_valide ? '' : 'invalid' ?>">
                <label class="col-12" for="champ_nom">Nom</label>
                <input class="col-6 text_int" type="text" name="champ_nom" id="champ_nom"
                       placeholder="Placez votre nom de famille" value="<?= $nom ?>">
                <?php

                if (!$nom_valide) {
                    echo "<p>veuillez entrer un nom de famille avec au moins 1 caractere et pas de chiffre</p>";
                }
                ?>
            </div>

            <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
                <label class="col-12" for="champ_prenom">Prenom</label>
                <input class="col-6 text_int" type="text" name="champ_prenom" id="champ_prenom"
                       placeholder="Placez votre prenom ici" value="<?= $prenom ?>">
                <?php
                if (!$prenom_valide) {
                    echo "<p>veuillez entrer un prenom valide avec au moins 1 caractere et pas de chiffre</p>";
                }
                ?>
            </div>

            <div class="<?= $email_valide ? '' : 'invalid' ?>">
                <label class="col-12" for="champ_email">Email</label>
                <input class="col-6 text_int" type="email" name="champ_email" id="champ_email"
                       placeholder="blabla@gmail.com" value="<?= $email ?>">
                <?php
                if (!$email_valide) {
                    echo "<p>veuillez entrer un email valide </p>";
                }
                ?>
            </div>
            <label class="col-12" for="champ_sexe">Sexe</label>

            <div class="<?= $sexe_valide ? '' : 'invalid' ?>">
                <div class="col-12" id="bloc_sexe">
                    <label class="col-3" for="sexe">Homme:</label>
                    <input class="col-3" type="radio" name="sexe[]" id="sexe" value="sexe_h"/>
                    <label class="col-3" for="sexe">Femme:</label>
                    <input class="col-3" type="radio" name="sexe[]" id="sexe" value="sexe_f"/>
                </div>
                <?php
                if (!$sexe_valide) {
                    echo "<p>selectionner un sexe s'il vous plait</p>";
                }
                ?>
            </div>

            <div class="<?= $age_valide ? '' : 'invalid' ?>">
                <label class="col-12" for="champ_age">Age</label>
                <input class="col-6 text_int" type="number" name="champ_age" id="champ_age" placeholder="25 ans">
                <?php
                if (!$age_valide) {
                    echo "<p>veuillez indiquer votre age s'il vous plait </p>";
                }
                ?>
            </div>

            <div class="<?= $enfant_valide ? '' : 'invalid' ?>">
                <div class="col-12" id="bloc_enfant">
                    <label class="col-12" for="enfant">Avez-vous des enfants</label>
                    <label class="col-3" for="enfant">Oui</label>
                    <input class="col-3" type="checkbox" name="enfant[]" id="enfant" value="oui"/>
                    <label class="col-3" for="enfant">Non</label>
                    <input class="col-3" type="checkbox" name="enfant[]" id="enfant" value="non"/>
                    <?php
                    if (!$enfant_valide) {
                        echo "<p>s'il vous plait veuillez indiquer si vous avez des enfants ou pas </p>";
                    }
                    ?>
                </div>
            </div>

            <div class="<?= $age_valide ? '' : 'invalid' ?>">

                <label class="col-12" for="champ_adresse">Adresse</label>
                <input class="col-6 text_int" type="text" name="champ_adresse" id="champ_adresse"
                       placeholder="255 Boul Crémazie E, Montréal, QC H2M 1M2">
                <?php
                if (!$age_valide) {
                    echo "<p>veuillez entrer une adresse comme indiquer sur le champ </p>";
                }
                ?>
            </div>

            <div class="<?= $villes_valides ? '' : 'invalid' ?>">
                <label class="col-12" for="ville">Ville: </label>
                <select class="col-6" name="ville" id="ville">
                    <?php foreach ($liste_villes as $ville) {
                        ?>
                        <option value="<?= $ville ?>"><?= $ville ?></option>
                    ?>
                        <option value="<?= $ville ?>"
                            <?= array_key_exists('villes', $_POST) && in_array($ville, $_POST['villes']) ? /*'selected="selected"' */: '' ?>
                        ><?= $ville ?></option>
                    <?php } ?>
                </select>
                <?php if (!$villes_valides) { ?>
                    <p>Au moins un ville doit être sélectionné.</p>
                <?php } ?>
            </div>

            <div class="<?= $activite_valide ? '' : 'invalid' ?>">
                <label class="col-12" for="activite">Activité Favori</label>
                <select class="col-6" name="activite[]" id="activite">
                    <?php foreach ($liste_activite as $activite) {
                        $value = ($activite);
                        ?>
                        <option value="<?= $value ?>"
                            <?= array_key_exists('activite', $_POST) && in_array($value, $_POST['activite']) ? 'selected="selected"' : '' ?>
                        ><?= $activite ?></option>
                    <?php } ?>
                </select>
                <?php if (!$activite_valide) { ?>
                    <p>Au moins un ville doit être sélectionné.</p>
                <?php } ?>
            </div>

            <div>
                <input class="col-12" type="submit" value="Soumettre">
            </div>

        </form>
    </div>
</div>
<?php
require_once "views/footer.php";
?>
