<?php
    $name = $_GET['id'];
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Ajouter un Véhicule</title>
    </head>
    <body>

        <?php
            include '../fonctions/fonctions-header.php';
            myHeader("Technicien", "home_techniciens.php");
        ?>

        <section id="breadcrumb">
              <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home_techniciens.php">Tableau de bord</a></li>
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
                            <a href="home_techniciens.php" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Tableau de bord
                            </a>
                            <?php
                                include '../fonctions/nav-tab.php';
                                $navigation = array(
                                    array("Véhicules", "tab-vehicules.php")
                                );
                                myNavTab($navigation);
                            ?>
                        </div>
                    </div>

                    <!--Ajouter des infos-->
                    <div class="col-md-9 jumbotron">
                        <h3 class="display-6">Ajouter une nouvelle opération de maintenance</h3>
                        <hr class="my-3">

                        <form action="add-vehicules-dbgestion.php?id=<?php echo $name; ?>" method="post">
                            <div class="form-group">

                                <label for="exampleInputEmail1">Sujet:</label>
                                <input name="sujet" type="nom" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer le sujet" required>
                                <small id="nomHelp" class="form-text text-muted">Sujet de la nouvelle opération de maintenance</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Description:</label>
                                <textarea name="description" class="form-control" id="exampleTextarea" rows="3" placeholder="Entrer la description" required></textarea>
                                <small id="nomHelp" class="form-text text-muted">Description de la nouvelle opération de maintenance</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Date de début:</label>
                                <input name="date_debut" type="date" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer la date d'achat" required>
                                <small id="nomHelp" class="form-text text-muted">Date de début de la nouvelle opération de maintenance</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Date de fin:</label>
                                <input name="date_fin" type="date" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer la date d'achat" required>
                                <small id="nomHelp" class="form-text text-muted">Date de fin de la nouvelle opération de maintenance</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Liste de pièces affectées:</label>
                                <textarea name="liste_pieces" class="form-control" id="exampleTextarea" rows="3" placeholder="Entrer la description" required></textarea>
                                <small id="nomHelp" class="form-text text-muted">Description de la nouvelle opération de maintenance</small>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Note pour les techniciens:</label>
                                <textarea name="note" class="form-control" id="exampleTextarea" rows="3" placeholder="Entrer la description" required></textarea>
                                <hr class="my-3">

                                <label for="exampleInputEmail1">Image:</label>
                                <input name="image" type="url" class="form-control" id="exampleInputNom" aria-describedby="nomHelp" placeholder="Entrer le lien de l'image">

                            </div>
                            <input class="btn btn-primary btn-lg" type="submit" name="formValidate" value="Valider">
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
