<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Amber</h1>
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
            <p>Une jeune fille pleine d'énergie. Elle est la seule et unique Éclaireuse de l'Ordre de Favonius.<br><br>Une jeune fille pleine de vie et l'unique éclaireuse de l'Ordre de Favonius. Avec trois titres consécutifs de championne de planement aérien de Mondstadt, cette discipline n'a plus de secrets pour elle. En tant qu'étoile montante de l'Ordre de Favonius, Amber brille toujours en première ligne !</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Amber</p></div>
            <div class="titreP genshin"><h4>Éclaireuse de l'Ordre de Favonius</h4></div>  

            <div><img src="../img/perso/Amber.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="pyro">★Soutien</h3><p class="pyro">Élévation d'aptitude: Déchaînement Élémentaire >  Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Ultime soupir.php" class="containerArme c5" draggable="false"><img src="../img/arme/Ultime soupir.png" alt="image" draggable="false"><p>Ultime soupir</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Arc de Favonius.png" alt="image" draggable="false"><p>Arc de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Arc rituel.png" alt="image" draggable="false"><p>Arc rituel</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="pyro">Stats Secondaires:  Recharge d'énergie % > Taux CRIT % > DGT CRIT % > ATQ %</p>
            <div class="flex infoJour">
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ancien rituel royal.png" alt="image" draggable="false"><p>Moment du jugement</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du Noble.png" alt="image" draggable="false"><p>Plume du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Montre de poche du Noble.png" alt="image" draggable="false"><p>Montre de poche du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Urne d'argent du Noble.png" alt="image" draggable="false"><p>Urne d'argent du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ancien rituel royal.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Masque du Noble.png" alt="image" draggable="false"><p>Masque du Noble</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <h3 class="pyro">★DPS</h3><p class="pyro">Élévation d'aptitude: Attaque Normal > Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Arc d'Amos.php" class="containerArme c5" draggable="false"><img src="../img/arme/Arc d'Amos.png" alt="image" draggable="false"><p>Arc d'Amos</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Pulsation du tonnerre.php" class="containerArme c5" draggable="false"><img src="../img/arme/Pulsation du tonnerre.png" alt="image" draggable="false"><p>Pulsation du tonnerre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lune paisible (prototype).png" alt="image" draggable="false"><p>Lune paisible (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="pyro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Maîtise élémentaire</p>
            <div class="flex infoJour">
                <a href="../artefact/Bande Vagabonde.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Bande Vagabonde.png" alt="image" draggable="false"><p>Aube de l'orchestre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Bande Vagabonde.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume de flèche du lyriste.png" alt="image" draggable="false"><p>Plume de flèche du lyriste</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Bande Vagabonde.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Tombée du rideau.png" alt="image" draggable="false"><p>Tombée du rideau</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Bande Vagabonde.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Gourde à cordes du ménestrel.png" alt="image" draggable="false"><p>Gourde à cordes du ménestrel</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Bande Vagabonde.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Haut-de-forme du chef d'orchestre.png" alt="image" draggable="false"><p>Haut-de-forme du chef d'orchestre</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
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
            <h4 class="pyro">Team</h4>
        </div>

        <div>
            <p class="noir">Évaporation - C</p>
            <div class="flex infoJour">
                <a href="Amber.php" class="containerArme c4" draggable="false"><img src="../img/icon/Amber.png" alt="image" draggable="false"><p>Amber</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Xingqiu.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xingqiu.png" alt="image" draggable="false"><p>Xingqiu</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Fonte - A</p>
            <div class="flex infoJour">
                <a href="Ayaka.php" class="containerArme c5" draggable="false"><img src="../img/icon/Ayaka.png" alt="image" draggable="false"><p>Ayaka</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Amber.php" class="containerArme c4" draggable="false"><img src="../img/icon/Amber.png" alt="image" draggable="false"><p>Amber</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Électrocution</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>Raiden Shogun</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Amber.php" class="containerArme c4" draggable="false"><img src="../img/icon/Amber.png" alt="image" draggable="false"><p>Amber</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche robuste.png" alt="image" draggable="false"><p>Pointe de flèche robuste<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche aiguisée.png" alt="image" draggable="false"><p>Pointe de flèche aiguisée<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Pointe de flèche usée.png" alt="image" draggable="false"><p>Pointe de flèche usée<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Herbe à lampe.png" alt="image" draggable="false"><p>Herbe à lampe<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Graine de feu.png" alt="image" draggable="false"><p>Graine de feu<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Souffle de Stormterror.png" alt="image" draggable="false"><p>Souffle de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Amber1.png" alt="Image">
                <p>Archerie Revisitée</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 tirs consécutifs.<br><strong>Attaque chargée :</strong>Effectue un tir visé plus précis infligeant davantage de DGT.<br>Lors de la visée, la flèche se charge en élément Pyro, infligeant de considérable.<br><br>Combo : 71.4% / 71.1% / 91.8% / 93.5% / 117.3%<br>Tir visé : 86.7%<br>Tir Chargé : 223.2%<br>DGT durant la chute : 112.34%<br>DGT Chute basse/élevée : 224.62%/280.57%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Amber-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Amber2.png" alt="Image">
                <p>Poupée explosive</p>
            </div>
            <p><strong>Baron Lapinou</strong><br>· Le Baron nargue les ennemis proches et attire leur attention.<br>· Ses PV sont proportionnels aux PV max d'Amber.<br>· Le Baron explose à la fin ou s'il est détruit entre temps, et inflige des DGT Pyro de zone.<br><br><strong>Appui long</strong><br>Ajuste la direction du jet.<br>Ajuste la portée du jet.<br><br>PV hérités : 74.45%<br>DGT Explosion : 221.76%<br>TdR : 15s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Amber-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Amber3.png" alt="Image">
                <p>Pluie de flèches</p>
            </div>
            <p>Tire une pluie de flèches qui inflige des DGT Pyro continus.<br><br>DGT Pluie de flèches : 50.54%<br>DGT totaux Pluie de flèches : 909.79%<br>Durée : 2s<br>TdR : 12s<br>Coût énergie : 40</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Amber-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Amber1.png" alt="Image">
                <p>Dans le mille !</p>
            </div>
            <p>Augmente le taux CRIT de Pluie de flèches de 10 % et la zone d'effet de 30 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Amber2.png" alt="Image">
                <p>Tir précis</p>
            </div>
            <p>L'ATQ augmente de 15 % pendant 10 s lorsque le tir visé touche un point faible.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Amber3.png" alt="Image">
                <p>Championne de planage</p>
            </div>
            <p>Diminue la consommation d'endurance de vos personnages dans l'équipe de 20 % lors du planage.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber1.png" alt="Image">
                <p>Une flèche suffit !</p>
            </div>
            <p>Tire 2 flèches consécutives à chaque tir visé. La seconde flèche inflige 20 % des DGT de la première.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber2.png" alt="Image">
                <p>Tout est prêt</p>
            </div>
            <p>Une toute nouvelle modification du Baron Lapinou ! Un tir visé à pleine charge aux pieds du Baron Lapinou, et ce dernier explose directement...<br>Ce type d'explosion inflige 200 % de DGT supplémentaires.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber3.png" alt="Image">
                <p>Ça brûle !</p>
            </div>
            <p>Niveau de compétence Pluie de flèches +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber4.png" alt="Image">
                <p>Ce n'est pas n'importe quelle poupée...</p>
            </div>
            <p>Diminue le TdR de Poupée explosive de 20 % et permet de l'utiliser 1 fois supplémentaire.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber5.png" alt="Image">
                <p>Baron Lapinou !</p>
            </div>
            <p>Niveau de compétence Poupée explosive +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Amber6.png" alt="Image">
                <p>Feu sauvage</p>
            </div>
            <p>Pluie de flèches augmente la VIT de déplacement de tous les personnages de l'équipe de 15 % et leur ATQ de 15 % pendant 10 s.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Amber2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Amber3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Amber.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>