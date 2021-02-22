<?php
include "empdetail.php";
echo "The Employee details: <br>";
$empdet = new empdetail(101,"John William", "Miami", "Account");
echo $empdet->empid,"<br>";
echo $empdet->empname,"<br>";
echo $empdet->empcity,"<br>";
echo $empdet->empdept;
?>

