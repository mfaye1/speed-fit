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
            <form id='form_contact' action="#">
                <label class="col-12" for="nom">Nom</label>
                <input class="col-6" type="text" name="nom" id="nom" placeholder="Placez votre nom de famille">
                <label class="col-12" for="prenom">Prenom</label>
                <input class="col-6" type="text" name="prenom" id="prenom" placeholder="Placez votre prenom ici">
                <label class="col-12"for="email">Email</label>
                <input class="col-6" type="email" name="email" id="email" placeholder="blabla@gmail.com">
                <label class="col-12"for="commentaire">Commentaires</label>
                <textarea  class="col-12"name="commentaire" id="commentaire"></textarea>
                <input  class="col-12"type="submit" value="Soumettre">
            </form>
        </div>
    </div>
<?php
require_once 'views/footer.php';
?>