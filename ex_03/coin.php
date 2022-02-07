<?php
function coin($nbr) {
    for ($i = 0; $i < $nbr; $i++) {
        if ($i%2 === 1) {
            echo "coin.\n";
        } else {
            echo "COIINNN !!\n";
        }

    }
}