<?php
function draw_square($size) {

    for ($i = 0; $i < $size; $i++) {
        for ($j = 1; $j <=$size; $j++) {
            echo "*";
        }
        echo "\n";
    }
}