<?php

    GLOBAL $debug;  // muss in jede einzelne Funktion!

    $debug = 0;
    //if (1 and isset($_GET["verbozephp"]))
    //    $debug = 1;

    error_reporting(E_ALL); 
    
    if ($debug) {
        echo "debugmode<br>";
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
    }
    else {
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
    }
    ini_set('error_log', dirname(__FILE__) . '/error_log.txt');

?>