<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Chongyun</h1>
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
            <p>Exorciste de Liyue, Chongyun est né avec une énergie yang (positive) excessive, qui s'est avérée à la fois une aide et un obstacle. Cela fait de lui un exorciste très efficace, mais cela signifie également qu'il n'a jamais vu d'esprit par lui-même — ils fuient avant même qu'il ne puisse les voir. Cela l'a également rendu particulièrement sensible à tout type de chaleur ou d'émotion forte, ce qui conduit à des résultats plutôt... inattendus.<br><br>Exorciste basé à Liyue, et exerçant ses activités de par le monde. Héritier de l'une des plus célèbres maisons de l'art, il a un talent dévastateur qu'il ne doit pas à l'enseignement de ses maîtres, mais à l'impressionnante quantité d'énergie en permanence au bord de l'implosion qui l'habite.</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Chongyun</p></div>
            <div class="titreP genshin"><h4>Corps de glace et cœur de feu</h4></div>  

            <div><img src="../img/perso/Chongyun.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="cryo">★DPS (Cryo)</h3><p class="cryo">Élévation d'aptitude: Déchaînement Élémentaire > Compétence Élémentaire</p>
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
            <p class="cryo">Stats Secondaires:  DGT CRIT % > Taux CRIT % > ATQ % > Maîtrise élémentaire</p>
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
            <h4 class="cryo">Team</h4>
        </div>

        <div>
            <p class="noir">Swerl - A</p>
            <div class="flex infoJour">
                <a href="Xiao.php" class="containerArme c5" draggable="false"><img src="../img/icon/Xiao.png" alt="image" draggable="false"><p>Xiao</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Chongyun.php" class="containerArme c4" draggable="false"><img src="../img/icon/Chongyun.png" alt="image" draggable="false"><p>Chongyun</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Jean.php" class="containerArme c5" draggable="false"><img src="../img/icon/Jean.png" alt="image" draggable="false"><p>Jean</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Fonte - A</p>
            <div class="flex infoJour">
                <a href="Diluc.php" class="containerArme c5" draggable="false"><img src="../img/icon/Diluc.png" alt="image" draggable="false"><p>Diluc</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Chongyun.php" class="containerArme c4" draggable="false"><img src="../img/icon/Chongyun.png" alt="image" draggable="false"><p>Chongyun</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Albedo.php" class="containerArme c5" draggable="false"><img src="../img/icon/Albedo.png" alt="image" draggable="false"><p>Albedo</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Masque endommagé.png" alt="image" draggable="false"><p>Masque endommagé<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Masque sale.png" alt="image" draggable="false"><p>Masque sale<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Masque sinistre.png" alt="image" draggable="false"><p>Masque sinistre<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Coeur de lapis.png" alt="image" draggable="false"><p>Coeur de lapis<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Duramen de glace.png" alt="image" draggable="false"><p>Duramen de glace<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c5" draggable="false"><img src="../img/materiaux/boss/Souffle de Stormterror.png" alt="image" draggable="false"><p>Souffle de Stormterror<br>x 18</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Chongyun1.png" alt="Image">
                <p>Fléau des démons</p>
            </div>
            <p><strong>Attaque normale :</strong>Enchaîne jusqu'à 4 coups d'épée.<br><strong>Attaque chargée :</strong>Succession d'entailles circulaires qui se termine sur un coup puissant.<br><br>Combo : 138.38% / 124.78% / 158.78% / 200.09%<br>Chargée circulaire : 111.26%<br>Chargée finale : 201.2%<br>Durée max : 5s<br>DGT durant la chute : 147.44%<br>DGT Chute basse/élevée : 294.82% / 368.25%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Chongyun-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Chongyun2.png" alt="Image">
                <p>Lame de l'esprit : Givre superposé</p>
            </div>
            <p>Chongyun abat violemment sa longue épée sur le sol, provoquant une explosion de glace qui inflige des DGT Cryo aux ennemis en face dans une zone circulaire.<br><br>Après un court délai, les courants d'air froids de l'explosion se condensent en un champ de givre. Les DGT des attaques normales et chargées des personnages qui s'y trouvent et qui manient l'épée longue, à une main, ou une arme d'hast obtiennent un enchantement Cryo.<br><br>DGT compétence : 309.67%<br>Durée Explosion : 2s<br>Durée du champ : 10s<br>TdR : 15s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Chongyun-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Chongyun3.png" alt="Image">
                <p>Lame de l'esprit : Givre superposé</p>
            </div>
            <p>D'un geste rapide, Chongyun invoque en l'air 3 lames éthérées qui foncent au sol après un court délai.<br>L'impact inflige des DGT Cryo de zone et projette les ennemis en l'air.<br><br>DGT Compétence : 256.32%<br>TdR : 12s<br>Coût énergie : 40</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Chongyun-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Chongyun1.png" alt="Image">
                <p>Respiration stable</p>
            </div>
            <p>Dans le champ de Lame de l'esprit : Givre superposé, la VIT d'attaque des attaques normales des personnages armés d'une épée à une mains, à deux mains ou d'une arme d'hast augmente de 8 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Chongyun2.png" alt="Image">
                <p>Lame du chasseur de glace</p>
            </div>
            <p>Une lame apparaît à la fin du champ de Lame de l'esprit : Givre superposé ; elle inflige des DGT Cryo de zone équivalant à 100 % des DGT de Lame de l'esprit : Givre superposé aux ennemis proches. La RÉS Cryo des ennemis touchés est réduite de 10 % pendant 8 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Chongyun3.png" alt="Image">
                <p>Périple alyzéen</p>
            </div>
            <p>Réduit la durée d'une expédition de 25 % lorsqu'elle se déroule à Liyue.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun1.png" alt="Image">
                <p>Glace déchaînée</p>
            </div>
            <p>Le dernier coup d'attaque normale libère 3 lames de glace vers l'avant ; chacune inflige une quantité de DGT Cryo équivalant à 50 % de l'ATQ de Chongyun.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun2.png" alt="Image">
                <p>Révolution astrale</p>
            </div>
            <p>Lancer une compétence ou un déchaînement élémentaires dans le champ de Lame de l'esprit : Givre superposé réduit leur TdR de 15 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun3.png" alt="Image">
                <p>Étincellement des nuages</p>
            </div>
            <p>Niveau d'aptitude Lame de l'esprit : Chute d'étoiles +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun4.png" alt="Image">
                <p>Cieux givrés</p>
            </div>
            <p>Chongyun récupère 1 pt d'énergie à chaque fois qu'il touche un ennemi affecté par Cryo.<br>Cet effet peut être déclenché une fois toutes les 2 s.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun5.png" alt="Image">
                <p>La Voie</p>
            </div>
            <p>Niveau d'aptitude Lame de l'esprit : Givre superposé +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Chongyun6.png" alt="Image">
                <p>Rassemblement des quatre lames</p>
            </div>
            <p>Lame de l'esprit : Chute d'étoiles inflige 15 % de DGT supplémentaires aux ennemis dont les PV sont inférieurs à ceux de Chongyun.<br>De plus, une lame supplémentaire est générée à l'activation de la compétence.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Chongyun2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Chongyun3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Chongyun.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>