<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Fischl</h1>
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
            <p>Fischl von Luftschloss Narfidort est enquêtrice pour la Guilde des aventuriers de Mondstadt, accompagnée du corbeau nocturne Oz. Aventurière audacieuse avec des théories apparemment farfelues qui se révèlent être vraies, elle prétend venir d'un monde au-delà de Teyvat.<br><br>Une fille mystérieuse qui se fait appeler « la Princesse du Châtiment ». Elle marche toujours avec un corbeau de nuit nommé Oz.<br>Fischl travaille actuellement comme enquêtrice au sein de la Guilde des Aventuriers.<br>Bien qu'elle ne veuille pas l'admettre, Fischl est devenue la nouvelle star parmi ses pairs, réussissant à gagner la reconnaissance et l'acceptation de tous, grâce à ses capacités spéciales, sa personnalité excentrique et ses efforts assidus.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Fischl</p></div>
            <div class="titreP genshin"><h4>Princesse du châtiment !</h4></div>  

            <div><img src="../img/perso/Fischl.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/bow.png" alt="Image" draggable="false">
                        <p>Arc</p>
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
            <h3 class="electro">★DPS hors-terrain</h3><p class="electro">Élévation d'aptitude: Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Pulsation du tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/arme/Pulsation du tonnerre.png" alt="image" draggable="false"><p>Pulsation du tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Ailes de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Ailes de la Voûte d'Azur.png" alt="image" draggable="false"><p>Ailes de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Arc d'Amos.php" class="containerArme c5" draggable="false"><img src="../img/arme/Arc d'Amos.png" alt="image" draggable="false"><p>Arc d'Amos</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Dernière corde.png" alt="image" draggable="false"><p>Dernière corde</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lune paisible (prototype).png" alt="image" draggable="false"><p>Lune paisible (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Valse nocturne.png" alt="image" draggable="false"><p>Valse nocturne</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="electro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Troupe dorée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Troupe dorée.png" alt="image" draggable="false"><p>Variation de la mélodie dorée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Troupe dorée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Mue de l'oiseau d'or.png" alt="image" draggable="false"><p>Mue de l'oiseau d'or</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Troupe dorée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Prélude de l'ère dorée.png" alt="image" draggable="false"><p>Prélude de l'ère dorée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Troupe dorée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Agitation de la nuit dorée.png" alt="image" draggable="false"><p>Agitation de la nuit dorée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Troupe dorée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Récompense de la Troupe dorée.png" alt="image" draggable="false"><p>Récompense de la Troupe dorée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <div class="flex infoJour">
                <a href="../artefact/Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Colère de tonnerre.png" alt="image" draggable="false"><p>Compassion de l'Oiselle du tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Survivant de la catastrophe.png" alt="image" draggable="false"><p>Survivant de la catastrophe</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Sablier de tonnerre.png" alt="image" draggable="false"><p>Sablier de tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Présage de tombée du tonnerre.png" alt="image" draggable="false"><p>Présage de tombée du tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Colère de tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Diadème de l'Invocateur de tonnerre.png" alt="image" draggable="false"><p>Diadème de l'Invocateur de tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="electro">Team</h4>
        </div>

        <div>
            <p class="noir">Électrocution - SS</p>
            <div class="flex infoJour">
                <a href="Neuvillette.php" class="containerArme c5" draggable="false"><img src="../img/icon/Neuvillette.png" alt="image" draggable="false"><p>Neuvillette</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Tartaglia.php" class="containerArme c5" draggable="false"><img src="../img/icon/Tartaglia.png" alt="image" draggable="false"><p>Tartaglia</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Keqing team - A</p>
            <div class="flex infoJour">
                <a href="Keqing.php" class="containerArme c5" draggable="false"><img src="../img/icon/Keqing.png" alt="image" draggable="false"><p>Keqing</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Baizhu.php" class="containerArme c5" draggable="false"><img src="../img/icon/Baizhu.png" alt="image" draggable="false"><p>Baizhu</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche robuste.png" alt="image" draggable="false"><p>Pointe de flèche robuste<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche aiguisée.png" alt="image" draggable="false"><p>Pointe de flèche aiguisée<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche usée.png" alt="image" draggable="false"><p>Pointe de flèche usée<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Herbe à lampe.png" alt="image" draggable="false"><p>Herbe à lampe<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Prisme d'éclair.png" alt="image" draggable="false"><p>Prisme d'éclair<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Esprit de Borée.png" alt="image" draggable="false"><p>Esprit de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Fischl1.png" alt="Image">
                <p>Flèche de culpabilité</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 tirs consécutifs.<br><strong>Attaque chargée :</strong>Effectue un tir visé plus précis et infligeant davantage de DGT.<br>Lors de la visée, les ténébreux esprits de la nuit convergent sur la flèche. Celle-ci se charge en élément Électro, infligeant de considérables DGT Électro quand elle est complètement chargée.<br><br>Combo : 87.21% / 92.48% / 114.92% / 114.07% / 142.46%<br>Chargée circulaire : 86.7%<br>Chargée finale : 223.2%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.62% / 280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Fischl-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Fischl2.png" alt="Image">
                <p>Ailes de surveillance nocturne</p>
            </div>
            <p>Fischl invoque son fidèle Oz à ses côtés. Le corbeau d'ombre et de tonnerre descend sur ce monde, infligeant des DGT Électro dans une petite zone lors de son invocation.<br>Oz tire de façon continue des balles électrifiées sur les ennemis proches tant qu'il est actif.<br><br><strong>Appui long</strong><br>Ajuste la zone où la compétence sera lancée.<br>Appuyez à nouveau lorsque Oz est actif pour le faire revenir.<br><br>DGT Invocation : 207.79 %<br>DGT Attaque Oz : 159.84 %<br>Durée d'Oz : 10 s<br>TdR : 25 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Fischl-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Fischl3.png" alt="Image">
                <p>Incarnation de la nuit</p>
            </div>
            <p>Transforme Fischl en Oz, augmentant grandement sa VIT de déplacement et infligeant des DGT Électro aux ennemis au contact. Réinitialise le temps de présence d'Oz.<br><br>DGT Foudre : 374.4%<br>TdR : 15s<br>Coût énergie : 60</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Fischl-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Fischl1.png" alt="Image">
                <p>Corbeau maléfique</p>
            </div>
            <p>Oz libère sur les ennemis proches la foudre du jugement lorsque Fischl le touche d'une flèche complètement chargée, leur infligeant des DGT Électro de zone équivalant à 152,7 % des DGT du tir.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Fischl2.png" alt="Image">
                <p>Foudre divine</p>
            </div>
            <p>Lorsque votre personnage déployé déclenche une réaction liée à l'élément Électro en la présence d'Oz, l'ennemi est frappé par la foudre du jugement divin, et subit des DGT Électro équivalant à 80 % de l'ATQ de Fischl.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Fischl3.png" alt="Image">
                <p>Jardin secret</p>
            </div>
            <p>Réduit la durée d'une expédition de 25 % lorsqu'elle se déroule à Mondstadt.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl1.png" alt="Image">
                <p>Œil du corbeau obscur</p>
            </div>
            <p>Oz garde toujours un œil de corbeau sur Fischl, même quand il ne l'accompagne pas au combat : les attaques normales de Fischl infligent un bonus de DGT équivalant à 22 % de l'ATQ.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl2.png" alt="Image">
                <p>Plume de jugement</p>
            </div>
            <p>Ailes de surveillance nocturne inflige un bonus de DGT équivalant à 200 % de l'ATQ ; la zone d'effet augmente de 50 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl3.png" alt="Image">
                <p>Ailes noires de l'Abîme</p>
            </div>
            <p>Niveau de compétence Ailes de surveillance nocturne +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl4.png" alt="Image">
                <p>Les fantasmes de la princesse</p>
            </div>
            <p>Incarnation de la nuit inflige un bonus de DGT Électro équivalant à 222 % de l'ATQ aux ennemis proches. Fischl récupère 20 % de PV à la fin de la compétence.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl5.png" alt="Image">
                <p>Apocalypse de la nuit</p>
            </div>
            <p>Niveau de compétence Incarnation de la nuit +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Fischl6.png" alt="Image">
                <p>Oiseau de la nuit éternelle</p>
            </div>
            <p>Prolonge la durée d'Oz de 2 s. De plus, Oz attaque aux côtés de votre personnage déployé, infligeant des DGT Électro équivalant à 30 % de l'ATQ de Fischl.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Fischl2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Fischl3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Fischl.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>