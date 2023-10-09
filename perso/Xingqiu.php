<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Xingqiu</h1>
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
            <p>Il est le deuxième fils du directeur de la Guilde des marchands de Feiyun, un groupe influent de Liyue, et est également un praticien autoproclamé des arts du clan Guhua.<br><br>Deuxième fils d'une riche famille à la tête de la Guilde des Marchands de Feiyun, l'aimable Xingqiu fait dès son plus jeune âge montre d'une assiduité prononcée dans les études.<br>Mais ne vous y trompez pas : Xingqiu a aussi un côté beaucoup plus téméraire</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Xingqiu</p></div>
            <div class="titreP genshin"><h4>Jeune Galant</h4></div>  

            <div><img src="../img/perso/Xingqiu.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

            <div class="box flex">
                <div class="spe">
                    <p><strong>Qualité</strong></p>
                    <img src="../img/icon/four_stars2.png" alt="Image" draggable="false">
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
            <h3 class="hydro">★DPS hors-terrain</h3><p class="hydro">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Épée rituelle.png" alt="image" draggable="false"><p>Épée rituelle</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Lame de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Lame de la Voûte d'Azur.png" alt="image" draggable="false"><p>Lame de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Épée de Favonius.png" alt="image" draggable="false"><p>Épée de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Croc suppurant.png" alt="image" draggable="false"><p>Croc suppurant</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lame kageuchi d'Amenoma.png" alt="image" draggable="false"><p>Lame kageuchi d'Amenoma</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="hydro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Emblème du destin brisé.png" alt="image" draggable="false"><p>Tsuba magnifique</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume brisée.png" alt="image" draggable="false"><p>Plume brisée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Inro de la tempête.png" alt="image" draggable="false"><p>Inro de la tempête</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Gourde pourpre.png" alt="image" draggable="false"><p>Gourde pourpre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Emblème du destin brisé.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Kabuto orné.png" alt="image" draggable="false"><p>Kabuto orné</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <div class="flex infoJour">
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ancien rituel royal.png" alt="image" draggable="false"><p>Fleur du noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du Noble.png" alt="image" draggable="false"><p>Plume du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Âme des profondeurs.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Boussole en bronze.png" alt="image" draggable="false"><p>Boussole en bronze</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Âme des profondeurs.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Calice des profondeurs.png" alt="image" draggable="false"><p>Calice des profondeurs</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Âme des profondeurs.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Calot taché de vin.png" alt="image" draggable="false"><p>Calot taché de vin</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <div class="flex infoJour">
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ancien rituel royal.png" alt="image" draggable="false"><p>Fleur du noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du Noble.png" alt="image" draggable="false"><p>Plume du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Montre de poche du Noble.png" alt="image" draggable="false"><p>Montre de poche du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Urne d'argent du Noble.png" alt="image" draggable="false"><p>Urne d'argent du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Masque du Noble.png" alt="image" draggable="false"><p>Masque du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="hydro">Team</h4>
        </div>

        <div>
            <p class="noir">Vaporize - S</p>
            <div class="flex infoJour">
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Xingqiu.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xingqiu.png" alt="image" draggable="false"><p>Xingqiu</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Dream Team - SS</p>
            <div class="flex infoJour">
                <a href="Hu Tao.php" class="containerArme c5" draggable="false"><img src="../img/icon/Hu Tao.png" alt="image" draggable="false"><p>Hu Tao</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xingqiu.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xingqiu.png" alt="image" draggable="false"><p>Xingqiu</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Masque endommagé.png" alt="image" draggable="false"><p>Masque endommagé<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Masque sale.png" alt="image" draggable="false"><p>Masque sale<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Masque sinistre.png" alt="image" draggable="false"><p>Masque sinistre<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Fleur de soie.png" alt="image" draggable="false"><p>Fleur de soie<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Coeur d'eau pure.png" alt="image" draggable="false"><p>Coeur d'eau pure<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Queue de Borée.png" alt="image" draggable="false"><p>Queue de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/elevation/Couronne de la sagesse.png" alt="image" draggable="false"><p>Couronne de la sagesse<br>x 3</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/aptitude/or2.jpg" alt="image" draggable="false"><p>Enseignement de l'Or<br>x 9</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/aptitude/or3.jpg" alt="image" draggable="false"><p>Guide de l'Or<br>x 63</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/aptitude/or4.jpg" alt="image" draggable="false"><p>Philosophie de l'Or<br>x 114</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
        </div>
    </div>

    <div id="stat">
        <h2 class="title">Aptitude</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xingqiu1.png" alt="Image">
                <p>Style Guhua</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 coups d'épée.<br><br><strong>Attaque chargée :</strong>Avance en enchaînant 2 coups d'épée.<br><br>Combo : 92.14% / 94.18% / 56.44%*2 / 110.67% / 70.89%*2<br>Chargée : 93.5% / 111.01%<br>DGT durant la chute : 126.38%<br>DGT Chute basse/élevée : 252.7% / 315.64%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xingqiu-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xingqiu2.png" alt="Image">
                <p>Épée Guhua : Pluie Battante</p>
            </div>
            <p>Effectue deux coups d'épées infligeant des dégâts Hydro. Crée des Épées de pluie qui orbitent autour du personnage. Elles réduisent les dégâts reçus et appliquent l'état Hydro au personnage.<br><br>DGT compétence : 302.4% + 344.16%<br>Réduction DGT : 28%<br>TdR appui long : 16s<br>Durée : 15s<br>TdR : 21s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xingqiu-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Xingqiu3.png" alt="Image">
                <p>Épée Guhua : pluie et arc-en-ciel</p>
            </div>
            <p>Les attaques normales envoient des projectiles infligeant des DGT Hydro.<br><br>DGT Pluie d'épée : 97.69%<br>Durée : 15s<br>TdR : 20s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Xinqiu-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xingqiu1.png" alt="Image">
                <p>Clé d'invocation d'eau</p>
            </div>
            <p>Lorsqu'une Épée de pluie est brisée ou qu'elle expire, le personnage actuel récupère une quantité de PV équivalant à 6% des PV max de Xingqiu.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xingqiu2.png" alt="Image">
                <p>Lames et gouttes de pluie</p>
            </div>
            <p>Xingqiu gagne un bonus de 20% de DGT Hydro.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Xingqiu3.png" alt="Image">
                <p>Illumination</p>
            </div>
            <p>Vous avez 20% de chance de récupérer des matériaux de synthèse lors de la synthèse de matériaux d'aptitude.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu1.png" alt="Image">
                <p>Le parfum est demeuré</p>
            </div>
            <p>Augmente le nombre maximum d'Épée de pluie de 1.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu2.png" alt="Image">
                <p>Arc-en-ciel sur le ciel d'azur</p>
            </div>
            <p>Prolonge la durée d'Épée Guhua - Pluie et arc en ciel de 3 s. De plus, les épées de pluie réduisent la RÉS Hydro des ennemis qu'elles touchent de 15 % pendant 4 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu3.png" alt="Image">
                <p>Tisseuse de vers</p>
            </div>
            <p>Niveau de compétence Épée Guhua - Pluie battante +3.<br>Niveau Max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu4.png" alt="Image">
                <p>Conquérant du dragon</p>
            </div>
            <p>Pendant la durée d'Épée Guhua - Pluie et arc-en-ciel, les DGT infligés par l'Épée Guhua - Pluie battante augmentent de 50 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu5.png" alt="Image">
                <p>Embrassement de pluie</p>
            </div>
            <p>Niveau de compétence Épée Guhua - Pluie et arc-en-ciel +3.<br>Niveau Max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Xingqiu6.png" alt="Image">
                <p>Embrassement de pluie</p>
            </div>
            <p>Les DGT du déluge d'épées d'Épée Guhua - Pluie et arc-en-ciel augmentent considérablement toutes les 2 pluies d'épées. Xingqiu récupère de plus 3 pts d'énergie élémentaire.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Xingqiu2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Xingqiu3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Xingqiu.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>