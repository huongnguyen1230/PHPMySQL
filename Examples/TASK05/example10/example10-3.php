<?php
    $query = "SELECT * FROM book";
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
?>