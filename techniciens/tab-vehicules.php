<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Liste des véhicules</title>
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
                    <li class="breadcrumb-item active">Liste des véhicules</li>
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

                    <!--Liste des Gestionnaires-->
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="jumbotron">
                                <div class="panel-heading">
                                    <h1 class="panel-title"><strong>Liste des véhicules</strong></h1>
                                </div>
                                <hr class="my-4">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr class="table-active">
                                            <th scope="col">Id</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Voir plus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "tab-liste.php";
                                            myDataBaseListVehicules("vehicules");
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>
