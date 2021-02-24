<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn -> connect_error) die ($conn ->connect_error);

    $query = "INSERT INTO drinks VALUE (006, 'Cafe', 30000, 'M')";
    $result = $conn ->query($query);
    if(!$result)die ("Database access failed: " .$conn->connect_error);
    echo "The Insert ID was: " .$conn->insert_id;
?>
