<?php require 'inc/header.php';?>
<main>
    
<h2 class="inline materiaux">Matériaux d'élévation du jour</h2><?php echo ' [' . $_SESSION['jour'] . ']';?>
<div class="info">
    <h3>Pour les personnages</h3>
    <div class="flex infoJour">
    <?php
        foreach ($materiaux as $v){
            if ($v->get_star() == 4 && $v->get_jour() == $_SESSION['jourNum'] && $v->get_type() == "aptitude"){
                echo '<div class="container">';
                echo '<img src="' . $v->get_img() . '" alt="image" draggable="false">';
                echo "<h4>" . $v->get_nom() . "</h4>";
                if ($_SESSION['jourNum'] == 1){
                    echo "<p>Lundi, Jeudi, Dimanche</p>";
                } elseif ($_SESSION['jourNum'] == 2){
                    echo "<p>Mardi, Vendredi, Dimanche</p>";
                } else {
                    echo "<p>Mercredi, Samedi, Dimanche</p>";
                }
                echo "</div>";
            }
        }
    ?>        
    </div>
</div>
<div class="info ma-Arme">
    <h3>Pour les armes</h3>
    <div class="flex infoJour">
    <?php
        foreach ($materiaux as $v){
            if ($v->get_star() == 5 && $v->get_jour() == $_SESSION['jourNum'] && $v->get_type() == "arme"){
                echo '<div class="container">';
                echo '<img src="' . $v->get_img() . '" alt="image" draggable="false">';
                echo "<h4>" . $v->get_nom() . "</h4>";
                if ($_SESSION['jourNum'] == 1){
                    echo "<p>Lundi, Jeudi, Dimanche</p>";
                } elseif ($_SESSION['jourNum'] == 2){
                    echo "<p>Mardi, Vendredi, Dimanche</p>";
                } else {
                    echo "<p>Mercredi, Samedi, Dimanche</p>";
                }
                echo "</div>";
            }
        }
    ?>        
    </div>
</div>
<div class="info">
    <h3>Spécificités du jeu</h3>
    <div class="flex infoJour">
        <div class="container2">
            <h4>Matériaux</h4>
            <div class="flex">
                <img src="img/icon/materiaux.jpg" alt="image" draggable='false'>
                <p>Voir tous les matériaux disponibles</p>
            </div>
        </div>
        <div class="container2">
            <h4>Monstres</h4>
            <div class="flex">
                <img src="img/icon/monstre.jpg" alt="image" draggable='false'>
                <p>Voir tous les monstres disponibles</p>
            </div>
        </div>
        <div class="container2">
            <h4>Historique des bannières</h4>
            <div class="flex">
                <img src="img/icon/banner.jpg" alt="image" draggable='false'>
                <p>Vérifiez les bannières</p>
            </div>
        </div>
        <div class="container2 elements">
            <h4>Éléments</h4>
            <div>
                <img src="img/icon/elements.jpg" alt="image" draggable='false'>
            </div>
        </div>    
    </div>
</div>
<div class="info">
    <h3>Autres</h3>
    <div class="flex infoJour">
        <div class="container2 containerA">
            <h4>Calculateur de Primogem</h4>
            <div class="flex">
                <img src="img/icon/primogem.png" alt="image" draggable='false'>
                <p>Approximation du nombre de primogem disponible par version</p>
            </div>
        </div>
    </div>
</div>
<div class="end"></div>
<script src="js/script.js"></script>
<?php require 'inc/footer.php';?>