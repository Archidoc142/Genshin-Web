<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Xiangling</h1>
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
            <p>Elle est cheffe de cuisine au Restaurant Wanmin et le dirige aux côtés de son père, le Chef Mao. En tant que cheffe, Xiangling n'a pas peur d'essayer différentes recettes ou ingrédients "exotiques"... rendant ses plats parfois assez uniques.<br><br>La nouvelle toque du Restaurant Wanmin, qui travaille aussi en salle quand elle n'est pas aux fourneaux. Sa maîtrise de l'art culinaire se voit notamment dans ses spécialités aussi relevées que savoureuses.<br><br>Douée malgré son jeune âge, Xiangling jouit d'une excellente réputation auprès des amateurs de bonne chère de la Falaise Chihu.<br>Si par chance elle vous invite un jour à venir tester une nouvelle recette, allez-y les yeux fermés. Satisfaction garantie.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Xiangling</p></div>
            <div class="titreP genshin"><h4>Cordon-bleu du peuple</h4></div>  

            <div><img src="../img/perso/Xiangling.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/Polearm.png" alt="Image" draggable="false">
                        <p>Polearm</p>
                    </div>
                </div>
                <div class="spe">
                    <p><strong>Élément</strong></p>
                    <div class="flex">
                        <img src="../img/icon/pyro.png" alt="Image" draggable="false">
                        <p>Pyro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="pyro">Build</h4>
        </div>

        <div>
            <h3 class="pyro">★DPS hors-terrain</h3><p class="pyro">Élévation d'aptitude: Déchaînement Élémentaire >  Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Bâton de Homa.php" class="containerArme c5" draggable="false"><img src="../img/arme/Bâton de Homa.png" alt="image" draggable="false"><p>Bâton de Homa</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/« La prise ».png" alt="image" draggable="false"><p>« La prise »</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Lance de jade ailée.php" class="containerArme c5" draggable="false"><img src="../img/arme/Lance de jade ailée.png" alt="image" draggable="false"><p>Lance de jade ailée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Berge de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Berge de la Voûte d'Azur.png" alt="image" draggable="false"><p>Berge de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lance de Favonius.png" alt="image" draggable="false"><p>Lance de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="pyro">Stats Secondaires: Taux CRIT % > DGT CRIT % > ATQ %</p>
            <div class="flex infoJour">
            <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Emblème du destin brisé.png" alt="image" draggable="false"><p>Tsuba magnifique</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume brisée.png" alt="image" draggable="false"><p>Plume brisée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Inro de la tempête.png" alt="image" draggable="false"><p>Inro de la tempête</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Gourde pourpre.png" alt="image" draggable="false"><p>Gourde pourpre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Kabuto orné.png" alt="image" draggable="false"><p>Kabuto orné</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="pyro">Team</h4>
        </div>

        <div>
            <p class="noir">Vaporize - S</p>
            <div class="flex infoJour">
                <a href="Tartaglia.php" class="containerArme c5" draggable="false"><img src="../img/icon/Tartaglia.png" alt="image" draggable="false"><p>Tartaglia</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge - A</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>Raiden Shogun</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kujou Sara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Kujou Sara.png" alt="image" draggable="false"><p>Kujou Sara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="pyro">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/pyro1.png" alt="image" draggable="false"><p>Éclat d'agate agnidus<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/pyro2.png" alt="image" draggable="false"><p>Fragment d'agate agnidus<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/pyro3.png" alt="image" draggable="false"><p>Morceau d'agate agnidus<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/pyro4.png" alt="image" draggable="false"><p>Pierre d'agate agnidus<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Bave de Blob.png" alt="image" draggable="false"><p>Bave de Blob<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Mucus de Blob.png" alt="image" draggable="false"><p>Mucus de Blob<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Essence de Blob.png" alt="image" draggable="false"><p>Essence de Blob<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Piment de Jueyun.png" alt="image" draggable="false"><p>Piment de Jueyun<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Graine de feu.png" alt="image" draggable="false"><p>Graine de feu<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Griffe de Stormterror.png" alt="image" draggable="false"><p>Griffe de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/diligence2.jpg" alt="image" draggable="false"><p>Enseignement de la Diligence<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/diligence3.jpg" alt="image" draggable="false"><p>Guide de la Diligence<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/diligence4.jpg" alt="image" draggable="false"><p>Philosophie de la Diligence<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xiangling1.png" alt="Image">
                <p>Cuisine-fu</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 coups de lance.<br><strong>Attaque chargée :</strong>Consomme de l'endurance pour charger en ligne droite et infliger des DGT aux ennemis sur la route.<br><br>Combo : 83.13% / 83.3% / 51.51%*2 / 27.88%*4 / 140.42%<br>Chargée : 240.55%<br>DGT durant la chute : 126.38%<br>DGT Chute basse/élevée : 252.7% / 315.64%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xiangling-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xiangling2.png" alt="Image">
                <p>Attaque Gooba</p>
            </div>
            <p>Xiangling invoque Gooba. Tant que Gooba est actif, il crache du feu sur les ennemis, leur infligeant des DGT Pyro de zone.<br><br>DGT Jet de feu : 200.3%<br>TdR : 12s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xiangling-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xiangling3.png" alt="Image">
                <p>Pyrotation</p>
            </div>
            <p>Démontrant à nouveau sa maîtrise du feu et des armes, Xiangling libère une tornade de feu qui tournoie autour d'elle.<br>La tornade suit le personnage tant qu'elle est active, infligeant des DGT Pyro aux ennemis sur sa route.<br><br>DGT Combo : 129.6% / 158.4% / 197.28%<br>DGT Pyrotation : 201.6%<br>Durée : 10s<br>TdR : 20s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xiangling-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xiangling1.png" alt="Image">
                <p>Feux croisés</p>
            </div>
            <p>Augmente la portée des crachats de feu de Gooba de 20 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xiangling2.png" alt="Image">
                <p>Attention, ça pique</p>
            </div>
            <p>À la fin d'Attaque Gooba, le gentil petit Gooba laisse un piment à son emplacement avant de disparaître. Ces piments confèrent un bonus de 10 % d'ATQ pendant 10 s à celui qui le ramasse.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xiangling3.png" alt="Image">
                <p>Cheffe cuisinière</p>
            </div>
            <p>12 % de chances d'obtenir un plat supplémentaire lorsque vous cuisinez un plat parfait qui renforce l'ATQ.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling1.png" alt="Image">
                <p>Croustillant à l'extérieur, tendre à l'intérieur</p>
            </div>
            <p>La RÉS Pyro des ennemis touchés par Gooba est réduite de 15 % pendant 6 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling2.png" alt="Image">
                <p>L'huile sur le feu</p>
            </div>
            <p>Le dernier coup d'attaque normale inflige pendant 2 s un effet d'implosion aux ennemis. Au bout de ce délai, ils explosent, infligeant des DGT Pyro de zone équivalant à 75 % de l'ATQ.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling3.png" alt="Image">
                <p>Sauté profond</p>
            </div>
            <p>Niveau de compétence Pyrotation +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling4.png" alt="Image">
                <p>Douce cuisine</p>
            </div>
            <p>Prolonge la durée de Pyrotation de 40 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling5.png" alt="Image">
                <p>Colère de Gooba</p>
            </div>
            <p>Niveau de compétence Attaque Gooba +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xiangling6.png" alt="Image">
                <p>Pyrotation condensée</p>
            </div>
            <p>Les DGT Pyro de tous les personnages de l'équipe sont augmentés de 15 % tant que Pyrotation est active.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Xiangling2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Xiangling3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Xiangling.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>