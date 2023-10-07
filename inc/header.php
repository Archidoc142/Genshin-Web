<?php include_once("pretraitement.php");?>

<!DOCTYPE html> 
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Genshin impact</title>
  <link rel="stylesheet" 
  <?php if ($_SESSION['infoPage'] == true){
    echo 'href="../css/css.css"></head><body>';
  } else {
    echo 'href="css/css.css"></head><body>';
  } ?>