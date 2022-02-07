<?php
function my_calc($nb_a, $operator, $nb_b) {
    switch ($operator) {
        case "+":
            echo "$nb_a" + "$nb_b";
            break;

        case "-" :
            echo "$nb_a" - "$nb_b";
            break;
        case "/" :
            echo "$nb_a" / "$nb_b";
            break;
        case "%" :
            echo "$nb_a" % "$nb_b";
            break;

        case "*" :
            echo "$nb_a" * "$nb_b";
            break;               
    }
}