<?php
    $id_vehicule = $_GET['id'];
    echo "id: ".$id_vehicule."</br>";

    $sujet = $_POST['sujet'];
    echo "sujet: ".$sujet."</br>";

    $description = $_POST['description'];
    echo "description: ".$description."</br>";

    $date_debut = $_POST['date_debut'];
    echo "date_debut: ".$date_debut."</br>";

    $date_fin = $_POST['date_fin'];
    echo "date_fin: ".$date_fin."</br>";

    $liste_pieces = $_POST['liste_pieces'];
    echo "liste_pieces: ".$liste_pieces."</br>";

    $note = $_POST['note'];
    echo "note: ".$note."</br>";

    $image = $_POST['image'];
    echo "image: ".$image."</br>";


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
