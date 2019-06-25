<?php
    print_r($_GET);
    $array_vehicule = $_GET;
    echo '</br>';
    echo $array_vehicule[0];
    echo '</br>';
    echo $array_vehicule[1];
    echo '</br>';
    echo $array_vehicule[2];
    echo '</br>';
    echo $array_vehicule[3];
    echo '</br>';
    echo $array_vehicule[4];
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Détails du véhicule</title>
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
                    <li class="breadcrumb-item"><a href="tab-vehicules.php">Liste des Véhicules</a></li>
                    <li class="breadcrumb-item active">Détails du véhicule</li>
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
                                    <h1 class="panel-title"><strong>Details du véhicule</strong></h1>
                                </div>
                                <hr class="my-4">
                                <h4><strong>Information du véhicule:</strong></h4>
                                <h6>Nom: &nbsp; <?php echo $array_vehicule[1]; ?></h6>
                                <h6>Type: &nbsp; <?php echo $array_vehicule[2]; ?></h6>
                                <h6>Date d’achat: &nbsp; <?php echo $array_vehicule[3]; ?></h6>
                                <h6>Problème: &nbsp; <?php echo $array_vehicule[4]; ?></h6>
                                </br>
                                <h5><strong>Opérations de maintenance:</strong></h5>

                                <?php
                                    include 'operation-tab.php';
                                    operationTab($array_vehicule[0]);
                                ?>

                                <div class="modal-footer my-3">
                                    <a class="btn btn-primary" href="add-maintenances.php?id=<?php echo $array_vehicule[0]?>">Ajouter</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>
