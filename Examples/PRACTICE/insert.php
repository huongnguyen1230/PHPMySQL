<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn -> connect_error) die ($conn -> connect_error);

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$telephone = $_REQUEST['telephone'];


$query = "INSERT INTO student(name,age,address,telephone) VALUES('$name','$age','$address','$telephone')";
$result = $conn -> query($query);
if(!$result) die ($conn->error);
$conn ->close();
require_once 'display.php';
?>