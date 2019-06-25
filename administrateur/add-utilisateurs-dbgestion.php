<?php
    $session = $_GET['session'];
    $name = $_POST['nom'];
    $mremail = $_POST['email'];

    try {
        $user = "root";
        $pass = "";
        $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO $session (id, nom, email) VALUES (NULL, '$name', '$mremail')";
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
    }

?>
