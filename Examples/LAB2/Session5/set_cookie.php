<?php
    $Month = 86400 + time();
    setcookie('Name', 'Jerry', $Month);
    echo "the cookie has been set.";
    ?>
