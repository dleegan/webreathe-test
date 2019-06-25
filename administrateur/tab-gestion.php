<?php
    include '../fonctions/all-functions.php';

    function myListTab($value, $add_path_file) {
        echo '<div class="col-md-9">
            <div class="panel panel-default">
                <div class="jumbotron">
                    <div class="panel-heading">
                        <h1 class="panel-title"><strong>Liste des '.myStrFirstUp($value).'</strong></h1>
                    </div>
                    <hr class="my-4">
                    <table class="table" data-show-columns="true">
                        <thead class="thead-dark">
                            <tr class="table-active">
                                <th scope="col">Id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>';
                                include "tab-database-gestion.php";
                                myDataBaseList($value);
                        echo '<tr>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="'.$add_path_file.'">Ajouter</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>';
    }
?>
