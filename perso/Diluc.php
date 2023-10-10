<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Diluc</h1>
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
            <p>Né dans le riche clan Ragnvindr, Diluc est l'actuel propriétaire du Domaine de l'Aurore et un noble de haute estime dans la société de Mondstadt. Alors qu'un incident passé l'a amené à se séparer de l'Ordre de Favonius, il continue de protéger Mondstadt à sa manière.<br><br>Étant l'homme le plus riche de Mondstadt, Diluc se présente toujours comme un jeune homme élégant et charmant, à l'image publique parfaite.<br>Sous ce masque se cache un guerrier à la volonté de fer forgée dans les flemmes qui ne recule devant rien pour protéger Mondstadt. Ne comptez pas sur lui pour ménager ses adversaires, il sera sans pitié jusqu'à la fin.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Diluc</p></div>
            <div class="titreP genshin"><h4>Ombre de l'Aurore</h4></div>  

            <div><img src="../img/perso/Diluc.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/five_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/claymore.png" alt="Image" draggable="false">
                        <p>Claymore</p>
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
            <h3 class="pyro">★DPS</h3><p class="pyro">Élévation d'aptitude: Attaque Normale > Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Mort-du-loup.php" class="containerArme c5" draggable="false"><img src="../img/arme/Mort-du-loup.png" alt="image" draggable="false"><p>Mort-du-loup</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Lame brute.php" class="containerArme c5" draggable="false"><img src="../img/arme/Lame brute.png" alt="image" draggable="false"><p>Lame brute</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Ossature du dragon.png" alt="image" draggable="false"><p>Ossature du dragon</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Illustre seigneur des mers.png" alt="image" draggable="false"><p>Illustre seigneur des mers</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Espadon (prototype).png" alt="image" draggable="false"><p>Espadon (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="pyro">Stats Secondaires: DGT CRIT % > Taux CRIT % > ATQ % > Maîtrise élémentaire</p>
            <div class="flex infoJour">
                <a href="../artefact/Sorcière des flammes ardentes.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Sorcière des flammes ardentes.png" alt="image" draggable="false"><p>Fleur ardente de la Sorcière</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Sorcière des flammes ardentes.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume enflammée éternelle de la Sorcière.png" alt="image" draggable="false"><p>Plume enflammée éternelle de la Sorcière</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Sorcière des flammes ardentes.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Temps évanoui de la Sorcière.png" alt="image" draggable="false"><p>Temps évanoui de la Sorcière</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Sorcière des flammes ardentes.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Feu du cœur de la Sorcière.png" alt="image" draggable="false"><p>Feu du cœur de la Sorcière</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Sorcière des flammes ardentes.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Chapeau brûlé de la Sorcière.png" alt="image" draggable="false"><p>Chapeau brûlé de la Sorcière</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="pyro">Team</h4>
        </div>

        <div>
            <p class="noir">Évaporation - A</p>
            <div class="flex infoJour">
                <a href="Diluc.php" class="containerArme c5" draggable="false"><img src="../img/icon/Diluc.png" alt="image" draggable="false"><p>Diluc</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xingqiu.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xingqiu.png" alt="image" draggable="false"><p>Xingqiu</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Fonte - A</p>
            <div class="flex infoJour">
                <a href="Diluc.php" class="containerArme c5" draggable="false"><img src="../img/icon/Diluc.png" alt="image" draggable="false"><p>Diluc</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Ayaka.php" class="containerArme c5" draggable="false"><img src="../img/icon/Ayaka.png" alt="image" draggable="false"><p>Ayaka</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Diona.php" class="containerArme c4" draggable="false"><img src="../img/icon/Diona.png" alt="image" draggable="false"><p>Diona</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Insigne de nouvelle recrue.png" alt="image" draggable="false"><p>Insigne de nouvelle recrue<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Insigne de sergent.png" alt="image" draggable="false"><p>Insigne de sergent<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Insigne d'officier.png" alt="image" draggable="false"><p>Insigne d'officier<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Herbe à lampe.png" alt="image" draggable="false"><p>Herbe à lampe<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Graine de feu.png" alt="image" draggable="false"><p>Graine de feu<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Plume de Stormterror.png" alt="image" draggable="false"><p>Plume de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Diluc1.png" alt="Image">
                <p>Épée trempée</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 coups d'épée.<br><strong>Attaque chargée :</strong>Consomme de l'endurance de façon continue pour exécuter une succession d'entailles aussi rapides que tranchantes.<br>L'attaque chargée se termine sur un coup puissant.<br><br>Combo : 177.31% / 173.23% / 195.33% / 264.86%<br>Chargée circulaire : 136%<br>Chargée finale : 246.5%<br>Durée max : 5s<br>DGT durant la chute : 176.93%<br>DGT Chute basse/élevée : 353.78% / 441.89%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Diluc-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Diluc2.png" alt="Image">
                <p>Assaut brûlant</p>
            </div>
            <p>Diluc fait tournoyer sa lourde épée vers l'avant, infligeant des DGT Pyro.<br>Cette attaque peut être enchaînée 3 fois de suite.<br>Elle entre en TdR si l'enchaînement n'est pas assez rapide.<br><br>DGT compétence : 169.92% / 175.68% / 231.84%<br>TdR : 10s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Diluc-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Diluc3.png" alt="Image">
                <p>Aurore</p>
            </div>
            <p>TDiluc érupte en une explosion de flammes qui repoussent les ennemis et leur infligent des DGT Pyro. Les flammes convergent ensuite sur son arme, pour renaître en un phénix qui inflige d'importants DGT Pyro et repousse les ennemis sur sa route. Le phénix explose lorsqu'il atteint sa destination et inflige d'importants DGT Pyro de zone.<br>Les flammes confèrent à l'arme de Diluc un enchantement Pyro.<br><br>DGT entaille : 367.2%<br>DGT continus : 108%<br>DGT explosion : 367.2%<br>TdR : 12s<br>Durée enchantement : 8s<br>Coût énergie : 40</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Diluc-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Diluc1.png" alt="Image">
                <p>Impitoyable</p>
            </div>
            <p>Les attaques chargées de Diluc consomment 50 % d'endurance en moins, et durent 3 s de plus.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Diluc2.png" alt="Image">
                <p>Bénédiction du phénix</p>
            </div>
            <p>Prolonge l'enchantement Pyro d'Aurore de 4 s. Diluc inflige 20 % de DGT Pyro supplémentaires pendant la durée de cet effet.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Diluc3.png" alt="Image">
                <p>Légende de l'aurore</p>
            </div>
            <p>Lorsque vous forgez une épée à deux mains, 15 % du minerai utilisé vous sera rendu.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc1.png" alt="Image">
                <p>Conviction</p>
            </div>
            <p>Tire 2 flèches consécutives à chaque tir visé. La seconde flèche inflige 20 % des DGT de la première.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc2.png" alt="Image">
                <p>Chaleur des cendres</p>
            </div>
            <p>L'ATQ de Diluc augmente de 10 % et sa VIT d'attaque de 5 % pendant 10 s lorsqu'il subit des DGT.<br>Cet effet peut être cumulé 3 fois maximum et déclenché une fois toutes les 1,5 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc3.png" alt="Image">
                <p>Feu et acier</p>
            </div>
            <p>Niveau de compétence Assaut Brûlant +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc4.png" alt="Image">
                <p>Flamme courante</p>
            </div>
            <p>Exécuter Assaut brûlant en rythme augmente considérablement les DGT infligés.<br>2 s après le lancement d'Assaut brûlant, les DGT du prochain Assaut brûlant sont augmentés de 40 % pendant 2 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc5.png" alt="Image">
                <p>Phénix, Messager de l'Aube</p>
            </div>
            <p>Niveau de compétence Aurore +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Diluc6.png" alt="Image">
                <p>L'épée des flammes brise-nuit</p>
            </div>
            <p>Confère aux 2 attaques normales dans les 6 s suivant le lancement d'Assaut brûlant un bonus de 30 % de DGT et de VIT d'attaque normale.<br>De plus, Assaut brûlant n'interrompt plus les enchaînements d'attaques normales.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Diluc2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Diluc3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Diluc.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>