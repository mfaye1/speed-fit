<?php
require_once 'define.php';
require_once 'views/top.php';

?>

    <title></title>
    </head>

<?php
require_once 'views/header.php';
?>
    <div id="wrapper">
        <h1>Contact</h1>
        <div id="bloc_text_contact">
            <div id="bloc_adresse"></div>
            <h2>Adresse</h2>
            <p>255 Boul Cremazie E, Montreal, QC H2M 1M2</p>
            <div id="bloc_horaire">
                <h2>Horaire d'ouverture</h2>
                <ul>
                    <li>Lundi 8H00 - 19H00</li>
                    <li>Mardi 8H00 - 19H00</li>
                    <li>Mercredi 8H00 - 19H00</li>
                    <li>Jeudi 8H00 - 19H00</li>
                    <li>Vendredi 8H00 - 19H00</li>
                    <li>Samedi 8H00 - 19H00</li>
                    <li>Dimanche 8H00 - 19H00</li>
                </ul>
            </div>
        </div>
        <div id="bloc_form">
            <form>
                <label>First name:
                <input type="text" name="firstname" value="Mickey">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value="Mouse">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
<?php
require_once 'views/footer.php';
?>