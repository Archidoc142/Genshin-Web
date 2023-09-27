<?php require 'inc/header.php';?>
<main class="persoPage">
<div>
    <form action="https://www.google.com/search" method="get" class="searchBar flex">
        <input type="text" placeholder="Rechercher...." name="bar">
        <button type="submit"><img src="img/icon/search.png" alt="image"></button>
    </form>
</div>
<h2 class="persoTitle">Tous les personnages</h2>

<div class="flex containerPerso">
    <?php
        foreach($personnages as $v){
            echo '<a href="info/perso/' . $v->get_lien() . '/' . $v->get_lien() . '.php"><img src="img/perso/Card/' . $v->get_img() . '.jpg" alt="image" draggable="false"></a>';
        }
    ?>
</div>

<div class="end"></div>
<?php require 'inc/footer.php';?>