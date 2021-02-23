<?php //query.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn -> connect_error) die ($conn -> connect_error);

$query = "SELECT * FROM drinks";
$result = $conn -> query($query);
if(!$result) die ($conn->error);

$rows = $result->num_rows;

for($j = 0; $j < $rows; ++$j)
{
    $result -> data_seek($j);
    echo 'ID: ' .$result->fetch_assoc()['ID']  .'<br>';
    $result -> data_seek($j);
    echo 'Name: ' .$result->fetch_assoc()['Name']  .'<br>';
    $result -> data_seek($j);
    echo 'Price: ' .$result->fetch_assoc()['Price']  .'<br>';
    $result -> data_seek($j);
    echo 'Size: ' .$result->fetch_assoc()['Size']  .'<br>';
    $result -> data_seek($j);
    echo 'IMG: ' .$result->fetch_assoc()['Image']  .'<br><br>';
}
$result ->close();
$conn ->close();
?>