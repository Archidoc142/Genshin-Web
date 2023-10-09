<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Beidou</h1>
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
            <p>Elle est la capitaine de la Flotte du Crux, un équipage renommé de Liyue. Outre ses capacités de capitaine de flotte et son immense force, beaucoup de Liyue la connaissent pour son manque de peur envers la <a href="Ningguang.php" class="lien">Megrez des Sept Étoiles de Liyue</a>, <a href="Ningguang.php" class="lien">Ningguang</a> — un trait que l'autre apprécie, mais qui s'irrite.<br><br>La capitaine du Crux qui jouit d'une grande réputation à Liyue.<br>Certains disent qu'elle peut fendre des montagnes et des mers, d'autres disent qu'elle peut invoquer le tonnerre en levant simplement sa lame. On prétend même que le plus terrifiant des monstres marins ne ferait pas le poids contre elle.<br>Ceux qui ne la connaissent pas pourraient croire qu'il s'agit d'une plaisanterie. Cependant, ceux qui ont navigué à ses côtés sont plutôt d'accord avec ces rumeurs…<br>« Si cet abominable monstre marin existe vraiment, Beidou n'en fera qu'une bouchée. »</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Beidou</p></div>
            <div class="titreP genshin"><h4>Reine des mers sans couronne</h4></div>  

            <div><img src="../img/perso/Beidou.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
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
            <h3 class="electro">★DPS hors-terrain</h3><p class="electro">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Mort-du-loup.php" class="containerArme c5" draggable="false"><img src="../img/arme/Mort-du-loup.png" alt="image" draggable="false"><p>Mort-du-loup</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Ossature du dragon.png" alt="image" draggable="false"><p>Ossature du dragon</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Illustre seigneur des mers.png" alt="image" draggable="false"><p>Illustre seigneur des mers</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Espadon (prototype).png" alt="image" draggable="false"><p>Espadon (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="electro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
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
            <h4 class="electro">Team</h4>
        </div>

        <div>
            <p class="noir">Beidou Thunder - A</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>Raiden Shogun</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Beidou.php" class="containerArme c4" draggable="false"><img src="../img/icon/Beidou.png" alt="image" draggable="false"><p>Beidou</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kujou Sara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Kujou Sara.png" alt="image" draggable="false"><p>Kujou Sara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge - S</p>
            <div class="flex infoJour">
                <a href="Yoimiya.php" class="containerArme c5" draggable="false"><img src="../img/icon/Yoimiya.png" alt="image" draggable="false"><p>Yoimiya</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Beidou.php" class="containerArme c4" draggable="false"><img src="../img/icon/Beidou.png" alt="image" draggable="false"><p>Beidou</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Insigne des Pilleurs.png" alt="image" draggable="false"><p>Insigne des Pilleurs<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Insigne de corbeau en argent.png" alt="image" draggable="false"><p>Insigne de corbeau en argent<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Insigne de corbeau en or.png" alt="image" draggable="false"><p>Insigne de corbeau en or<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Jade noctiluque.png" alt="image" draggable="false"><p>Jade noctiluque<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Prisme d'éclair.png" alt="image" draggable="false"><p>Prisme d'éclair<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Souffle de Stormterror.png" alt="image" draggable="false"><p>Souffle de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/or2.jpg" alt="image" draggable="false"><p>Enseignement de de l'Or<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/or3.jpg" alt="image" draggable="false"><p>Guide de de l'Or<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/or4.jpg" alt="image" draggable="false"><p>Philosophie de de l'Or<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Beidou1.png" alt="Image">
                <p>Conquête des mers</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 coups d'épée.<br><strong>Attaque chargée :</strong>Consomme de l'endurance de façon continue pour exécuter une succession d'entailles aussi rapides que tranchantes.<br>L'attaque chargée se termine sur un coup puissant.<br><br>Combo : 140.59 % / 140.08 % / 174.59 % / 171.02 % / 221.68 %<br>Chargée circulaire : 111 %<br>Chargée finale : 201.28 %<br>Durée max : 5 s<br>DGT durant la chute : 147.44 %<br>DGT Chute basse/élevée : 294.82 % / 368.25%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Beidou-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Beidou2.png" alt="Image">
                <p>Invocation des marées</p>
            </div>
            <p><strong>Appui simple</strong><br>Beidou concentre le pouvoir de la foudre sur son épée, et exécute un coup violent qui inflige aux ennemis en face des DGT Électro.<br><br><strong>Appui long</strong><br>Beidou brandit son arme, qu'elle utilise comme bouclier. La quantité de DGT absorbés est proportionnelle aux PV max de Beidou.<br>Lorsque vous relâchez la compétence ou que celle-ci prend fin, Beidou brandit sa longue épée et effectue une contre-attaque libérant toute l'énergie accumulée, infligeant des DGT Électro.<br>Les DGT infligés augmentent en fonction du nombre d'attaques subies par Beidou pendant la durée de la compétence. Le bonus de DGT maximum est atteint lorsque l'effet est déclenché deux fois.<br>Le bouclier a les propriétés suivantes :<br>· A 250 % d'efficacité contre les DGT Électro.<br>· Applique l'élément Électro à Beidou à l'activation.<br><br>PV du bouclier : 25.92 % PV max + 3050 PV<br>DGT de base : 218.88 %<br>Bonus DGT par coup : 288 %<br>TdR : 7,5 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Beidou-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Beidou3.png" alt="Image">
                <p>Brisure d'orage</p>
            </div>
            <p><strong>Bouclier de foudre</strong><br>· Les attaques normales et chargées, lorsqu'elles touchent, libèrent une décharge électrique qui se propage d'ennemi en ennemi et inflige des DGT Électro.<br>· Augmente la RÉS à l'interruption du personnage et réduit les DGT subis.<br><br>Une décharge peut être libérée une fois toutes les secondes.<br><br>DGT compétence : 218.88 %<br>DGT Décharge : 172.8 %<br>Réduction DGT : 34 %<br>Durée : 15 s<br>TdR : 20 s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Beidou-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Beidou1.png" alt="Image">
                <p>Châtiment</p>
            </div>
            <p>La contre-attaque d'Invocation des marées inflige le maximum de DGT lorsqu'elle est exécutée juste après une attaque.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Beidou2.png" alt="Image">
                <p>Tempête de coups de tonnerre</p>
            </div>
            <p>Invocation des marées confère pendant 10 s les effets suivants lorsque cette aptitude est exécutée avec le maximum de bonus de DGT :<br><br>· Les attaques normales et chargées infligent 15 % de DGT supplémentaires.<br>· La VIT des attaques normales et chargées augmente de 15 %.<br>· Réduit considérablement le temps de préparation des attaques chargées.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Beidou3.png" alt="Image">
                <p>Braveuse de marée</p>
            </div>
            <p>Réduit la consommation d'endurance de vos personnages dans l'équipe de 20 % lors de la nage.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou1.png" alt="Image">
                <p>Fléau des monstres marins</p>
            </div>
            <p>L'activation de Brisure d'orage confère les effets suivants :<br><br>- Génère un bouclier qui absorbe une quantité de DGT équivalant à 16 % des PV max et dure 15 s.<br>- Le bouclier est efficace à 250 % contre les DGT Électro.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou2.png" alt="Image">
                <p>Sur la mer turbulente, le tonnerre gronde</p>
            </div>
            <p>Les décharges de Brisure d'orage se propagent à 2 ennemis supplémentaires.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou3.png" alt="Image">
                <p>Invocateur de tonnerre</p>
            </div>
            <p>Niveau de compétence Invocation des marées +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou4.png" alt="Image">
                <p>Vengeance étonnante</p>
            </div>
            <p>Après avoir subi une attaque, les attaques normales de Beidou infligent 20 % de DGT Électro supplémentaires pendant 10 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou5.png" alt="Image">
                <p>Marcheur de marée écarlate</p>
            </div>
            <p>Niveau de compétence Brisure d'orage +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Beidou6.png" alt="Image">
                <p>Chancre du mal</p>
            </div>
            <p>La RÉS Électro des ennemis proches est réduite de 15% tant que Brisure d'orage est actif.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Beidou2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Beidou3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Beidou.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>