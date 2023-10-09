<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Barbara</h1>
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
            <p>Elle est la diaconesse de l'Église de Favonius et une "idole" autoproclamée après avoir appris leur existence par l'intrépide aventurière Alice. Elle est également la fille de Frederica Gunnhildr et de Seamus Pegg, et la sœur cadette de Jean. Par Frederica, elle est une descendante du prestigieux Clan Gunnhildr.<br><br>À la fois diaconesse de l'Église de Favonius et star de la chanson à Mondstadt, Barbara est une jeune fille à la vie bien remplie.<br><br>Pour les habitants de Mondstadt qui sont habitués aux bardes, le concept d'idole qu'elle incarne est encore nouveau. Cependant, le moins qu'on puisse dire, c'est que Barbara est adulée par tout le monde dans le coin.<br><br>« Voilà l'esprit de liberté de Mondstadt ! » a-t-elle conclu en remerciant le public pour son soutien chaleureux.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Barbara</p></div>
            <div class="titreP genshin"><h4>Idole de Mondstadt</h4></div>  

            <div><img src="../img/perso/Barbara.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
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
            <h3 class="hydro">★Soutien</h3><p class="hydro">Élévation d'aptitude: Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c3" draggable="false"><img src="../img/arme/Histoire des chasseurs de dragon.png" alt="image" draggable="false"><p>Histoire des chasseurs de dragon</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Malice (prototype).png" alt="image" draggable="false"><p>Malice (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Code de Favonius.png" alt="image" draggable="false"><p>Code de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Vins et chants.png" alt="image" draggable="false"><p>Vins et chants</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="hydro">Stats Secondaires:  PV % > Recharge d'énergie % > PV</p>
            <div class="flex infoJour">
                <a href="../artefact/Amour chéri.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Amour chéri.png" alt="image" draggable="false"><p>Coeur lointain de la demoiselle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Amour chéri.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Pensée de la Demoiselle.png" alt="image" draggable="false"><p>Pensée de la Demoiselle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Amour chéri.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Petit matin de la Demoiselle.png" alt="image" draggable="false"><p>Petit matin de la Demoiselle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Amour chéri.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Loisir de la Demoiselle.png" alt="image" draggable="false"><p>Loisir de la Demoiselle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Amour chéri.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Beauté fugace de la Demoiselle.png" alt="image" draggable="false"><p>Beauté fugace de la Demoiselle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
        <div>
            <h3 class="hydro">★DPS (hydro)</h3><p class="hydro">Élévation d'aptitude: Attaque Normale > Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Atlas de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Atlas de la Voûte d'Azur.png" alt="image" draggable="false"><p>Atlas de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Mouvement vagabond.png" alt="image" draggable="false"><p>Mouvement vagabond</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Contes de Dodoco.png" alt="image" draggable="false"><p>Contes de Dodoco</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Atlas des terres et des mers.png" alt="image" draggable="false"><p>Atlas des terres et des mers</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="hydro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Maîtrise élémentaire</p>
            <div class="flex infoJour">
                <a href="../artefact/Réminiscence nostalgique.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Réminiscence nostalgique.png" alt="image" draggable="false"><p>Fleur d'enchevêtrement</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Réminiscence nostalgique.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Flèche de nostalgie.png" alt="image" draggable="false"><p>Flèche de nostalgie</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Réminiscence nostalgique.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Horloge de l'aube.png" alt="image" draggable="false"><p>Horloge de l'aube</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Réminiscence nostalgique.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Cœur plein d'espoir.png" alt="image" draggable="false"><p>Cœur plein d'espoir</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Réminiscence nostalgique.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Visage capricieux.png" alt="image" draggable="false"><p>Visage capricieux</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="hydro">Team</h4>
        </div>

        <div>
            <p class="noir">Vaporize - B</p>
            <div class="flex infoJour">
                <a href="Klee.php" class="containerArme c5" draggable="false"><img src="../img/icon/Klee.png" alt="image" draggable="false"><p>Klee</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Barbara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Barbara.png" alt="image" draggable="false"><p>Barbara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge - S</p>
            <div class="flex infoJour">
                <a href="Ayaka.php" class="containerArme c5" draggable="false"><img src="../img/icon/Ayaka.png" alt="image" draggable="false"><p>Ayaka</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Ganyu.php" class="containerArme c5" draggable="false"><img src="../img/icon/Ganyu.png" alt="image" draggable="false"><p>Ganyu</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Venti.php" class="containerArme c5" draggable="false"><img src="../img/icon/Venti.png" alt="image" draggable="false"><p>Venti</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Barbara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Barbara.png" alt="image" draggable="false"><p>Barbara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Parchemin divinatoire.png" alt="image" draggable="false"><p>Parchemin divinatoire<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Parchemin sigillé.png" alt="image" draggable="false"><p>Parchemin sigillé<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Parchemin maudit.png" alt="image" draggable="false"><p>Parchemin maudit<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Champignon anémophile.png" alt="image" draggable="false"><p>Champignon anémophile<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Coeur d'eau pure.png" alt="image" draggable="false"><p>Coeur d'eau pure<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Vertèbre de Borée.png" alt="image" draggable="false"><p>Vertèbre de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/liberte2.jpg" alt="image" draggable="false"><p>Enseignement de la Liberté<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/liberte3.jpg" alt="image" draggable="false"><p>Guide de la Liberté<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/liberte4.jpg" alt="image" draggable="false"><p>Philosophie de la Liberté<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Barbara1.png" alt="Image">
                <p>Murmure de l'eau</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 attaques, infligeant des DGT Hydro.<br><br><strong>Attaque chargée :</strong>Après un court délai, inflige des DGT Hydro de zone.<br><br>Combo : 68.11% / 63.94% / 73.87% / 99.36%<br>Chargée : 299.23%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.63% / 280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Barbara-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Barbara2.png" alt="Image">
                <p>C'est parti pour le show</p>
            </div>
            <p>Inflige des DGT Hydro et applique l'état Hydro aux ennemis proches. Les attaques normales de Barbara soignent les membres de l'équipe, et son attaque chargée soigne 4 fois plus. Les alliés récupèrent des PV à intervalles réguliers.<br><br>Soins attaque : 1.35% PV Max + 158.9 PV<br>Soins continus : 7.2% PV Max + 847.47 PV<br>Dégâts gouttelettes : 105.12%<br>Durée : 15s<br>TdR : 32s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Barbara-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Barbara3.png" alt="Image">
                <p>Miracle brillant</p>
            </div>
            <p>Soigne considérablement les alliés.<br><br>Soins : 31.68% PV Max + 3727 PV<br>TdR : 20s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Barbara-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Barbara1.png" alt="Image">
                <p>Splendide saison</p>
            </div>
            <p>Les personnages situés dans le cercle de mélodie de C'est parti pour le show consomment 12% d'énergie élémentaire en moins.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Barbara2.png" alt="Image">
                <p>Bis repetita</p>
            </div>
            <p>Ramasser un orbe ou une particule élémentaire augmente la durée de C'est parti pour le show d'une seconde, jusqu'à un maximum de 5s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Barbara3.png" alt="Image">
                <p>De tout mon coeur</p>
            </div>
            <p>Lorsque vous cuisinez un plat de soin, il y a 12% de chance d'obtenir un plat supplémentaire.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara1.png" alt="Image">
                <p>Joyeuse ballade</p>
            </div>
            <p>Barbara récupère 1 énergie élémentaire toutes les 10 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara2.png" alt="Image">
                <p>Éclat de vitalité</p>
            </div>
            <p>Réduit le TdR de C'est parti pour le show de 15 %.<br>Confère un bonus de DGT Hydro au personnage déployé tant que la compétence est active.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara3.png" alt="Image">
                <p>Étoile du lendemain</p>
            </div>
            <p>Niveau de compétence Etoile du lendemain +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara4.png" alt="Image">
                <p>L'effort est la meilleure des magies</p>
            </div>
            <p>À chaque ennemi touché par une attaque chargée, Barbara récupère 1 pt d'énergie élémentaire.<br>5 pts d'énergie maximum peuvent être régénérés après chaque attaque chargée.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara5.png" alt="Image">
                <p>Lien innocent</p>
            </div>
            <p>Niveau de compétence C'est parti pour le show +3.<br>Niveaux max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Barbara6.png" alt="Image">
                <p>Toujours le meilleur pour vous</p>
            </div>
            <p>Si Barbara fait partie de l'équipe mais n'est pas déployée, et qu'un de vos personnages dans l'équipe est vaincu :<br>- Barbara le réanime immédiatement.<br>- Les PV de ce personnage sont restaurés à 100 %.<br>Cet effet peut être déclenché une fois toutes les 15 min.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Barbara2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Barbara3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Barbara.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>