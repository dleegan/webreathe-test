<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Ajouter un Véhicule</title>
    </head>
    <body>

        <?php
            include '../fonctions/fonctions-header.php';
            myHeader("Gestionnaire", "home_gestionnaires.php");
        ?>

        <section id="breadcrumb">
              <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home_gestionnaires.php">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Ajouter un Véhicule</li>
                </ol>
              </div>
        </section>

        <!--Corps principale-->
        <section id="main">
            <div class="container">
                <div class="row">

                    <!--Dashboard de gauche-->
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="home_gestionnaires.php" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Tableau de bord
                            </a>
                            <a href="home_gestionnaires.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Véhicules </a>
                        </div>
                    </div>
                    <div class="col-md-9 jumbotron">
                        <h3 class="display-6">Ajouter un nouveau Véhicule</h3>
                        <hr class="my-3">

                        <form action="add-vehicules-dbgestion.php" method="post">
                            <div class="form-group">

                                <label for="exampleInputEmail1">Nom:</label>
                                <input name="nom" type="nom" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer le nom" required>
                                <small id="nomHelp" class="form-text text-muted">Nom du nouveau Véhicule</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Type:</label>
                                <input name="type" type="type" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer le type" required>
                                <small id="nomHelp" class="form-text text-muted">Type du nouveau Véhicule</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Date d'achat:</label>
                                <input name="date" type="date" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer la date d'achat" required>
                                <small id="nomHelp" class="form-text text-muted">Date d'achat du nouveau Véhicule</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Probème:</label>
                                <input name="probleme" type="probleme" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer le problème" required>
                                <small id="nomHelp" class="form-text text-muted">Probème du nouveau Véhicule</small>

                            </div>
                            <input  class="btn btn-primary btn-lg" type="submit" name="formValidate" value="Valider">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
