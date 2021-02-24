<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn -> connect_error) die ($conn ->connect_error);

    $query = "UPDATE drinks SET Name = 'abc' WHERE Name = 'CÀ Phê MOcha'";
    $result = $conn ->query($query);
    if(!$result)die ("Database access failed: " .$conn->connect_error);
?>
