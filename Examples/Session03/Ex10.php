<?php
    srand();
    function random_numbers($k){
        for ($i = 0; $i <$k; $i++){
            $r = rand(1,10);
            yield $r;
        }
        return -1;
    }
    $rns = random_numbers(10);
    foreach ($rns as $r){
        echo "$r";
        echo '</br>';
    }
    echo $rns ->getReturn(). PHP_EOL;
?>
