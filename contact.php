<?php
require_once 'define.php';
require_once 'views/top.php';

?>

    <title></title>
    </head>

<?php
require_once 'views/header.php';
?>
<img src="images/gym4.jpg">
    <div  class="fond row" id="wrapper">
        <h1>Contact</h1>
        <div id="bloc_text_contact" class="col-10">
            <div id="bloc_adresse" class="col-6">
            <h2>Adresse</h2>
            <p>255 Boul Cremazie E, Montreal, QC H2M 1M2</p>
            </div>
            <div id="bloc_horaire" class="col-6">
                <h2>Horaire d'ouverture</h2>
                <ul>
                    <li>Lundi <span>8H00 - 19H00</span></li>
                    <li>Mardi <span>8H00 - 19H00</span></li>
                    <li>Mercredi <span>8H00 - 19H00</span></li>
                    <li>Jeudi <span>8H00 - 19H00</span></li>
                    <li>Vendredi <span>8H00 - 19H00</span></li>
                    <li>Samedi <span>8H00 - 19H00</span></li>
                    <li>Dimanche <span>8H00 - 19H00</span></li>
                </ul>
            </div>
        </div>
        <div id="bloc_form" class="col-10">
            <form action="#">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Placez votre nom de famille">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Placez votre prenom ici">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="blabla@gmail.com">
                <label for="commentaire">Commentaires</label>
                <textarea name="commentaire" id="commentaire"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
<?php
require_once 'views/footer.php';
?>