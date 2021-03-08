<?php //query.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn -> connect_error) die ($conn -> connect_error);

$query = "SELECT * FROM student";
$result = $conn -> query($query);
if(!$result) die ($conn->error);

$rows = $result->num_rows;

for($j = 0; $j < $rows; ++$j)
{
    $result -> data_seek($j);
    echo 'ID: ' .$result->fetch_assoc()['id']  .'<br>';
    $result -> data_seek($j);
    echo 'Name: ' .$result->fetch_assoc()['name']  .'<br>';
    $result -> data_seek($j);
    echo 'Age: ' .$result->fetch_assoc()['age']  .'<br>';
    $result -> data_seek($j);
    echo 'Address ' .$result->fetch_assoc()['address']  .'<br>';
    $result -> data_seek($j);
    echo 'Telephone' .$result->fetch_assoc()['telephone']  .'<br><br>';
}
$result ->close();
$conn ->close();
require_once 'Add.php'
?>