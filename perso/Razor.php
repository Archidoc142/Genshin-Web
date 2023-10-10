<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Razor</h1>
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
            <p>Abandonné alors qu'il était enfant, Razor a été recueilli par le <a href="" class="lien">Loup du Nord</a>, Seigneur du Territoire des loups, et élevé par sa meute de loups au Territoire des Loups. Après une rencontre fortuite avec <a href="Varka.php" class="lien">Varka</a>, l'actuel Grand Maître de l'Ordre de Favonius et le Chevalier de Borée, il a lentement recommencé à s'intégrer aux humains.<br><br>À Mondstadt, il y a une rumeur qui court sur un jeune garçon. Certains disent que c'est un enfant abandonné que les loups ont adopté quand il était bébé, d'autres croient qu'il est l'incarnation d'un loup…<br><br>Aussi vifs que l'éclair et dotés de griffes acérées, les loups vivent en harmonie avec la nature sauvage.<br>À l'heure actuelle, Razor court et chasse certainement dans la forêt avec les loups à l'aide de son instinct et de son agilité surprenante.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Razor</p></div>
            <div class="titreP genshin"><h4>Enfant-loup</h4></div>  

            <div><img src="../img/perso/Razor.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="electro">★DPS</h3><p class="electro">Élévation d'aptitude: Attaque Normal > Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Mort-du-loup.php" class="containerArme c5" draggable="false"><img src="../img/arme/Mort-du-loup.png" alt="image" draggable="false"><p>Mort-du-loup</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Ode au chant du vent.php" class="containerArme c5" draggable="false"><img src="../img/arme/Ode au chant du vent.png" alt="image" draggable="false"><p>Ode au chant du vent</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Ossature du dragon.png" alt="image" draggable="false"><p>Ossature du dragon</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Espadon (prototype).png" alt="image" draggable="false"><p>Espadon (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="electro">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Flamme blême.png" alt="image" draggable="false"><p>Fleur inaltérable</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du sage docteur.png" alt="image" draggable="false"><p>Plume du sage docteur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Figé dans le temps.png" alt="image" draggable="false"><p>Figé dans le temps</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Coupe de transcendance.png" alt="image" draggable="false"><p>Coupe de transcendance</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Masque ricanant.png" alt="image" draggable="false"><p>Masque ricanant</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <div class="flex infoJour">
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Flamme blême.png" alt="image" draggable="false"><p>Fleur inaltérable</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Flamme blême.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume du sage docteur.png" alt="image" draggable="false"><p>Plume du sage docteur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Chevalerie ensanglantée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Sablier du Chevalier ensanglanté.png" alt="image" draggable="false"><p>Sablier du Chevalier ensanglanté</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Chevalerie ensanglantée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Coupe du chevalier ensanglantée.png" alt="image" draggable="false"><p>Coupe du chevalier ensanglantée</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Chevalerie ensanglantée.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Masque de fer ensanglanté.png" alt="image" draggable="false"><p>Masque de fer ensanglanté</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="electro">Team</h4>
        </div>

        <div>
            <p class="noir">Supra-conduction - B</p>
            <div class="flex infoJour">
                <a href="Razor.php" class="containerArme c4" draggable="false"><img src="../img/icon/Razor.png" alt="image" draggable="false"><p>Razor</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Sucrose.php" class="containerArme c4" draggable="false"><img src="../img/icon/Sucrose.png" alt="image" draggable="false"><p>Sucrose</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Qiqi.php" class="containerArme c5" draggable="false"><img src="../img/icon/Qiqi.png" alt="image" draggable="false"><p>Qiqi</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Vaporize - A</p>
            <div class="flex infoJour">
                <a href="Razor.php" class="containerArme c4" draggable="false"><img src="../img/icon/Razor.png" alt="image" draggable="false"><p>Razor</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Xiangling.php" class="containerArme c4" draggable="false"><img src="../img/icon/Xiangling.png" alt="image" draggable="false"><p>Xiangling</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Venti.php" class="containerArme c5" draggable="false"><img src="../img/icon/Venti.png" alt="image" draggable="false"><p>Venti</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Masque endommagé.png" alt="image" draggable="false"><p>Masque endommagé<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Masque sale.png" alt="image" draggable="false"><p>Masque sale<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Masque sinistre.png" alt="image" draggable="false"><p>Masque sinistre<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Baie à crochet.png" alt="image" draggable="false"><p>Baie à crochet<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Prisme d'éclair.png" alt="image" draggable="false"><p>Prisme d'éclair<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Griffe de Stormterror.png" alt="image" draggable="false"><p>Griffe de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Razor1.png" alt="Image">
                <p>Crocs d'acier</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 coups d'épée.<br><strong>Attaque chargée :</strong>Consomme de l'endurance de façon continue pour exécuter une succession d'attaques tournoyantes contre les ennemis proches.<br>L'attaque chargée se termine sur un coup puissant.<br><br>Combo : 171.13 % + 147.42 % + 184.32 % + 242.72 %<br>Chargée : 123.62 %<br>Chargée finale : 223.55 %<br>Durée max : 5 s<br>DGT durant la chute : 162.19 %<br>DGT Chute basse/élevée : 324,3 % / 405.07 %</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Razor-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Razor2.png" alt="Image">
                <p>Griffe et tonnerre</p>
            </div>
            <p><strong>Appui simple</strong><br>D'un coup de griffe du loup de tonnerre, il inflige des DGT Électro aux ennemis en face.<br>Razor obtient un sceau Électro lorsque cette attaque touche un ennemi, chaque sceau lui conférant un bonus de recharge d'énergie.Razor peut cumuler jusqu'à 3 sceaux Électro, chaque nouveau sceau réinitialisant leur durée.<br><br><strong>Appui long</strong><br>Amassant la puissance du tonnerre, Razor libère une explosion électrique, infligeant d'importants DGT Électro aux ennemis proches, et supprimant tous les sceaux Électro.<br>Chaque sceau ainsi supprimé est converti en énergie élémentaire.<br><br>DGT Appui simple : 358.56 %<br>DGT Appui long : 531.36 %<br>Bonus recharge d'énergie : 20 % par sceau Électro<br>Énergie récupérée : 5 pts par sceau Électro<br>Durée sceau Électro : 18 s<br>TdR Appui simple : 6 s<br>TdR Appui long : 10 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Razor-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Razor3.png" alt="Image">
                <p>Croc éclair</p>
            </div>
            <p><strong>Loup de tonnerre</strong><br>· Attaque lorsque Razor effectue une attaque normale, et inflige des DGT Électro.<br>· Augmente la VIT d'attaque ainsi que la RÉS Électro de Razor.<br>· Razor est immunisé aux DGT d'Électrocution.<br>· Attaque chargée impossible.<br>· Augmente la RÉS à l'interruption de Razor.<br><br>Le loup de tonnerre disparaît lorsque Razor est vaincu ou quitte le champ de bataille.<br>Le temps restant est converti en énergie élémentaire (10 pts maximum) lorsque Razor quitte le champ de bataille.<br><br>DGT : 288 %<br>DGT Compagnon : 43.2 % DGT attaque normale<br>Bonus VIT d'attaque : 40 %<br>Bonus RÉS Électro : 80 %<br>Durée : 15 s<br>TdR : 20 s<br>Coût Énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Razor-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Razor1.png" alt="Image">
                <p>Éveil</p>
            </div>
            <p>Réduit le TdR de Griffe et tonnerre de 18 %.<br>Croc éclair réinitialise le TdR de Griffe et tonnerre lorsqu'il est activé.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Razor2.png" alt="Image">
                <p>Famine</p>
            </div>
            <p>Razor bénéficie d'un bonus de recharge d'énergie de 30 % lorsque son énergie élémentaire est inférieure à 50 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Razor3.png" alt="Image">
                <p>Vélocité lupine</p>
            </div>
            <p>Réduit la consommation d'endurance des personnages de l'équipe de 20 % lors du sprint.<br>Ne peut pas être cumulé avec d'autres aptitudes passives aux effets identiques.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor1.png" alt="Image">
                <p>Nature du loup</p>
            </div>
            <p>Razor inflige 10 % de DGT supplémentaires pendant 8 s lorsqu'il obtient un orbe ou une particule élémentaire.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor2.png" alt="Image">
                <p>Répression</p>
            </div>
            <p>Le taux CRIT de Razor augmente de 10 % quand il attaque des ennemis dont les PV sont inférieurs à 30 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor3.png" alt="Image">
                <p>Âme du loup</p>
            </div>
            <p>Niveau de compétence Croc éclair +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor4.png" alt="Image">
                <p>Morsure</p>
            </div>
            <p>L'appui simple de Griffe et tonnerre réduit la DÉF des cibles de 15 % pendant 7 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor5.png" alt="Image">
                <p>Griffes tranchantes	</p>
            </div>
            <p>Niveau de compétence Griffe et tonnerre +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Razor6.png" alt="Image">
                <p>Lupus Fulguris</p>
            </div>
            <p>RToutes les 10 s, l'arme de Razor se charge d'énergie électrique pour infliger lors de la prochaine attaque normale des DGT Électro équivalant à 100 % de l'ATQ.<br>Chaque ennemi touché confère à Razor un sceau Électro de Griffe et tonnerre tant que Croc éclair n'est pas actif.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Razor2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Razor3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Razor.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>