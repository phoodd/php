<?php

class consolelogger {
    public function log($message){
        echo "$message\n";
    }
}


class ask {
    public function work ($logger){
        for($i=0;$i++){
            $logger ->log($i);        
        }
    }
}

// --------------------

$logger = new consolelogger();
$task = new Task();
$task ->work();