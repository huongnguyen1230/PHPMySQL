<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn -> connect_error) die ($conn ->connect_error);

    $query = "DELETE FROM drinks WHERE Name = 'Caf Phê Mocha'";
    $result = $conn ->query($query);
    if(!$result)die ("Database access failed: " .$conn->connect_error);
?>