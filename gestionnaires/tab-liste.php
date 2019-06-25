<?php
    function myDataBaseListVehicules($database) {
        try {
            $nb_pers = 1;
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

            $requete = 'SELECT * from '.$database.'';

            foreach ($dbh->query($requete) as $row) {
                afficherLigne($row, $nb_pers, $database);
                $nb_pers++;
            }

            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function afficherLigne($row, $nb_pers, $database) {
        echo '<tr>';
        echo '<th scope="row">' . $nb_pers . '</th>';
        echo '<th>' . $row['nom'] . '</th>';
        echo '<th>' . $row['type'] . '</th>';
        echo '<th>' . $row['date_achat'] . '</th>';
        echo '<th>' . $row['probleme'] . '</th>';
        echo '<td><a class="btn btn-outline-primary btn-sm" href="../administrateur/sup-utilisateurs-dbgestion.php?session='.$database.'&id='.$row['id'].'">Supprimer</a></td>';
        echo '</tr>';
    }
?>
