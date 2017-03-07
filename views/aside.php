
<aside>
    <?php
//    var_dump($_POST);
    $recherche=$_POST['search'];
//    var_dump($recherche);
    if (array_key_exists($recherche,$_POST)){

    }
    ?>
    <div>
        <form method="post">
            <input type="text" name="search" placeholder="Search..">
            <input type="submit" name="rechercher" value="rechercher">
        </form>
    </div>
    <div id="menu-deroulant">
                <ul>
                    <li><a href="#">Categories</a>
                    <li><a href="catalogue.php?catid=1">Natation</a></li>
                    <li><a href="catalogue.php?catid=2">Fitness</a></li>
                    <li><a href="catalogue.php?catid=4">Arts Martiaux</a></li>
                    <li><a href="catalogue.php?catid=3">Course a pied</a></li>
                    <li><a href="catalogue.php?catid=5">Velos</a></li>
                    <li><a href="catalogue.php?catid=6">Centre de massage</a></li>
                </ul>
    </div>
</aside>
