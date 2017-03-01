<?php
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

<?php echo "</head>" ?>


<?php
var_dump($_POST);
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
var_dump($nom_valide);
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

if ($reception && $nom_valide && $prenom_valide && $email_valide) {
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

                        <div>
                            <div class="col-12" id="bloc_sexe">
                                <label class="col-3" for="champ_sexe_h">Homme:</label>
                                <input class="col-3" type="radio" name="champ_sexe" id="champ_sexe_h" value="sexe_h"/>
                                <label class="col-3" for="champ_sexe_f">Femme:</label>
                                <input class="col-3" type="radio" name="champ_sexe" id="champ_sexe_f" value="sexe_f"/>
                            </div>
                        </div>

                        <div>
                            <label class="col-12" for="champ_age">Age</label>
                            <input class="col-6 text_int" type="number" name="champ_age" id="champ_age"
                                   placeholder="25 ans">
                        </div>

                        <div>
                            <div class="col-12" id="bloc_enfant">
                                <label class="col-12" for="enfant">Avez-vous des enfants</label>
                                <label class="col-3" for="champ_oui">Oui</label>
                                <input class="col-3" type="checkbox" name="champ_oui" id="champ_oui" value="oui"/>
                                <label class="col-3" for="champ_non">Non</label>
                                <input class="col-3" type="checkbox" name="champ_non" id="champ_non" value="non"/>
                            </div>
                        </div>

                        <div>
                            <label class="col-12" for="champ_adresse">Adresse</label>
                            <input class="col-6 text_int" type="text" name="champ_adresse" id="champ_adresse"
                                   placeholder="255 Boul Crémazie E, Montréal, QC H2M 1M2">
                        </div>

                        <div>
                            <label class="col-12" for="champ_ville">Ville</label>
                            <select class="col-6" name="champ_ville" id="champ_ville">
                                <option>Selectionner...</option>
                                <option>Montréal</option>
                                <option>Quebec</option>
                                <option>Longueil</option>
                                <option>Laval</option>
                                <option>Autres..</option>
                            </select>
                        </div>

                        <div>
                            <label class="col-12" for="champ_activite">Activité Favori</label>
                            <select class="col-6" name="champ_activite" id="champ_activite">
                                <option>Selectionner...</option>
                                <option>Natation</option>
                                <option>Course a pied</option>
                                <option>Velos</option>
                                <option>Fitness</option>
                                <option>Art Martiaux</option>
                            </select>
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
