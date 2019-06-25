<?php
    function operationTab($id_vehicule) {
        try {
            $nb_pers = 1;
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

            $requete = 'SELECT * from operations_de_maintenance';

            foreach ($dbh->query($requete) as $row) {
                if ($id_vehicule == $row['id_vehicule']) {
                    my_operation_tab($row);
                    $nb_pers++;
                }
            }

            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function my_operation_tab($row) {
        echo '<div class="card mb-3">';
        if (strlen($row['photo']) > 0) {
            echo '<img src="'.$row['photo'].'" class="card-img-top">
            <hr class="my-4">';
        }
        echo '<div class="card-body">
                <h6 class="card-title"><strong>Sujet:</strong></h6>
                <p class="card-text">'.$row['sujet'].'</p>
                <h6 class="card-title"><strong>Description:</strong></h6>
                <p class="card-text">'.$row['description'].'</p>
                <h6 class="card-title"><strong>Liste de piéces affectées:</strong></h6>
                <p class="card-text">'.$row['pieces_affectees'].'</p>
                <h6 class="card-text">Note pour les Techniciens:</h6>
                <p class="card-text">'.$row['note_tech'].'</p>
                <p class="card-text"><small class="text-muted"><strong>Date de début:&nbsp;</strong>'.$row['date_debut'].'</small></p>
                <p class="card-text"><small class="text-muted"><strong>Date de fin:&nbsp;</strong>'.$row['date_fin'].'</small></p>
            </div>
            <a class="btn btn-outline-primary btn-sm my-2 my-sm-0">Modifier l\'opération de maintenance</a>
        </div>';
    }

?>
