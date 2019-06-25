<?php
    function myStrFirstUp($str) {
        return(ucwords($str));
    }

    function myStrSingulier($str) {
        if ($str[strlen($str)-1] == 's') {
            $new_str = "";
            for ($len = 0; $len < (strlen($str) - 1); $len++) {
                $new_str[$len] = $str[$len];
            }
            return($new_str);
        } else {
            return($str);
        }
    }
?>
