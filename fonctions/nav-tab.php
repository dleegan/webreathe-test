<?php
    function myNavTab($navigation) {
        for ($rox = 0; $rox != count($navigation); $rox++) {
            echo '<a href="'. $navigation[$rox][1] .'" class="list-group-item">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'.$navigation[$rox][0].'
            </a>';
        }
        echo '</br>';
    }
?>
