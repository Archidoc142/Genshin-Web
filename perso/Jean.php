<?php require '../inc/header.php';?>
<main class="pageInfo">
    <div class="orangeLine"></div>
    <h1 class="genshin titlePerso">Jean</h1>
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
            <p>Fille de Frederica Gunnhildr et Seamus Pegg, la sœur aînée de Barbara, et descendante du prestigieux clan Gunnhildr, Jean est la Grande Maîtresse Suppléante des Chevaliers de Favonius. Elle est toujours occupée à gérer les troubles à travers Mondstadt et travaille sans relâche pour maintenir la Cité de la Liberté.<br><br>Entièrement dévouée à sa fonction de grande maîtresse intérimaire de l'Ordre de Favonius, Jean veille sans relâche sur Mondstadt. Bien qu'elle n'était pas la plus douée de ses pairs, cette jeune femme est devenue le pilier de l'Ordre grâce à son travail acharné.<br><br>Elle protègera Mondstadt coûte que coûte face à toutes les menaces, notamment celle que représente Stormterror</p>
        </div>
        <div class="containerP">
            <div class="nameP genshin"><p>Jean</p></div>
            <div class="titreP genshin"><h4>Chevalier du Croc de Lion</h4></div>  

            <div><img src="../img/perso/jean.jpg" id="switch" alt="Image" draggable="false" onclick="switchImage();"></div>

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
            <h3 class="anemo">★Soutien déchaînement</h3><p class="anemo">Élévation d'aptitude: Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c5" draggable="false"><img src="../img/arme/Coupeur de jade primordial.png" alt="image" draggable="false"><p>Coupeur de jade primordial</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Lame kageuchi d'Amenoma.png" alt="image" draggable="false"><p>Lame kageuchi d'Amenoma</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Croc suppurant.png" alt="image" draggable="false"><p>Croc suppurant</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c5" draggable="false"><img src="../img/arme/Serment de la liberté.png" alt="image" draggable="false"><p>Serment de la liberté</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Flûte.png" alt="image" draggable="false"><p>Flûte</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
        <div>
            <p class="noir">Artéfacts</p>
            <p class="anemo">Stats Secondaires: DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
            <div class="flex infoJour">
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Ombre de la Verte Chasseuse.png" alt="image" draggable="false"><p>Souvenir de fleur des champs</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Plume de flèche de la Verte Chasseuse.png" alt="image" draggable="false"><p>Plume de flèche de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Détermination de la Verte Chasseuse.png" alt="image" draggable="false"><p>Détermination de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Diadème de la Verte Chasseuse.png" alt="image" draggable="false"><p>Diadème de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="../artefact/Ombre de la Verte Chasseuse.php" class="containerArme c5" draggable="false"><img src="../img/artefact/Récipient de la Verte Chasseuse.png" alt="image" draggable="false"><p>Récipient de la Verte Chasseuse</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>

        <div>
            <h3 class="anemo">★DPS (DGT physiques)</h3><p class="anemo">Élévation d'aptitude: Attaque Normale > Compétence Élémentaire > Déchaînement Élémentaire</p>
            <p class="noir">Armes</p>
            <div class="flex infoJour">
                <a class="containerArme c5" draggable="false"><img src="../img/arme/Coupeur de jade primordial.png" alt="image" draggable="false"><p>Coupeur de jade primordial</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c5" draggable="false"><img src="../img/arme/Épée du faucon.png" alt="image" draggable="false"><p>Épée du faucon</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a class="containerArme c4" draggable="false"><img src="../img/arme/Tailleur de pierre (prototype).png" alt="image" draggable="false"><p>Tailleur de pierre (prototype)</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
            </div>
        </div>
        <div>
            <p class="noir">Artéfacts</p>
            <p class="anemo">Stats Secondaires: DGT CRIT % > Taux CRIT % > ATQ % > Recharge d'énergie %</p>
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
            <h4 class="anemo">Team</h4>
        </div>

        <div>
            <p class="noir">Supra-conduction - B</p>
            <div class="flex infoJour">
                <a href="Keqing.php" class="containerArme c5" draggable="false"><img src="../img/icon/Keqing.png" alt="image" draggable="false"><p>Keqing</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Chongyun.php" class="containerArme c4" draggable="false"><img src="../img/icon/Chongyun.png" alt="image" draggable="false"><p>Chongyun</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Diona.php" class="containerArme c4" draggable="false"><img src="../img/icon/Diona.png" alt="image" draggable="false"><p>Diona</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Jean.php" class="containerArme c5" draggable="false"><img src="../img/icon/Jean.png" alt="image" draggable="false"><p>Jean</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
            </div>
            <p class="noir">Physique - C</p>
            <div class="flex infoJour">
                <a href="Jean.php" class="containerArme c5" draggable="false"><img src="../img/icon/Jean.png" alt="image" draggable="false"><p>Jean</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Fischl.php" class="containerArme c4" draggable="false"><img src="../img/icon/Fischl.png" alt="image" draggable="false"><p>Fischl</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
                <a href="Zhongli.php" class="containerArme c5" draggable="false"><img src="../img/icon/Zhongli.png" alt="image" draggable="false"><p>Zhongli</p><img src="../img/icon/five_stars.png" alt="image" draggable="false"></a>
                <a href="Rosalia.php" class="containerArme c4" draggable="false"><img src="../img/icon/Rosalia.png" alt="image" draggable="false"><p>Rosalia</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Masque endommagé.png" alt="image" draggable="false"><p>Masque endommagé<br>x 36</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c2" draggable="false"><img src="../img/materiaux/elevation/Masque sale.png" alt="image" draggable="false"><p>Masque sale<br>x 96</p><img src="../img/icon/two_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c3" draggable="false"><img src="../img/materiaux/elevation/Masque sinistre.png" alt="image" draggable="false"><p>Masque sinistre<br>x 129</p><img src="../img/icon/three_stars.png" alt="image" draggable="false"></a>
            <a class="containerArme c1" draggable="false"><img src="../img/materiaux/elevation/Graines de pissenlit.png" alt="image" draggable="false"><p>Graines de pissenlit<br>x 168</p><img src="../img/icon/one_star.png" alt="image" draggable="false"></a>
            <a class="containerArme c4" draggable="false"><img src="../img/materiaux/boss/Graine d’ouragan.png" alt="image" draggable="false"><p>Graine d’ouragan<br>x 46</p><img src="../img/icon/four_stars.png" alt="image" draggable="false"></a>
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
                <img src="../img/pouvoir/a/Jean1.png" alt="Image">
                <p>Escrime de Favonius</p>
            </div>
            <p><strong>Attaque normale</strong><br>Enchaîne jusqu'à 5 coups d'épée.<br><br><strong>Attaque chargée</strong><br>Consomme de l'endurance pour libérer une puissante attaque ascendante portée par les vents.<br>Les ennemis projetés en l'air retombent lentement au sol.<br><br><strong>Attaque plongeante</strong><br>Plonge depuis les airs pour frapper le sol, infligeant des DGT aux ennemis en chemin et des DGT de zone à l'impact.<br><br>Combo : 95.54% / 90.1% / 119.17% / 130.22% / 156.57%<br>Chargée : 320.28%<br>DGT durant la chute : 126.38%<br>DGT Chute basse/élevée : 252.7% / 315.64%</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Jean-AA.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Jean2.png" alt="Image">
                <p>Épée de tourbillon</p>
            </div>
            <p>Concentrant l'énergie des vents dans son épée, Jean libère une tornade qui projette les ennemis dans la direction ciblée, infligeant d'importants DGT Anémo.<br><br><strong>Appui long</strong><br>Consomme de l'endurance de façon continue pour générer une tornade qui attire ennemis et objets proches.<br>La tornade peut être dirigée.<br>Jean ne peut pas se déplacer tant que l'attaque dure.<br><br>DGT compétence : 525.6%<br>Endurance : 20pts/s<br>Durée max : 5 s<br>TdR : 6 s</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Jean-E.gif" alt="video" class="video" draggable="false">
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/a/Jean3.png" alt="Image">
                <p>Brise de pissenlit</p>
            </div>
            <p>Jean invoque la protection des vents pour générer un champ de pissenlits tournoyant qui repousse les ennemis proches, tout en leur infligeant des DGT Anémo.<br>En même temps, tous les personnages sont soignés considérablement, la quantité de PV restaurés étant proportionnelle à l'ATQ de Jean.<br><br><strong>Champ de pissenlits</strong><br>· Le champ de pissenlits restaure les PV des personnages dans la zone de façon continue.<br>· Le champ leur applique également l'élément Anémo.<br>· Les ennemis qui rentrent ou sortent de la zone subissent des DGT Anémo.<br><br>DGT : 764.64%<br>DGT Entrée/Sortie de zone : 141.12%<br>Soins du champ : 452.16% ATQ + 3,388 PV<br>Soins continus : 45.22% ATQ + 338 PV/s<br>TdR : 20 s<br>Coût Énergie : 80</p>
            <img src="https://www.genshin-impact.fr/wp-content/uploads/2020/08/Jean-Q.gif" alt="video" class="video" draggable="false">
        </div>

        <h2 class="title">Passif</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Jean1.png" alt="Image">
                <p>Charge critique</p>
            </div>
            <p>Les attaques normales de Jean ont 50 % de chances de restaurer une quantité de PV équivalant à 15 % de l'ATQ de Jean à tous les personnages de l'équipe lorsqu'elles touchent.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Jean2.png" alt="Image">
                <p>Que le vent vous guide</p>
            </div>
            <p>Brise de pissenlit restaure 20 % d'énergie élémentaire lorsqu'elle prend fin.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/p/Jean3.png" alt="Image">
                <p>Vent directeur</p>
            </div>
            <p>12 % de chances d'obtenir un plat supplémentaire lorsque vous cuisinez un plat de soins parfait.</p>
        </div>

        <h2 class="title">Constellation</h2>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean1.png" alt="Image">
                <p>Tourmente tranchante</p>
            </div>
            <p>La VIT d'attraction et les DGT infligés par Épée de tourbillon augmentent de 40 % lorsque la compétence reste activée plus d'une seconde.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean2.png" alt="Image">
                <p>Égide du peuple</p>
            </div>
            <p>La VIT de déplacement et d'attaque de tous les personnages de l'équipe augmente de 15 % pendant 15 s lorsque Jean obtient un orbe ou une particule élémentaire.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean3.png" alt="Image">
                <p>Lorsque le vent d'ouest souffle</p>
            </div>
            <p>Niveau d'aptitude Brise de pissenlit +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean4.png" alt="Image">
                <p>Territoire des pissenlits</p>
            </div>
            <p>La RÉS Anémo des ennemis à l'intérieur du champ de Brise de pissenlit est réduite de 40 %.</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean5.png" alt="Image">
                <p>Le moment du vent violent</p>
            </div>
            <p>Niveau d'aptitude Épée de tourbillon +3.<br>Niveau max : 15</p>
        </div>
        <div class="power">
            <div class="flex">
                <img src="../img/pouvoir/c/Jean6.png" alt="Image">
                <p>Croc de Lion, le protecteur de Mondstadt</p>
            </div>
            <p>Les DGT subis par les personnages dans le champ de Brise de pissenlit sont réduits de 35 %.<br>Après avoir quitté le champ, cet effet disparaît après avoir subi 3 attaques ou après 10 s.</p>
        </div>
    </div>

<div class="endPerso"></div>
<script src="../js/script.js"></script>
<script>
    var image_tracker = 'first';

    function switchImage() {
        var image = document.getElementById('switch');
        if (image_tracker === 'first') {
            image.src = '../img/perso/Jean2.png';
            image_tracker = 'second';
        } else if (image_tracker === 'second') {
            image.src = '../img/perso/Jean3.jpg';
            image_tracker = 'third';
        } else {
            image.src = '../img/perso/Jean.jpg';
            image_tracker = 'first';
        }
    }
</script>
<?php require '../inc/footer.php';?>