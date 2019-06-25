<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <title>Liste des Techniciens</title>
    </head>
    <body>

        <?php
            include '../fonctions/fonctions-header.php';
            myHeader("Administrateur", "home_administrateur.php");
        ?>

        <section id="breadcrumb">
              <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home_administrateur.php">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Liste des Techniciens</li>
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

                    <!--Liste des Techniciens-->
                    <?php
                        include 'tab-gestion.php';
                        myListTab("techniciens","add-user-techniciens.php");
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>
