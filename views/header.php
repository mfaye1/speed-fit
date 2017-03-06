<?php
require_once "user_authenticate.php";
require_once "define.php";
$id_cat = '';
$where = '';
session_start();
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
function is_logged_in()
{
    return (array_key_exists(PS_USERNAME, $_SESSION) && (!empty($_SESSION[PS_USERNAME]))); // Par convention, l'utilisateur est connecté si la données de session username n'est pas vide
}

$username = '';
$password = '';
$username_valide = true;
$password_valide = true;
if (is_logged_in() && array_key_exists('logout_btn', $_POST)) {
// Déconnexion à effectuer
    $_SESSION[PS_USERNAME] = ''; // Username vide signifie non connecté
} else if (!is_logged_in()
    && array_key_exists('login_btn', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)
) {
// Connexion à effectuer ici
// Filtrage et Validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (1 === preg_match('/\w{5,}/', $username));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/\w{6,}/', $password));
    if ($username_valide
        && $password_valide
        && user_authenticate($username, $password)
    ) {
// Si tout se passe bien on le connecte
        $_SESSION[PS_USERNAME] = $username;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow"/>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
    <script src="script/jquery-3.1.1-min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="script/main.js"></script>
    <meta name="descrition" content="<?= $description ?>">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div id="menu_fixe" class="row">
        <div class="col-6 col-m-12">
            <a href="index.php"><img src="images/logo.png" alt="le logo du site"></a>
        </div>
        <div class="col-6">
            <nav>
                <ul class="row">
                    <li class="col-2 col-m-12"><a href="index.php"> Accueil</a></li>
                    <li class="col-2 col-m-12"><a href="catalogue.php"> Activités</a></li>
                    <li class="col-2 col-m-12"><a href="contact.php"> Contact</a></li>
                    <?php if (is_logged_in()) {
                        echo " 
                    <form name='logout' id='logout' method='post'>
                        <input type='submit' id='logout_btn' name='logout_btn' value='Déconnecter'/>
                        <a style='visibility: hidden' href='inscription.php'>s'inscrire</a>
                    </form>";
                        echo "
                  <marquee direction='left' scrollamount='4' onMouseOver='this.stop();' onMouseOut='this.start();'>
                        <span>Bienvenu dans votre espace personel</span>
                    </marquee> ";

                    } else {
                        echo "<li class='col-2 col-m-12'><a href='#id01'> Connexion</a></li>
                    <li class='col-2 col-m-12'><a href='inscription.php'>Inscription</a></li> ";

                    } ?>
                </ul>
            </nav>
        </div>
    </div>
    <div id="second_menu">
        <nav>
            <ul class="row">
                <li><a href="catalogue.php?catid=1"> NATATION</a></li>
                <li><a href="catalogue.php?catid=2"> FITNESS</a></li>
                <li><a href="catalogue.php?catid=4"> ARTS MARTIAUX</a></li>
                <li><a href="catalogue.php?catid=3"> COURSE A PIED</a></li>
                <li><a href="catalogue.php?catid=5"> VELOS</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="id01" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <header class="container">
                <a href="#" class="closebtn">×</a>
                <h2>Connexion</h2>
            </header>
            <div class="container">
                <?php if (is_logged_in()) { ?>

                    <form name="logout" id="logout" method="post">
                        <input type="submit" id="logout_btn" name="logout_btn" value="Déconnecter"/>
                        <a style="visibility: hidden" href="inscription.php">s'inscrire</a>
                    </form>

                <?php } else { ?>
                    <form name="login" id="login" method="post">
                        <div class="div_login">
                            <input type="text" name="username" id="username" placeholder="Identifiant"
                                   value="<?= array_key_exists('username', $_POST) ? $_POST['username'] : '' ?>"/>
                        </div>
                        <div class="div_login">
                            <input type="password" name="password" id="password" placeholder="Mot de passe" value=""/>
                        </div>

                        <?php // Afficher un message dans le cas ou l'authentification n'a pas réussi
                        if (array_key_exists('login_btn', $_POST)) { ?>
                            <p>Le pseudo et le mot de passe fournis ne concordent pas.</p>
                        <?php } ?>
                        <div class="div_login">
                            <input type="submit" id="login_btn" name="login_btn" value="Connecter"/>
                        </div>
                    </form>
                <?php } ?>

            </div>
            <footer class="container">
                <p></p>
            </footer>
        </div>
    </div>
</div>