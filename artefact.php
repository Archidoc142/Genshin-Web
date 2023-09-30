<?php require 'inc/header.php';?>
<main>
<div>
    <form action="https://www.google.com/search" method="get" class="searchBar flex">
        <input type="text" placeholder="Rechercher...." name="bar">
        <button type="submit"><img src="img/icon/search.png" alt="image"></button>
    </form>
</div>
<h2 class="inline-block title">Tous les artéfacts</h2>
<a>- en ordre de sortie</a>

<div class="flex containerObj"> <!-- À partir d'un certain index pour les armes 4 étoiles -->
    <?php
        foreach($artefacts as $v){
            echo '<a href="info/artefact/' . $v->get_nom() . '.php" class="containerArme c5" draggable="false"><img src="img/artefact/' . $v->get_nom() . '.png" alt="image" draggable="false"><p>' . $v->get_nom() . '</p><img src="img/icon/five_stars.png" alt="image" draggable="false"></a>';
        }
    ?>
</div>

<div class="endPerso"></div>
<?php require 'inc/footer.php';?>