<?php

function draw_triangle($size) {
    
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <=(2*$size)-1; $j++) {
            if ($j >= $size-($i-1) && $j <=$size+($i-1)) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    
    

}