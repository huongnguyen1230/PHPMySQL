<?php
    $num2 = 0;
    echo "the multiplication value of 14 * 15 is <br>";
    function multiply(){
        $num1 = 14;
        $num2 = 15;
        $num2 = $num1*$num2;
        echo $num2;
    }
    multiply();
    echo "<br> the value of the local variable on exiting the funtion is<br>";
    echo $num2;
?>