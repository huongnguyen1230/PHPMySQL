<HTML>
<HEAD>Global Variables </HEAD>
<BODY>
<?php
    $int1 = 68;
    $int2 = 50;
    function division(){
        global $int1, $int2;
        //storing the result in a variable
        $int3 = $int1/$int2;
        //display text
        echo "The quotient for $int1/$int2 = $int3";
    }
    //calling the function
    division();
?>
</BODY>
</HTML>