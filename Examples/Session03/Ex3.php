<HTML>
<BODY>
    <?php
        $x = "Cat";
        $y = "Dog";
        echo $x.'<=>'.$y,'// Returns ', $x <=> $y;
        //this will output - 1 because Cat is less than Dog.

    echo '</br>';
    $x = "PHP";
    $y = "PHP";
    echo $x.'<=>'.$y,' // Returns ', $x <=> $y;
    //this will output 0 because both strings have same value.

    echo '</br>';
    $x = "COMPUTE";
    $y = "APPLE";
    echo $x.'<=>'.$y,' // Returns ', $x <=> $y;
    //this will output 1 because "COMPUTE" is greater than APPLE

    echo '</br>'
    ?>
</BODY>
</HTML>
