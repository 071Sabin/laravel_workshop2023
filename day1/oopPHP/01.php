<?php

    $a = 1;
    $b = true;

    $b = 'x';

    function abc($arg1, $arg2){
        echo $arg1." ".$arg2."<br>";
        return $arg1 + $arg2;
    }
    $c=abc(1,2);
    echo $c. "<br>";

?>