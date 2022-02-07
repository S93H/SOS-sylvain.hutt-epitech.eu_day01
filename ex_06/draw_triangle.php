<?php

function draw_triangle($size) {
    
    for ($i = 0; $i < $size; $i++) {
        for ($j= 0; $j <= $i; $j++) {
            echo "*";
        }

        echo "\n";
    }
    
    

}