<?php
    $name = $_POST['nom'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $probeme = $_POST['probleme'];

    try {
        $user = "root";
        $pass = "";
        $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO vehicules (id, nom, type, date_achat, probleme) VALUES (NULL, '$name', '$type', '$date', '$probeme')";
        $dbh->exec($sql);
    } catch (PDOException $e) {
        print $sql . "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $dbh = null;

    header("Location: tab-gestionnaires.php");
?>
