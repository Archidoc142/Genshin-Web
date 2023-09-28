<?php require 'inc/header.php';?>
<main class="persoPage">
<div>
    <form action="https://www.google.com/search" method="get" class="searchBar flex">
        <input type="text" placeholder="Rechercher...." name="bar">
        <button type="submit"><img src="img/icon/search.png" alt="image"></button>
    </form>
</div>
<h2 class="title">Les armes</h2>

<div class="flex containerObj">
    <?php
        foreach($armes as $v){
            if($v->get_star() == 4){
                echo '<a href="info/arme/' . $v->get_nom() . '.php" class="containerArme c4" draggable="false"><img src="img/arme/' . $v->get_nom() . '.png" alt="image" draggable="false"><p>' . $v->get_nom() . '</p><img src="img/icon/four_stars.png" alt="image" draggable="false"></a>';
            } else {
                echo '<a href="info/arme/' . $v->get_nom() . '.php" class="containerArme c5" draggable="false"><img src="img/arme/' . $v->get_nom() . '.png" alt="image" draggable="false"><p>' . $v->get_nom() . '</p><img src="img/icon/five_stars.png" alt="image" draggable="false"></a>';
            }
        }
    ?>
</div>

<div class="endPerso"></div>
<?php require 'inc/footer.php';?>