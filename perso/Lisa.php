<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Lisa</h1>
    <nav>
        <ul class="flex navPerso">
            <li><a href="#overview">Aperçu</a></li>
            <li><a href="#build">Build</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#materiaux">Matériaux</a></li>
            <li><a href="#stat">Stat</a></li>
        </ul>
    </nav>

    <div class="flex" id="overview">
        <div class="descriptionP">
            <p>Mage puissant reconnu comme le diplômé le plus distingué de l'Académie de Sumeru en 200 ans, Lisa est depuis retournée à Mondstadt pour devenir l'humble bibliothécaire de l'Ordre de Favonius.<br><br>Lisa est une sorcière intelligente avec un penchant pour la sieste.<br>En tant que bibliothécaire de l'Ordre de Favonius, cette grande intellectuelle trouve toujours la meilleure solution à tous les problèmes.<br>Malgré son air nonchalant, Lisa maîtrise toute situation avec calme et sérénité.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Lisa</p></div>
            <div class="titreP genshin"><h4>Sorcière à la rose</h4></div>  

            <div><img src="../img/perso/lisa.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/catalyst.png" alt="Image" draggable="false">
                        <p>catalyseur</p>
                    </div>
                </div>
                <div class="spe">
                    <p><strong>Élément</strong></p>
                    <div class="flex">
                        <img src="../img/icon/electro.png" alt="Image" draggable="false">
                        <p>Électro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="electro">Build</h4>
        </div>

        <div>
            <h3 class="electro">★DPS (Électro)</h3><p class="electro">Élévation d'aptitude: Compétence Élémentaire > Attaque Normal > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="Reflet de tranche-brume.php" class="containerArme c5" draggable="false"><img src="../img/arme/Vérité de Kagura.png" alt="image" draggable="false"><p>Vérité de Kagura</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Coupeur de jade primordial.php" class="containerArme c5" draggable="false"><img src="../img/arme/Atlas de la Voûte d'Azur.png" alt="image" draggable="false"><p>Atlas de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="L'origine des Quatre Vents.php" class="containerArme c5" draggable="false"><img src="../img/arme/L'origine des Quatre Vents.png" alt="image" draggable="false"><p>L'origine des Quatre Vents</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="electro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > Recharge d'énergie % > ATQ %</p>
            <div class="flex infoJour">
                <a href="Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Colère de tonnerre.png" alt="image" draggable="false"><p>Compassion de l'oiseau de tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Survivant de la catastrophe.png" alt="image" draggable="false"><p>Survivant de la catastrophe</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Espoir du Gladiateur.png" alt="image" draggable="false"><p>Espoir du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ivresse du Gladiateur.png" alt="image" draggable="false"><p>Ivresse du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Triomphe du Gladiateur.png" alt="image" draggable="false"><p>Triomphe du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="electro">Team</h4>
        </div>

        <div>
            <p class="noir">Surcharge</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>lisa</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kujou Sara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Kujou Sara.png" alt="image" draggable="false"><p>Kujou Sara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Lisa.php" class="containerArme c4" draggable="false"><img src="../img/icon/Lisa.png" alt="image" draggable="false"><p>Lisa</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge</p>
            <div class="flex infoJour">
                <a href="Diluc.php" class="containerArme c5" draggable="false"><img src="../img/icon/Diluc.png" alt="image" draggable="false"><p>Diluc</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Lisa.php" class="containerArme c4" draggable="false"><img src="../img/icon/Lisa.png" alt="image" draggable="false"><p>Lisa</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="electro">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/electro1.png" alt="image" draggable="false"><p>Éclat d'améthyste vajrada<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/electro2.png" alt="image" draggable="false"><p>Fragment d'améthyste vajrada<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/electro3.png" alt="image" draggable="false"><p>Morceau d'améthyste vajrada<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/electro4.png" alt="image" draggable="false"><p>Pierre d'améthyste vajrada<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Bave de Blob.png" alt="image" draggable="false"><p>Bave de Blob<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Mucus de Blob.png" alt="image" draggable="false"><p>Mucus de Blob<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Essence de Blob.png" alt="image" draggable="false"><p>Essence de Blob<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Tombaie.png" alt="image" draggable="false"><p>Tombaie<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Prisme d'éclair.png" alt="image" draggable="false"><p>Prisme d'éclair<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Griffe de Stormterror.png" alt="image" draggable="false"><p>Griffe de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/poesie2.jpg" alt="image" draggable="false"><p>Enseignement de la Poésie<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/poesie3.jpg" alt="image" draggable="false"><p>Guide de la Poésie<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/poesie4.jpg" alt="image" draggable="false"><p>Philosophie de la Poésie<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/lisa1.png" alt="Image">
                <p>Touche d'éclair</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 attaques électrifiées, infligeant des DGT Électro.<br><strong>Attaque chargée :</strong>Consomme de l'endurance pour infliger des DGT Électro de zone après un court délai.<br><br>Combo : 71.28 % / 64.66 % / 77.04 % / 98.93 %<br>Chargée : 318.82 %<br>DGT durant la chute : 112,34 %<br>DGT Chute basse/élevée : 224.62 % / 280.57 %</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Lisa-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/lisa2.png" alt="Image">
                <p>Arc fulminant</p>
            </div>
            <p><strong>Appui simple</strong><br>Libère un orbe électrique à tête chercheuse.<br>Lorsqu'il touche une cible, l'orbe inflige des DGT Électro, ainsi que l'effet Conductivité aux ennemis proches, cumulable 3 fois maximum.<br><br><strong>Appui long</strong><br>Après un court délai, des éclairs s'abattent des cieux et infligent des DGT Électro à tous les ennemis proches.<br>Les ennemis affectés par Conductivité subissent des DGT supplémentaires proportionnels au nombre de cumuls.<br><br>DGT appui simple : 144 %<br>TdR appui simple : 1 s<br>DGT appui long (conductivité 0) : 576 %<br>DGT appui long (conductivité 1) : 662.4 %<br>DGT appui long (conductivité 2) : 763.2 %<br>DGT appui long (conductivité 3) : 876,96 %<br>TdR appui long : 16 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Lisa-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/lisa3.png" alt="Image">
                <p>Rose de foudre</p>
            </div>
            <p>Invoque une rose de foudre qui libère une puissante énergie électrique repoussant les ennemis proches et leur infligeant des DGT Électro.<br><br>La rose de foudre envoie des décharges électriques qui infligent des DGT Électro aux ennemis proches tant qu'elle est active.<br><br>DGT décharge : 65.81 %<br>Durée : 15 s<br>TdR : 20 s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Lisa-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/lisa1.png" alt="Image">
                <p>Relique d'électricité</p>
            </div>
            <p>Les attaques chargées infligent l'effet conductivité d'Arc fulminant aux ennemis lorsqu'elles touchent.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/lisa2.png" alt="Image">
                <p>Champ électrostatique</p>
            </div>
            <p>Rose de foudre réduit la DÉF des ennemis qu'elle touche de 15 % pendant 10 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/lisa3.png" alt="Image">
                <p>Connaissances médicinales</p>
            </div>
            <p>Lorsque vous fabriquez des potions, il y a 20 % de chances qu'une partie des matières premières vous soit rendue.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa1.png" alt="Image">
                <p>Circuit infini</p>
            </div>
            <p>Lisa regagne 2 pts d'énergie par ennemi touché tant qu'Arc fulminant reste activé. Jusqu'à 10 pts d'énergie élémentaire peuvent être restaurés de cette manière.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa2.png" alt="Image">
                <p>Champ électromagnétique</p>
            </div>
            <p>Arc fulminant confère les effets suivants tant qu'il reste activé :<br><br>· DÉF augmentée de 25 %.<br>· Augmente la RÉS à l'interruption de Lisa.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa3.png" alt="Image">
                <p>Tonnerre résonant</p>
            </div>
            <p>Niveau de compétence Rose de foudre +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa4.png" alt="Image">
                <p>Éruption de plasma</p>
            </div>
            <p>Rose de foudre permet de libérer 1 à 3 décharges.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa5.png" alt="Image">
                <p>Électrification</p>
            </div>
            <p>Niveau de compétence Arc fulminant +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/lisa6.png" alt="Image">
                <p>Sorcière de pulse</p>
            </div>
            <p>Lisa inflige 3 cumuls de l'effet conductivité d'Arc fulminant aux ennemis proches lorsqu'elle est déployée au combat. Cet effet peut être déclenché une fois toutes les 5 s.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/lisa2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/lisa3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/lisa.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>