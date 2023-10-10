<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Mona</h1>
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
            <p>Astrologue savante et très fière, Mona s'est installée à Mondstadt pour éviter de subir l'ire de son maître après avoir lu sans le savoir le journal de ce dernier.<br><br>Jeune astromancienne mystérieuse, Mona se surnomme elle-même « la grande astromancienne Mona », et fait preuve d'une force singulière et d'une érudition hors-norme qui ne désavouent pas cette appellation.<br><br>Bien que vivant une vie frugale et devant souvent faire face à des fins de mois difficiles, Mona refuse de faire payer ses prédictions... Sa bourse reste donc vide la plupart du temps.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Mona</p></div>
            <div class="titreP genshin"><h4>Réflexion Astrale</h4></div>  

            <div><img src="../img/perso/Mona.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/five_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/catalyst.png" alt="Image" draggable="false">
                        <p>Catalyseur</p>
                    </div>
                </div>
                <div class="spe">
                    <p><strong>Élément</strong></p>
                    <div class="flex">
                        <img src="../img/icon/hydro.png" alt="Image" draggable="false">
                        <p>Hydro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="hydro">Build</h4>
        </div>

        <div>
            <h3 class="hydro">★Soutien</h3><p class="hydro">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c3" draggable="false"><img src="../img/arme/Histoire des chasseurs de dragon.png" alt="image" draggable="false"><p>Histoire des chasseurs de dragon</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Code de Favonius.png" alt="image" draggable="false"><p>Code de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Malice (prototype).png" alt="image" draggable="false"><p>Malice (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="hydro">Stats Secondaires:  Recharge d'énergie % > Taux CRIT % > ATQ %</p>
            <div class="flex infoJour">
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ancien rituel royal.png" alt="image" draggable="false"><p>Moment du jugement</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du Noble.png" alt="image" draggable="false"><p>Plume du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Montre de poche du Noble.png" alt="image" draggable="false"><p>Montre de poche du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Urne d'argent du Noble.png" alt="image" draggable="false"><p>Urne d'argent du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Masque du Noble.png" alt="image" draggable="false"><p>Masque du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
        <div>
            <h3 class="hydro">★DPS hors-terrain</h3><p class="hydro">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Mouvement vagabond.png" alt="image" draggable="false"><p>Mouvement vagabond</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Atlas de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Atlas de la Voûte d'Azur.png" alt="image" draggable="false"><p>Atlas de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/L'origine des Quatre Vents.php" class="containerArme c5" draggable="false"><img src="../img/arme/L'origine des Quatre Vents.png" alt="image" draggable="false"><p>L'origine des Quatre Vents</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Atlas des terres et des mers.png" alt="image" draggable="false"><p>Atlas des terres et des mers</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="hydro">Stats Secondaires:  Recharge d'énergie % > DGT CRIT % > Taux CRIT % > ATQ %</p>
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
            <h4 class="hydro">Team</h4>
        </div>

        <div>
            <p class="noir">Supra-conduction - S</p>
            <div class="flex infoJour">
                <a href="Hu Tao.php" class="containerArme c5" draggable="false"><img src="../img/icon/Hu Tao.png" alt="image" draggable="false"><p>Hu Tao</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Mona.php" class="containerArme c5" draggable="false"><img src="../img/icon/Mona.png" alt="image" draggable="false"><p>Mona</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Diona.php" class="containerArme c4" draggable="false"><img src="../img/icon/Diona.png" alt="image" draggable="false"><p>Diona</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Gel - S</p>
            <div class="flex infoJour">
                <a href="Ganyu.php" class="containerArme c5" draggable="false"><img src="../img/icon/Ganyu.png" alt="image" draggable="false"><p>Ganyu</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Mona.php" class="containerArme c5" draggable="false"><img src="../img/icon/Mona.png" alt="image" draggable="false"><p>Mona</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Diona.php" class="containerArme c4" draggable="false"><img src="../img/icon/Diona.png" alt="image" draggable="false"><p>Diona</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Venti.php" class="containerArme c5" draggable="false"><img src="../img/icon/Venti.png" alt="image" draggable="false"><p>Venti</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="hydro">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/hydro1.png" alt="image" draggable="false"><p>Éclat de lazurite varunada<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/hydro2.png" alt="image" draggable="false"><p>Fragment de lazurite varunada<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/hydro3.png" alt="image" draggable="false"><p>Morceau de lazurite varunada<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/hydro4.png" alt="image" draggable="false"><p>Pierre de lazurite varunada<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Nectar de Fleur mensongère.png" alt="image" draggable="false"><p>Nectar de Fleur mensongère<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Nectar miroitant.png" alt="image" draggable="false"><p>Nectar miroitant<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Nectar élémentaire.png" alt="image" draggable="false"><p>Nectar élémentaire<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Champignon anémophile.png" alt="image" draggable="false"><p>Champignon anémophile<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Coeur d'eau pure.png" alt="image" draggable="false"><p>Coeur d'eau pure<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Vertèbre de Borée.png" alt="image" draggable="false"><p>Vertèbre de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/resistance2.jpg" alt="image" draggable="false"><p>Enseignement de la Résistance<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/resistance3.jpg" alt="image" draggable="false"><p>Guide de la Résistance<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/resistance4.jpg" alt="image" draggable="false"><p>Philosophie de la Résistance<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Mona1.png" alt="Image">
                <p>Ondes du destin</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 attaques, infligeant des DGT Hydro.<br><strong>Attaque chargée :</strong>Après un court délai, inflige des DGT Hydro de zone.<br><br>Combo : 67.68% / 64.8% / 80.64% / 101.09%<br>Chargée : 269.5%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.62% / 280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Mona-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Mona2.png" alt="Image">
                <p>Mirage aqueux</p>
            </div>
            <p>Invoque un mirage qui prend l'aggro des ennemis proches et inflige des dégâts Hydro en continu autours de lui. Inflige des dégâts Hydro de zone quand il prend fin.<br><br>DGT continus : 57.60%<br>DGT explosion : 239.04%<br>TdR : 12s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Mona-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Mona3.png" alt="Image">
                <p>Voie divine</p>
            </div>
            <p>Emprisonne les ennemis dans des bulles nocturnes dans une large zone et les trempe. Les ennemis les plus faibles sont immobilisés. Quand un ennemi emprisonné subit des DGT, lui inflige des DGT Hydro, puis il passe en état présage ce qui augmente les DGT qu'il subit.<br><br>Durée Bulle nocturne : 8s<br>DGT Bulle nocturne : 796.32%<br>Bonus de DGT : 60%<br>Durée du présage : 4s<br>TdR : 15s<br>Energie élémentaire : 60</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Mona-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Mona1.png" alt="Image">
                <p>Leurre du fatum</p>
            </div>
            <p>Entrer dans l'état Vicissitude invoque automatiquement un mirage après 2s en cas de présence d'ennemis proches. Les mirages invoqués de cette manière durent 2s, et infligent des DGT équivalent à 50% des DGT de Mirage Aqueux.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Mona2.png" alt="Image">
                <p>Que le destin décide</p>
            </div>
            <p>Confère à Mona un bonus de DGT Hydro équivalent à 20% de sa recharge d'énergie.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Mona3.png" alt="Image">
                <p>Principes d'astromancie</p>
            </div>
            <p>Lorsque vous fabriquez un matériau d'élévation d'arme, il y a 25% de chance qu'une partie des matières premières vous soit rendue.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona1.png" alt="Image">
                <p>Prophétie immersive</p>
            </div>
            <p>Les effets des réactions liées à l'élément Hydro sont renforcés pendant 8 s lorsqu'une attaque de vos personnages dans l'équipe touche un ennemi marqué par un présage :<br>- Les DGT d'Électrocution, d'Évaporation, de Dispersion Hydro augmentent de 15 %.<br>- La durée de Gel augmente de 15 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona2.png" alt="Image">
                <p>Chaine lunaire</p>
            </div>
            <p>Les attaques normales ont 20 % de chances d'être suivies par une attaque chargée.<br>Cet effet peut être déclenché une fois toutes les 5 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona3.png" alt="Image">
                <p>Révolution éternelle</p>
            </div>
            <p>Niveau de compétence Voie Divine +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona4.png" alt="Image">
                <p>Prophétie de la fin</p>
            </div>
            <p>Augmente le taux CRIT de 15 % lorsque vos personnages dans l'équipe attaquent un ennemi marqué par un présage.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona5.png" alt="Image">
                <p>Un tour du destin</p>
            </div>
            <p>Niveau de compétence Mirage aqueux +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Mona6.png" alt="Image">
                <p>Rhétorique de l'adversité</p>
            </div>
            <p>Dans l'état Vicissitude, Mona obtient un bonus de 60 % de DGT pour sa prochaine attaque chargée à chaque seconde passée à se déplacer.<br>Cet effet peut être cumulé 3 fois maximum (bonus de 180 %) et dure 8 s.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Mona2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Mona3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Mona.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>