<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Noëlle</h1>
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
            <p>Bien qu'elle ne soit pas encore chevalier, elle cherche un jour à rejoindre l'Ordre de Favonius en servant d'abord comme servante dévouée.<br><br>Comme beaucoup d'autres jeunes à Mondstadt, Noëlle rêve de revêtir un jour la fameuse armure des Chevaliers de l'Ordre.<br><br>Bien qu'elle ne soit pas encore un vrai chevalier, Noëlle travaille comme servante à l'Ordre de Favonius, et ne rate pas une occasion d'y apprendre tous les aspects de la chevalerie.<br>Croyant fermement que rien n'est impossible à celui qui s'investit dans son travail, Noëlle est convaincue qu'un jour viendra où elle pourra à son tour porter l'armure de l'Ordre, symbole de gloire.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Noëlle</p></div>
            <div class="titreP genshin"><h4>Servante de l'Ordre de Favonius</h4></div>  

            <div><img src="../img/perso/Noelle.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="geo">★Soutien</h3><p class="geo">Élévation d'aptitude: Attaque Normale > Déchaînement Élémentaire > Compétence Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Ombre immaculée.png" alt="image" draggable="false"><p>Ombre immaculée</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Espadon de Favonius.png" alt="image" draggable="false"><p>Espadon de Favonius</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Espadon rituel.png" alt="image" draggable="false"><p>Espadon rituel</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <p class="noir">Artéfacts</p>
            <p class="geo">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Coquille des rêves opulents.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Coquille des rêves opulents.png" alt="image" draggable="false"><p>Période de floraison</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Coquille des rêves opulents.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume d'opulence.png" alt="image" draggable="false"><p>Plume d'opulence</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Coquille des rêves opulents.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Chant de vie.png" alt="image" draggable="false"><p>Chant de vie</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Coquille des rêves opulents.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Calebasse d'éveil.png" alt="image" draggable="false"><p>Calebasse d'éveil</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Coquille des rêves opulents.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Chapeau squelettique.png" alt="image" draggable="false"><p>Chapeau squelettique</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="geo">Team</h4>
        </div>

        <div>
            <p class="noir">Mono Géo - SS</p>
            <div class="flex infoJour">
                <a href="Arataki Itto.php" class="containerArme c5" draggable="false"><img src="../img/icon/Arataki Itto.png" alt="image" draggable="false"><p>Arataki Itto</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Noëlle.php" class="containerArme c4" draggable="false"><img src="../img/icon/Noelle.png" alt="image" draggable="false"><p>Noëlle</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Gorou.php" class="containerArme c4" draggable="false"><img src="../img/icon/Gorou.png" alt="image" draggable="false"><p>Gorou</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Masque endommagé.png" alt="image" draggable="false"><p>Masque endommagé<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Masque sale.png" alt="image" draggable="false"><p>Masque sale<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Masque sinistre.png" alt="image" draggable="false"><p>Masque sinistre<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Tombaie.png" alt="image" draggable="false"><p>Tombaie<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Pilier de basalte.png" alt="image" draggable="false"><p>Pilier de basalte<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Noelle1.png" alt="Image">
                <p>Escrime de Favonius - Servanten</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 coups d'épée.<br><strong>Attaque chargée :</strong>Consomme de l'endurance de façon continue pour exécuter une succession d'attaques tournoyantes contre les ennemis proches.<br>L'attaque chargée se termine sur un coup puissant.<br><br>Combo : 156.4% / 145.01% / 170.51% / 224.23%<br>Chargée circulaire : 100.3%<br>Chargée finale : 178.84%<br>Durée max : 5s<br>DGT durant la chute : 147.44%<br>DGT Chute basse/élevée : 294.82% / 368.25%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Noelle-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Noelle2.png" alt="Image">
                <p>Armure de cœur</p>
            </div>
            <p>Invoque une armure de roche qui inflige des DGT Géo aux ennemis proches et génère un bouclier absorbant une quantité de DGT proportionnelle à la DÉF de Noëlle.<br><br>L'armure de roche a les propriétés suivantes :<br>· Les attaques normales et chargées de Noëlle ont une chance de restaurer les PV de tous les personnages de l'équipe lorsqu'elles touchent un ennemi.<br>· L'armure est efficace à 150 % contre les DGT élémentaires et physiques.<br><br>DGT compétence : 216% DÉF<br>PV du bouclier : 288% DÉF + 1,693 PV<br>Soins : 38.3% DÉF + 225 pv<br>Chance de soins : 59%<br>Durée : 12s<br>TdR : 24s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Noelle-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Noelle3.png" alt="Image">
                <p>Grand ménage</p>
            </div>
            <p>Concentrant le pouvoir de la roche sur son arme, Noëlle exécute une puissante attaque circulaire qui inflige des DGT Géo aux ennemis proches.<br>Noëlle bénéficie ensuite des effets suivants :<br>- Portée d'attaque augmentée.<br>- DGT d'attaque convertis en DGT Géo ne pouvant pas être enchantés.<br>- Bonus d'ATQ proportionnel à la DÉF de Noëlle.<br><br>DGT : 120.96%<br>DGT Compétence : 167.04%<br>Bonus ATQ : 72% DÉF<br>Durée : 15s<br>TdR : 15s<br>Coût énergie : 60</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Noelle-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Noelle1.png" alt="Image">
                <p>Dévotion ultime</p>
            </div>
            <p>Lorsque Noëlle fait partie de l'équipe et n'est pas déployée, l'effet suivant se déclenche automatiquement si les PV du personnage déployé sont inférieurs à 30 % :<br><br>Confère un bouclier au personnage déployé pouvant absorber des DGT équivalant à 400 % de la DÉF de Noëlle pendant 20 s.<br><br>- Le bouclier est efficace à 150 % contre les DGT élémentaires et les DGT physiques.<br>- Le bouclier peut être déclenché une fois toutes les 60 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Noelle2.png" alt="Image">
                <p>Clair et net</p>
            </div>
            <p>Noëlle réduit le TdR d'Armure de cœur de 1 s tous les 4 coups d'attaque normale ou chargée qu'elle inflige à un ennemi.<br>Un coup peut être compté toutes les 0,1 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Noelle3.png" alt="Image">
                <p>À votre service</p>
            </div>
            <p>12 % de chances d'obtenir un plat supplémentaire lorsque vous cuisinez un plat parfait qui renforce la DÉF.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle1.png" alt="Image">
                <p>J'assure vos arrières</p>
            </div>
            <p>L'effet de restauration des PV d'Armure du cœur a 100% de chances d'être déclenché lorsque Grand ménage et Armure de cœur sont actifs en même temps..</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle2.png" alt="Image">
                <p>Servante de tourbillon</p>
            </div>
            <p>Les attaques chargées de Noëlle consomment 20% d'endurance en moins et infligent 15% de DGT supplémentaires.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle3.png" alt="Image">
                <p>La servante ne sera jamais blessée</p>
            </div>
            <p>Niveau de compétence Armure de cœur +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle4.png" alt="Image">
                <p>Je vais nettoyer après</p>
            </div>
            <p>Armure de cœur inflige une quantité de DGT Géo équivalant à 400% de l'ATQ aux ennemis proches lorsqu'elle prend fin ou que l'armure est détruite.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle5.png" alt="Image">
                <p>Maîtresse de ménage</p>
            </div>
            <p>Niveau de compétence Grand ménage +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Noelle6.png" alt="Image">
                <p>Aucune poussière</p>
            </div>
            <p>Grand ménage fait bénéficier Noëlle d'un bonus supplémentaire d'ATQ à hauteur de 50 % de sa DÉF.<br>De plus, chaque ennemi vaincu pendant que la compétence est active prolonge sa durée de 1 s (10 s maximum).</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Noelle2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Noelle3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Noelle.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>