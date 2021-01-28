<?php

$var1;
    function sum(){
        static $var1 = 9;
        $var2 = $var1 + 12;

        echo "the value of the variable is: $var1<br>";
        echo "the addition value of 9 + 12 = ";
        echo "$var2<br>";
    }
    sum();
    ?>
