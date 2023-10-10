<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Qiqi</h1>
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
            <p>Ressuscitée en zombie par les Adeptes, elle s'est retrouvée sous la garde de Baizhu et travaille maintenant au Cottage Bubu dans le Port de Liyue.<br><br> Cueilleuse et apprentie au Cottage Bubu.<br>Suite à l'intervention des Adeptes, Qiqi est un zombie qui doit se donner ses propres ordres pour agir.<br><br>En raison de sa mémoire défaillante, Qiqi porte toujours sur elle un carnet, sur lequel elle note toutes sortes de choses auxquelles faire attention.<br>Il n'est pas exagéré de dire que le carnet est devenu un genre de guide à l'usage des nuls pour tous les aspects possibles et imaginables de la vie…</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Qiqi</p></div>
            <div class="titreP genshin"><h4>Renaissance gelée</h4></div>  

            <div><img src="../img/perso/Qiqi.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/five_stars2.png" alt="Image" draggable="false">
                </div>
                <div class="spe">
                    <p><strong>Arme</strong></p>
                    <div class="flex">
                        <img src="../img/icon/sword.png" alt="Image" draggable="false">
                        <p>Épée</p>
                    </div>
                </div>
                <div class="spe">
                    <p><strong>Élément</strong></p>
                    <div class="flex">
                        <img src="../img/icon/cryo.png" alt="Image" draggable="false">
                        <p>Cryo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="cryo">Build</h4>
        </div>
        <div>
            <h3 class="cryo">★Soutien</h3><p class="cryo">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Épée rituelle.png" alt="image" draggable="false"><p>Épée rituelle</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Flûte.png" alt="image" draggable="false"><p>Flûte</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Épée de Favonius.png" alt="image" draggable="false"><p>Épée de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Croc suppurant.png" alt="image" draggable="false"><p>Croc suppurant</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lame kageuchi d'Amenoma.png" alt="image" draggable="false"><p>Lame kageuchi d'Amenoma</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="cryo">Stats Secondaires: ATQ % > Recharge d'énergie % > ATQ</p>
            <div class="flex infoJour">
                <a href="../artefact/Ténacité du Millelithe.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ténacité du Millelithe.png" alt="image" draggable="false"><p>Fleur honorifique</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ténacité du Millelithe.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume de guerre du Commandant.png" alt="image" draggable="false"><p>Plume de guerre du Commandant</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ténacité du Millelithe.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Cadran solaire doré.png" alt="image" draggable="false"><p>Cadran solaire doré</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ténacité du Millelithe.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Coupe du serment.png" alt="image" draggable="false"><p>Coupe du serment</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ténacité du Millelithe.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ancien heaume de Général.png" alt="image" draggable="false"><p>Ancien heaume de Général</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <div class="flex infoJour">
                <a href="../artefact/Palourde aux teintes océaniques.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Palourde aux teintes océaniques.png" alt="image" draggable="false"><p>Fleur de teinte marine</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Palourde aux teintes océaniques.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du palais des profondeurs.png" alt="image" draggable="false"><p>Plume du palais des profondeurs</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Palourde aux teintes océaniques.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Pétoncle de séparation.png" alt="image" draggable="false"><p>Pétoncle de séparation</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Palourde aux teintes océaniques.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Écrin de perle.png" alt="image" draggable="false"><p>Écrin de perle</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Palourde aux teintes océaniques.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Couronne de Watatsumi.png" alt="image" draggable="false"><p>Couronne de Watatsumi</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="cryo">Team</h4>
        </div>

        <div>
            <p class="noir">Supra-conduction - B</p>
            <div class="flex infoJour">
                <a href="Qiqi.php" class="containerArme c5" draggable="false"><img src="../img/icon/Qiqi.png" alt="image" draggable="false"><p>Qiqi</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Ningguang.php" class="containerArme c4" draggable="false"><img src="../img/icon/Ningguang.png" alt="image" draggable="false"><p>Ningguang</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="cryo">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/cryo1.png" alt="image" draggable="false"><p>Éclat de jade shivada<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/cryo2.png" alt="image" draggable="false"><p>Fragment de jade shivada<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/cryo3.png" alt="image" draggable="false"><p>Morceau de jade shivada<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/cryo4.png" alt="image" draggable="false"><p>Pierre de jade shivada<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Parchemin divinatoire.png" alt="image" draggable="false"><p>Parchemin divinatoire<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Parchemin sigillé.png" alt="image" draggable="false"><p>Parchemin sigillé<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Parchemin maudit.png" alt="image" draggable="false"><p>Parchemin maudit<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Muguet bleu.png" alt="image" draggable="false"><p>Muguet bleu<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Duramen de glace.png" alt="image" draggable="false"><p>Duramen de glace<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Queue de Borée.png" alt="image" draggable="false"><p>Queue de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Qiqi1.png" alt="Image">
                <p>Escrime ancienne des nuages</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 coups d'épée.
            <strong>Attaque chargée :</strong>Avance en enchaînant 2 coups d'épée.<br><br>Combo : 74.63% / 76.84% / 47.77%*2 / 48.79%*2 / 124.61%<br>Chargée : 127.16% / 127.16%<br>DGT durant la chute : 126.38%<br>DGT Chute basse/élevée : 252.7% / 315.64%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Qiqi-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Qiqi2.png" alt="Image">
                <p>Arcane d'Adepte : Héraut de givre</p>
            </div>
            <p>Utilise un talisman infusé de glace et de sang pour invoquer un Héraut de givre, infligeant des DGT Cryo aux ennemis proches.<br><br><strong>Héraut de givre</strong><br>· Les attaques normales et chargées de Qiqi restaurent les PV de vos personnages dans l'équipe ainsi que des alliés proches lorsqu'elles touchent. La quantité de PV restaurée est proportionnelle à l'ATQ de Qiqi.<br>· Régénère les PV du personnage déployé à intervalles réguliers.<br>· Le héraut suit le personnage déployé et inflige des DGT Cryo aux ennemis sur sa route.<br><br>DGT compétence : 172.80%<br>Soins équipe : 19.01% ATQ + 148.31 PV<br>Soins continus : 125.28% ATQ + 991.28 PV<br>DGT Héraut de givre : 64.80%<br>Durée : 15s<br>TdR : 30s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Qiqi-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Qiqi3.png" alt="Image">
                <p>Arcane d'Adepte : Talisman sacré</p>
            </div>
            <p>Qiqi libère le pouvoir d'Adepte scellé en elle et marque les ennemis proches d'un talisman qui leur inflige des DGT Cryo.<br><br><strong>Talisman</strong><br>Les personnages récupèrent des PV équivalant aux DGT subis par les ennemis marqués.<br><br>DGT Compétence : 512.64%<br>Soins : 162% ATQ + 1270 PV<br>Durée : 15s<br>TdR : 20s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Qiqi-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Qiqi1.png" alt="Image">
                <p>Survie en milieu hostile</p>
            </div>
            <p>Lorsqu'un personnage sous l'effet d'Arcane d'Adepte : Héraut de givre déclenche une réaction élémentaire, il gagne un bonus de soins reçus de 20 % pendant 8 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Qiqi2.png" alt="Image">
                <p>Ouverture des arcanes</p>
            </div>
            <p>Les attaques normales et chargées de Qiqi ont 50 % de chances de marquer l'ennemi touché d'un talisman pendant 6 s. Cet effet peut être déclenché une fois toutes les 30 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Qiqi3.png" alt="Image">
                <p>Souvenir d'une vie lointaine</p>
            </div>
            <p>Affiche l'emplacement des produits de Liyue sur la mini-carte.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi1.png" alt="Image">
                <p>Ascèse du givre</p>
            </div>
            <p>Qiqi récupère 2 pts d'énergie élémentaire à chaque fois que son Héraut de givre touche un ennemi marqué par un talisman.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi2.png" alt="Image">
                <p>Gelé jusqu'a l'os</p>
            </div>
            <p>Les attaques normales et chargées de Qiqi infligent 15 % de DGT supplémentaires contre les ennemis affectés par Cryo.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi3.png" alt="Image">
                <p>Louange vers le ciel</p>
            </div>
            <p>Niveau d'aptitude Arcane d'Adepte : Talisman sacré +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi4.png" alt="Image">
                <p>Répression divine</p>
            </div>
            <p>L'ATQ des cibles marquées par un talisman est réduite de 20 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi5.png" alt="Image">
                <p>Eclosion du lotus rouge</p>
            </div>
            <p>Niveau d'aptitude Arcane d'Adepte : Héraut de givre +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Qiqi6.png" alt="Image">
                <p>Symbole de la renaissance</p>
            </div>
            <p>L'activation d'Arcane d'Adepte : Talisman sacré réanime tous les personnages de l'équipe à proximité et restaure 50 % de leurs PV.<br>Cet effet peut être déclenché une fois toutes les 15 min.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Qiqi2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Qiqi3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Qiqi.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>