<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Ningguang</h1>
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
            <p>Elle est la Megrez des Sept Étoiles de Liyue et possède la Chambre de Jade flottante dans le ciel de Liyueé<br><br>Une riche commerçante, propriétaire d'un palais flottant dans les airs. Un sourire mystérieux adorne son visage connu de tous à Liyue, où elle se trouve toujours au cœur des rumeurs les plus folles.<br><br>En tant que Megrez des Sept Étoiles de Liyue, elle représente non seulement le pouvoir et la loi, mais également la fortune et la sagesse.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Ningguang</p></div>
            <div class="titreP genshin"><h4>Megrez de l'éclipse</h4></div>  

            <div><img src="../img/perso/Ningguang.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
                        <img src="../img/icon/geo.png" alt="Image" draggable="false">
                        <p>Géo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="geo">Build</h4>
        </div>

        <div>
            <h3 class="geo">★DPS</h3><p class="geo">Élévation d'aptitude: Attaque Normale > Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Atlas de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Atlas de la Voûte d'Azur.png" alt="image" draggable="false"><p>Atlas de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Chaînes mortelles.php" class="containerArme c5" draggable="false"><img src="../img/arme/Chaînes mortelles.png" alt="image" draggable="false"><p>Chaînes mortelles</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Mouvement vagabond.png" alt="image" draggable="false"><p>Mouvement vagabond</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Contes de Dodoco.png" alt="image" draggable="false"><p>Contes de Dodoco</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Oeil de la perception.png" alt="image" draggable="false"><p>Oeil de la perception</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Fruit du permafrost.png" alt="image" draggable="false"><p>Fruit du permafrost</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="geo">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Roche ancienne.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Roche ancienne.png" alt="image" draggable="false"><p>Fleur des crevasses</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Roche ancienne.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume des sommets escarpés.png" alt="image" draggable="false"><p>Plume des sommets escarpés</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Espoir du Gladiateur.png" alt="image" draggable="false"><p>Espoir du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ivresse du Gladiateur.png" alt="image" draggable="false"><p>Ivresse du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Rideau du Gladiateur.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Triomphe du Gladiateur.png" alt="image" draggable="false"><p>Triomphe du Gladiateur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="geo">Team</h4>
        </div>

        <div>
            <p class="noir">Xiao Core - C</p>
            <div class="flex infoJour">
                <a href="Xiao.php" class="containerArme c5" draggable="false"><img src="../img/icon/Xiao.png" alt="image" draggable="false"><p>Xiao</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Jean.php" class="containerArme c5" draggable="false"><img src="../img/icon/Jean.png" alt="image" draggable="false"><p>Jean</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Ningguang.php" class="containerArme c4" draggable="false"><img src="../img/icon/Ningguang.png" alt="image" draggable="false"><p>Ningguang</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge - B</p>
            <div class="flex infoJour">
                <a href="Ningguang.php" class="containerArme c4" draggable="false"><img src="../img/icon/Ningguang.png" alt="image" draggable="false"><p>Ningguang</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Beidou.php" class="containerArme c4" draggable="false"><img src="../img/icon/Beidou.png" alt="image" draggable="false"><p>Beidou</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Jean.php" class="containerArme c5" draggable="false"><img src="../img/icon/Jean.png" alt="image" draggable="false"><p>Jean</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="geo">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/geo1.png" alt="image" draggable="false"><p>Éclat de topaze prithiva<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/geo2.png" alt="image" draggable="false"><p>Fragment de topaze prithiva<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/geo3.png" alt="image" draggable="false"><p>Morceau de topaze prithivaa<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/geo4.png" alt="image" draggable="false"><p>Pierre de topaze prithiva<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Insigne de nouvelle recrue.png" alt="image" draggable="false"><p>Insigne de nouvelle recrue<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Insigne de sergent.png" alt="image" draggable="false"><p>Insigne de sergent<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Insigne d'officier.png" alt="image" draggable="false"><p>Insigne d'officier<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Lys verni.png" alt="image" draggable="false"><p>Lys verni<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Pilier de basalte.png" alt="image" draggable="false"><p>Pilier de basalte<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Esprit de Borée.png" alt="image" draggable="false"><p>Esprit de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/prosperite2.jpg" alt="image" draggable="false"><p>Enseignement de la Prospérité<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/prosperite3.jpg" alt="image" draggable="false"><p>Guide de la Prospérité<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/prosperite4.jpg" alt="image" draggable="false"><p>Philosophie de la Prospérité<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Ningguang1.png" alt="Image">
                <p>Géo-dispersion</p>
            </div>
            <p><strong>Attaque normale</strong><br>Tire des gemmes qui infligent des DGT Géo.<br>Ningguang obtient un Jade d'étoile à chaque fois qu'une gemme touche un ennemi.<br><br><strong>Attaque chargée</strong><br>Tire une gemme géante qui inflige des DGT Géo.<br>Si Ningguang a obtenu des Jades d'étoile, l'attaque chargée les tire tous au même moment, infligeant des DGT supplémentaires.<br><br>Combo : 50.4%*2<br>Chargée : 313.34%<br>DGT Étoile de jade : 89.28%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.62% / 280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Ningguang-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Ningguang2.png" alt="Image">
                <p>Paravent d'astrolabe</p>
            </div>
            <p>Ningguang puise dans son opulence pour créer un paravent d'or et d'obsidienne infligeant des DGT Géo de zone.<br><br><strong>Paravent d'astrolabe</strong><br>· Bloque les projectiles ennemis.<br>· Les PV du paravent sont proportionnels aux PV max de Ningguang.<br><br>Le paravent d'astrolabe est une construction Géo qui peut bloquer certaines attaques mais ne peut pas être escaladée. Il ne peut exister qu'un seul paravent à la fois.<br><br>DGT hérités : 81.6%<br>DGT Compétence : 414.72%<br>TdR : 12s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Ningguang-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Ningguang3.png" alt="Image">
                <p>Éclatement des étoiles</p>
            </div>
            <p>Ningguang fait tournoyer plusieurs jades précieux à tête chercheuse autour d'elle, qu'elle relâche tous en même temps, infligeant ainsi d'importants DGT Géo.<br>Si le paravent d'astrolabe est actif lorsque cette attaque est exécutée, il l'accompagne de tirs de jade supplémentaires.<br><br>DGT Gemme : 156.53% chacune<br>TdR : 12s<br>Coût énergie : 40</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Ningguang-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Ningguang1.png" alt="Image">
                <p>Plan de reprise</p>
            </div>
            <p>L'attaque chargée de Ningguang ne consomme pas d'endurance tant que celle-ci possède des Jades d'étoile.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Ningguang2.png" alt="Image">
                <p>Réserve stratégique</p>
            </div>
            <p>Confère pendant 10 s un bonus de DGT Géo de 12 % aux personnages qui traversent le Paravent d'astrolabe.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Ningguang3.png" alt="Image">
                <p>Corne d'abondance</p>
            </div>
            <p>Affiche la localisation des filons de minerai utilisables en forge proches sur la carte.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang1.png" alt="Image">
                <p>Fragments perforants</p>
            </div>
            <p>Les attaques normales qui touchent infligent des DGT de zone.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang2.png" alt="Image">
                <p>Effet de choc</p>
            </div>
            <p>Le TdR de Paravent d'astrolabe est annulé lorsque ce dernier est brisé.<br>Cet effet peut être déclenché une fois toutes les 6 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang3.png" alt="Image">
                <p>Alignement des étoiles</p>
            </div>
            <p>Niveau de compétence Éclatement des étoiles +3<br> Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang4.png" alt="Image">
                <p>Exquis soit le Jade, éclatant de toutes parts</p>
            </div>
            <p>Paravent d'astrolabe augmente les RÉS élémentaires des personnages à proximité de 10 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang5.png" alt="Image">
                <p>Invincible soit le Paravent d'astrolabe</p>
            </div>
            <p>Niveau de compétence Paravent d'astrolabe +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Ningguang6.png" alt="Image">
                <p>Grandeur soit les Sept Étoiles</p>
            </div>
            <p>L'activation d'Éclatement des étoiles confère 7 Jades d'étoile à Ningguang.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Ningguang2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Ningguang3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Ningguang.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>