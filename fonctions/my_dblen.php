<?php
    function myDblen($database) {
        try {
            $nb_pers = 0;
            $user = "root";
            $pass = "";
            $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

            $requete = 'SELECT * from '.$database.'';

            foreach ($dbh->query($requete) as $row) {
                $nb_pers++;
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        echo $nb_pers;
        return($nb_pers);
    }
?>
