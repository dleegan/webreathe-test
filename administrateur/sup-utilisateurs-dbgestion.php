<?php
    $session = $_GET['session'];
    $iddl = $_GET['id'];

    try {
        $user = "root";
        $pass = "";
        $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM $session WHERE $session . id = $iddl";
        $dbh->exec($sql);
    } catch (PDOException $e) {
        print $sql . "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $dbh = null;

    if ($session == "gestionnaires") {
        header("Location: liste_gestionnaires.php");
    } elseif ($session == "techniciens") {
        header("Location: liste_techniciens.php");
    } elseif ($session == "vehicules") {
        header("Location: ../gestionnaires/tab-gestionnaires.php");
    }
?>
