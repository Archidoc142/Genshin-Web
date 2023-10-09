<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Bennett</h1>
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
            <p>Orphelin découvert par un aventurier âgé alors qu'il était bébé, Bennett a été élevé dans la Guilde des aventuriers de Mondstadt. Il est le seul et unique membre de "la Bande à Benny", car tout le monde a quitté l'équipe après avoir connu le malheur constant qui le suit.<br><br>Les membres de la Guilde des Aventuriers de Mondstadt âgés de moins de 20 ans sont rares, mais Bennett n'a jamais eu de chance.<br>Il est le seul membre actif de la Bande de Benny, l'équipe d'aventuriers qu'il a fondée. Celle-ci était à deux doigts de la dissolution à cause de ses amis, partis « en congé » à la suite de malheureux incidents.<br>Cependant, à la demande sincère de Bennett, Catherine a gardé son équipe dans le registre de la Guilde, tout en lui cachant que tous les autres membres l'avaient officiellement quitté pour ne pas lui briser le cœur.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Bennett</p></div>
            <div class="titreP genshin"><h4>Chef de la Bande à Benny</h4></div>  

            <div><img src="../img/perso/Bennett.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="pyro">★Soutien</h3><p class="pyro">Élévation d'aptitude: Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a href="../arme/Reflet de tranche-brume.php" class="containerArme c5" draggable="false"><img src="../img/arme/Reflet de tranche-brume.png" alt="image" draggable="false"><p>Reflet de tranche-brume</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Épée du faucon.php" class="containerArme c5" draggable="false"><img src="../img/arme/Épée du faucon.png" alt="image" draggable="false"><p>Épée du faucon</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../arme/Lame de la Voûte d'Azur.php" class="containerArme c5" draggable="false"><img src="../img/arme/Lame de la Voûte d'Azur.png" alt="image" draggable="false"><p>Lame de la Voûte d'Azur</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Tailleur de pierre (prototype).png" alt="image" draggable="false"><p>Tailleur de pierre (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
    </div>

    <div id="team">
        <div class="fiche flex">
            <img src="../img/icon/primogem.png" alt="image" draggable='false'>
            <h4 class="pyro">Team</h4>
        </div>

        <div>
            <p class="noir">Raiden Team - S</p>
            <div class="flex infoJour">
                <a href="Raiden Shogun.php" class="containerArme c5" draggable="false"><img src="../img/icon/Raiden Shogun.png" alt="image" draggable="false"><p>Raiden Shogun</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Kujou Sara.php" class="containerArme c4" draggable="false"><img src="../img/icon/Kujou Sara.png" alt="image" draggable="false"><p>Kujou Sara</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Kazuha.php" class="containerArme c5" draggable="false"><img src="../img/icon/Kazuha.png" alt="image" draggable="false"><p>Kazuha</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Physique Team - S</p>
            <div class="flex infoJour">
                <a href="Eula.php" class="containerArme c5" draggable="false"><img src="../img/icon/Eula.png" alt="image" draggable="false"><p>Eula</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Bennett.php" class="containerArme c4" draggable="false"><img src="../img/icon/Bennett.png" alt="image" draggable="false"><p>Bennett</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Insigne des Pilleurs.png" alt="image" draggable="false"><p>Insigne des Pilleurs<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Insigne de corbeau en argent.png" alt="image" draggable="false"><p>Insigne de corbeau en argent<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Insigne de corbeau en or.png" alt="image" draggable="false"><p>Insigne de corbeau en or<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Chrysanthème.png" alt="image" draggable="false"><p>Chrysanthème à aubes<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Bennett1.png" alt="Image">
                <p>Épée chanceuse</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 5 coups d'épée.<br><strong>Attaque chargée :</strong>Consomme de l'endurance pour déclencher deux coups d'épée rapides.<br><br>Combo : 88.06% / 84.49% / 107.95% / 117.98% / 142.12%<br>Chargée : 110.5% / 120.02%<br>DGT durant la chute : 126.38%<br>DGT Chute basse/élevée : 252.7% / 315.64%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Bennett-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Bennett2.png" alt="Image">
                <p>Surpassion</p>
            </div>
            <p>Bennett concentre l'élément Pyro et sa passion pour l'aventure sur son épée. Différentes choses se produisent selon le niveau de passion atteint...<br><br><strong>Appui simple</strong><br>Bennett exécute un coup rapide de sa lame enflammée, infligeant des DGT Pyro aux ennemis en face.<br><br><strong>Appui long</strong><br>Bennett effectue une charge qui donne des résultats différents selon le niveau de charge.<br>· Niveau 1 : Bennett exécute une seconde attaque, qui inflige des DGT Pyro et projette les ennemis en l'air.<br>· Niveau 2 : Une troisième attaque complète l'enchaînement, celle-ci infligeant d'importants DGT Pyro. L'attaque se termine par une explosion, qui projette simultanément Bennett et les ennemis dans les airs. Bennett ne subit pas de DGT lorsqu'il est projeté.<br><br>DGT Appui simple : 247.68%<br>DGT après 1e charge : 151.2% / 165.6%<br>DGT après 2e charge : 158.4% / 172.8%<br>DGT Explosion (après 2e charge) : 237.6%<br>TdR : 5s / 7,5s / 10s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Bennett-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Bennett3.png" alt="Image">
                <p>Merveilleux voyage</p>
            </div>
            <p>Bennett exécute une attaque sautée qui inflige des DGT Pyro et génère un champ vertueux.<br><br><strong>Champ vertueux</strong><br>· Les personnages se trouvant dans le champ et ayant moins de 70 % de PV sont soignés d'une quantité de PV proportionnelle aux PV max de Bennett.<br>· Les personnages se trouvant dans le champ et dont les PV sont supérieurs à 70 % obtiennent un bonus d'ATQ proportionnel à l'ATQ de base de Bennett.<br>· Le champ vertueux applique l'élément Pyro à tous les personnages qui s'y trouvent.<br><br>DGT Compétence : 419.04	%<br>Soins continus : 10.8% PV max + 1,270 PV/s<br>Bonus d'ATQ : 100.8%<br>Durée : 12s<br>TdR : 15s<br>Coût énergie : 60</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Bennett-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Bennett1.png" alt="Image">
                <p>Renouveau de la passion</p>
            </div>
            <p>Réduit le TdR de Surpassion de 20 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Bennett2.png" alt="Image">
                <p>Enthousiasme intrépide</p>
            </div>
            <p>Dans le champ de Merveilleux voyage, Surpassion bénéficie des effets suivants :<br>· TdR réduit de 50 %.<br>· Ne projette pas Bennett en l'air en niveau 2 de charge.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Bennett3.png" alt="Image">
                <p>R.A.S.</p>
            </div>
            <p>Réduit la durée d'une expédition de 25 % lorsqu'elle se déroule a Mondstadt.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett1.png" alt="Image">
                <p>Perspective de voyage</p>
            </div>
            <p>Le bonus d'ATQ conféré par Merveilleux voyage n'est plus soumis à la restriction de PV, et augmente numériquement l'ATQ de base de Bennett de 20 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett2.png" alt="Image">
                <p>Briser le désespoir</p>
            </div>
            <p>La recharge d'énergie de Bennett augmente de 30 % lorsque ses PV sont inférieurs à 70 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett3.png" alt="Image">
                <p>Passion ardente</p>
            </div>
            <p>Niveau de compétence Surpassion +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett4.png" alt="Image">
                <p>Enthousiasme éternel</p>
            </div>
            <p>L'utilisation d'une attaque normale lors de l'exécution de la deuxième attaque du niveau 1 de charge de Surpassion permet d'effectuer une attaque supplémentaire.<br>Celle-ci inflige 135 % des DGT de la deuxième attaque.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett5.png" alt="Image">
                <p>Ouverture d'âme du cœur</p>
            </div>
            <p>Niveau de compétence Merveilleux voyage +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Bennett6.png" alt="Image">
                <p>Feu et courage</p>
            </div>
            <p>Le champ de Merveilleux voyage confère à tous les personnages de l'équipe déployés et maniant une épée à une ou deux mains ou une arme d'hast qui s'y trouvent un bonus de DGT Pyro de 15 %, ainsi qu'un enchantement Pyro.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Bennett2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Bennett3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Bennett.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>