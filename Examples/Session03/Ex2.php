<HTML>
<BODY>
    <?php
    $x = 1;
    $y = 2;
    echo $x.'<=>'.$y,'Returns', $x <=> $y;
    //this will output -1

    echo '</br>';
    $x = 10;
    $y = 10;
    echo $x.'<=>'.$y,'Returns', $x <=> $y;
    //this will output 0

    echo '</br>';
    $x = 10;
    $y = 5;
    echo $x.'<=>'.$y,'Returns', $x <=> $y;
    ?>
</BODY>
</HTML>