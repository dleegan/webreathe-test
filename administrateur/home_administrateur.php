<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Tableau de bord</title>
    </head>
    <body>

        <?php
            include '../fonctions/fonctions-header.php';
            myHeader("Administrateur", "home_administrateur.php");
        ?>

        <section id="breadcrumb">
              <div class="container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">Tableau de bord</li>
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
                            <a href="home_administrateur.php" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Tableau de bord
                            </a>
                            <?php
                                include '../fonctions/nav-tab.php';
                                $navigation = array(
                                    array("Gestionnaires", "liste_gestionnaires.php"),
                                    array("Techniciens", "liste_techniciens.php")
                                );
                                myNavTab($navigation);
                            ?>
                        </div>
                    </div>

                    <!--Tableau de bord principale-->
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="jumbotron">
                                <h1><strong>Tableau de bord</strong></h1>
                                <hr class="my-4">

                                <div class="list-group">
                                    <div class="list-group-item justify-content-between align-items-center">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <h2>Gestionnaires</h2>
                                            <h4><span class="badge badge-primary badge-pill">
                                                <?php
                                                    include '../fonctions/my_dblen.php';
                                                    myDblen("gestionnaires");
                                                ?>
                                            </span></h4>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <a class="btn btn-outline-primary" href="liste_gestionnaires.php">Liste des Gestionnaires</a>
                                            <a class="btn btn-primary my-2 my-sm-0" href="add-user-gestionnaires.php">Ajouter</a>
                                        </div>
                                    </div>

                                    <div class="list-group-item justify-content-between align-items-center">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <h2>Techniciens</h2>
                                            <h4><span class="badge badge-primary badge-pill">
                                                <?php
                                                    myDblen("techniciens");
                                                ?>
                                            </span></h4>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <a class="btn btn-outline-primary" href="liste_techniciens.php">Liste des Techniciens</a>
                                            <a class="btn btn-primary my-2 my-sm-0" href="add-user-techniciens.php">Ajouter</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>
