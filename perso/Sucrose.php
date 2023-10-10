<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Sucrose</h1>
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
            <p>Alchimiste spécialisée en bio-alchimie, elle sert également d'assistante à Albedo, l'alchimiste en chef de l'Ordre de Favonius.<br><br>Faisant preuve d'une curiosité sans limite envers tout ce que l'univers peut offrir, Sucrose est l'assistante d'Albedo, et travaille pour l'Ordre de Favonius, se concentrant plus particulièrement sur la bio-alchimie.<br><br>Elle espère que l'alchimie lui permettra de modifier de manière positive la vie sur terre, et de rendre ce monde encore plus varié qu'il ne l'est aujourd'hui.<br>Bien sûr, ses expériences résultent de temps en temps en des découvertes assez dérangeantes. Mais dans l'ensemble, on doit à ses recherches en la matière des résultats remarquables.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Sucrose</p></div>
            <div class="titreP genshin"><h4>Alchimiste de l'Ordre de Favonius</h4></div>  

            <div><img src="../img/perso/sucrose.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
                        <img src="../img/icon/anemo.png" alt="Image" draggable="false">
                        <p>Anémo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="build">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable="false">
            <h4 class="anemo">Build</h4>
        </div>

        <div>
            <h3 class="anemo">★Soutien</h3><p class="anemo">Élévation d'aptitude: Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Mémoires de rituels.png" alt="image" draggable="false"><p>Mémoires de rituels</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c3" draggable="false"><img src="../img/arme/Histoire des chasseurs de dragon.png" alt="image" draggable="false"><p>Histoire des chasseurs de dragon</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c3" draggable="false"><img src="../img/arme/Guide de magie.png" alt="image" draggable="false"><p>Guide de magie</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Mouvement vagabond.png" alt="image" draggable="false"><p>Mouvement vagabond</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="anemo">Stats Secondaires: Maîtrise élémentaire > ATQ % > DGT CRIT % > Taux CRIT %</p>
            <div class="flex infoJour">
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ombre de la Verte Chasseuse.png" alt="image" draggable="false"><p>Souvenir de fleur des champs</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume de flèche de la Verte Chasseuse.png" alt="image" draggable="false"><p>Plume de flèche de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Détermination de la Verte Chasseuse.png" alt="image" draggable="false"><p>Détermination de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Diadème de la Verte Chasseuse.png" alt="image" draggable="false"><p>Diadème de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Récipient de la Verte Chasseuse.png" alt="image" draggable="false"><p>Récipient de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="anemo">Team</h4>
        </div>

        <div>
            <p class="noir">Évaporation - SS</p>
            <div class="flex infoJour">
                <a href="Tartaglia.php" class="containerArme c5" draggable="false"><img src="../img/icon/Tartaglia.png" alt="image" draggable="false"><p>Tartaglia</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Évaporation - SS</p>
            <div class="flex infoJour">
                <a href="Hu Tao.php" class="containerArme c5" draggable="false"><img src="../img/icon/Hu Tao.png" alt="image" draggable="false"><p>Hu Tao</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Xingqiu.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xingqiu.png" alt="image" draggable="false"><p>Xingqiu</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Surcharge - S</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>Raiden Shogun</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kujou Sara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Kujou Sara.png" alt="image" draggable="false"><p>Kujou Sara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="materiaux">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="anemo">Matériaux d'élévation</h4>
        </div>

        <div class="flex infoJour">
            <a class="containerArme c3" draggable="false"><img src="../img/icon/mora.png" alt="image" draggable="false"><p>Mora<br>x 7 000 000</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/elevation/Leçon du héros.png" alt="image" draggable="false"><p>Leçon du héros<br>x 421</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/joyau/anemo1.png" alt="image" draggable="false"><p>Éclat de turquoise vayuda<br>x 1</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/joyau/anemo2.png" alt="image" draggable="false"><p>Fragment de turquoise vayuda<br>x 9</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/joyau/anemo3.png" alt="image" draggable="false"><p>Morceau de turquoise vayuda<br>x 9</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/joyau/anemo4.png" alt="image" draggable="false"><p>Pierre de turquoise vayuda<br>x 6</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Nectar de Fleur mensongère.png" alt="image" draggable="false"><p>Nectar de Fleur mensongère<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Nectar miroitant.png" alt="image" draggable="false"><p>Nectar miroitant<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Nectar élémentaire.png" alt="image" draggable="false"><p>Nectar élémentaire<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Chrysanthème à aubes.png" alt="image" draggable="false"><p>Chrysanthème à aubes<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Graine d’ouragan.png" alt="image" draggable="false"><p>Graine d’ouragan<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Esprit de Borée.png" alt="image" draggable="false"><p>Esprit de Borée<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Sucrose1.png" alt="Image">
                <p>Esprit du vent</p>
            </div>
            <p><strong>Attaque normale</strong><br>Enchaîne jusqu'à 4 attaques de vent qui infligent des DGT Anémo.<br><br><strong>Attaque chargée</strong><br>Consomme de l'endurance pour infliger des DGT Anémo de zone après un court délai.<br><br><strong>Attaque plongeante</strong><br>Plonge depuis les airs en concentrant ses pouvoirs Anémo, infligeant des DGT aux ennemis en chemin et des DGT Anémo de zone à l'impact.<br><br>Combo : 60.24% / 55.11% / 69.21% / 86.25%<br>Chargée : 216.29%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.62% / 280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Sucrose-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Sucrose2.png" alt="Image">
                <p>Esprit du vent : Sujet 6308</p>
            </div>
            <p>Sucrose invoque un Esprit du vent de taille réduite, qui attire les ennemis et les objets proches à lui, projetant les ennemis dans les airs et leur infligeant des DGT Anémo.<br><br>DGT compétence : 380.16%<br>TdR : 15 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Sucrose-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Sucrose3.png" alt="Image">
                <p>Esprit du vent : Isomorphe 75 Type II</p>
            </div>
            <p>Sucrose jette une concoction instable qui libère un Esprit du vent de grande taille.<br>L'Esprit attire les ennemis et les objets proches à lui, projetant les ennemis dans les airs et leur infligeant des DGT Anémo.<br><br><strong>Absorption élémentaire</strong><br>L'Esprit du vent absorbe les éléments Hydro, Pyro, Cryo et Électro avec lesquels il entre en contact ; ceux-ci lui confèrent leurs attributs, et infligent un bonus de DGT de l'élément correspondant.<br>Un seul élément peut être absorbé à la fois.<br><br>DGT Continus : 266.4%<br>Bonus DGT élémentaires : 79.2%<br>Durée : 6 s<br>TdR : 20 s<br>Coût énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Sucrose-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Sucrose1.png" alt="Image">
                <p>Permutation de catalyste</p>
            </div>
            <p>Tous les personnages de l'équipe du type élémentaire concerné (hormis Sucrose) obtiennent un bonus de 50 pts de maîtrise élémentaire pendant 8 s lorsque Sucrose déclenche une réaction de Dispersion.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Sucrose2.png" alt="Image">
                <p>Mollis Favonius</p>
            </div>
            <p>Lorsque Esprit du vent : Sujet 6308 ou Esprit du vent : Isomorphe 75 Type II touche un ennemi, tous les personnages de l'équipe (hormis Sucrose) bénéficient pendant 8 s d'un bonus de maîtrise élémentaire équivalant à 20 % de la maîtrise élémentaire de Sucrose.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Sucrose3.png" alt="Image">
                <p>Fragile découverte</p>
            </div>
            <p>10 % de chances d'obtenir le double de produits lors de la synthèse de matériaux d'amélioration de personnage ou d'arme.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose1.png" alt="Image">
                <p>Champ du néant</p>
            </div>
            <p>Confère une utilisation supplémentaire de Esprit du vent : Sujet 6308.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose2.png" alt="Image">
                <p>Bett : Forme éthérée</p>
            </div>
            <p>Prolonge la durée d'Esprit du vent : Isomorphe 75 Type II de 2 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose3.png" alt="Image">
                <p>Zéro défaut</p>
            </div>
            <p>Niveau d'aptitude Esprit du vent : Sujet 6308 +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose4.png" alt="Image">
                <p>Alchémania</p>
            </div>
            <p>Sucrose réduit le TdR d'Esprit du vent : Sujet 6308 de 1 à 7 s tous les 7 coups d'attaque normale ou chargée qu'elle inflige à un ennemi.<br>Un coup peut être compté toutes les 0,1 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose5.png" alt="Image">
                <p>Flasque standard</p>
            </div>
            <p>Niveau d'aptitude Esprit du vent : Isomorphe 75 Type II +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Sucrose6.png" alt="Image">
                <p>Théorie de l'entropie</p>
            </div>
            <p>En cas d'absorption élémentaire, Esprit du vent : Isomorphe 75 Type II confère à tous les personnages de l'équipe un bonus de DGT élémentaires de 20 % pour l'élément absorbé tant que la compétence est active.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/sucrose2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/sucrose3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/sucrose.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>