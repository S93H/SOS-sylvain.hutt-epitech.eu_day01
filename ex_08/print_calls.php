<?php
function print_calls() {
    static $counter = 0;
    $counter++;
    echo "$counter \n";
}