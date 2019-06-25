<?php
    $profile = $_GET['user-profile'];

    if ($profile == "Administrateur") {
        header("Location: administrateur/home_administrateur.php");
    } elseif ($profile == "Gestionnaire") {
        header("Location: gestionnaires/home_gestionnaires.php");
    } elseif ($profile == "Technicien") {
        header("Location: techniciens/home_techniciens.php");
    }
?>
