<?php require 'inc/header.php';?>
<main class="persoPage">
<div>
    <form action="https://www.google.com/search" method="get" class="searchBar flex">
        <input type="text" placeholder="Rechercher...." name="bar">
        <button type="submit"><img src="img/icon/search.png" alt="image"></button>
    </form>
</div>
<h2 class="inline-block title">Tous les personnages</h2>
<a>- en ordre de sortie</a>

<div class="flex containerPerso">
    <?php
        foreach($personnages as $v){
            echo '<a href="perso/' . $v->get_nom() . '.php" draggable="false"><img src="img/perso/' . $v->get_nom() . '.jpg" alt="image" draggable="false"></a>';
        }
    ?>
</div>

<div class="endPerso"></div>
<?php require 'inc/footer.php';?>