<?php
    include '../fonctions/all-functions.php';
    function myAddUser($session) {
        echo '<div class="col-md-9 jumbotron">
            <h3 class="display-6">Ajouter un nouveau '.myStrFirstUp(myStrSingulier($session)).'</h3>
            <hr class="my-4">
            <form action="add-utilisateurs-dbgestion.php?session='.$session.'" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input name="nom" type="nom" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer un nom" required>
                    <small id="nomHelp" class="form-text text-muted"> Nom du nouveau '.myStrSingulier($session).'</small>
                </div>
                <hr class="my-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer une adresse email" required>
                    <small id="emailHelp" class="form-text text-muted">Adresse mail du nouveau '.myStrSingulier($session).'</small>
                </div>
                <input  class="btn btn-primary btn-lg" type="submit" name="formValidate" value="Valider">
            </form>
        </div>';
    }
?>
