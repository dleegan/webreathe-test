<?php
    $id_vehicule = $_GET['id'];
    $sujet = $_POST['sujet'];
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $liste_pieces = $_POST['liste_pieces'];
    $note = $_POST['note'];
    $image = $_POST['image'];


    try {
        $user = "root";
        $pass = "";
        $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO operations_de_maintenance (id, id_vehicule, sujet, description, date_debut, date_fin, pieces_affectees, note_tech, photo)
        VALUES (NULL, '$id_vehicule', '$sujet', '$description', '$date_debut', '$date_fin', '$liste_pieces', '$note', '$image');";
        $dbh->exec($sql);
    } catch (PDOException $e) {
        print $sql . "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $dbh = null;

    header("Location: tab-vehicules.php");
?>
