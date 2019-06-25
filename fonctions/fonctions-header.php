<?php
    function myHeader($session, $home_path) {
        echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="'.$home_path.'">'.$session.'</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="'.$home_path.'">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sigin.php">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </br>';
    }
?>
