<?php
setlocale(LC_TIME, 'fr');
date_default_timezone_set('America/Montreal');
require 'class/materiaux.class.php';
require 'class/Obj.class.php';
require 'data_base.php';

    if(session_status() === PHP_SESSION_NONE)
    {
        session_start();
        $_SESSION['jour'] = strftime('%A');
        if ($_SESSION['jour'] == "lundi" || $_SESSION['jour'] == "jeudi" || $_SESSION['jour'] == "dimanche"){
            $_SESSION['jourNum'] = 1;
        } else if ($_SESSION['jour'] == "mardi" || $_SESSION['jour'] == "vendredi"){
            $_SESSION['jourNum'] = 2;
        } else {
            $_SESSION['jourNum'] = 3;
        }

        if ((strpos($_SERVER['PHP_SELF'], 'index.php') == true || strpos($_SERVER['PHP_SELF'], 'arme.php') == true || 
            strpos($_SERVER['PHP_SELF'], 'artefact.php') == true || strpos($_SERVER['PHP_SELF'], 'actualite.php') == true || 
            strpos($_SERVER['PHP_SELF'], 'personnage.php') == true)){
            $_SESSION['infoPage'] = false;
        } else {
            $_SESSION['infoPage'] = true;
        }
    }
?>