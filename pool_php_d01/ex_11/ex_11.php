<?php

function my_print_args(){
    global $argv;
    unset($argv[0]);
    foreach($argv as &$value)
    {   
        echo $value . "\n";
    }
}

my_print_args();

