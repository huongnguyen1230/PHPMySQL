<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);

$query = "INSERT INTO student(name,age,address,telephone) VALUES('Nguyen Van E', 25,'Ha Noi', 0912345675)";
$result = $conn -> query($query);
echo "Success!!!";
if(!$result) die ($conn->error);

$conn ->close();
?>