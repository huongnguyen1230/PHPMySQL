<?php
class empdetail
{
    var $empid;
    var $empname;
    var $empcity;
    var $empdept;
    function enteremp($id, $name, $city, $dept)
    {
        $this ->empid=$id;
        $this ->empname=$name;
        $this ->empcity = $city;
        $this ->empdept = $dept;
    }
    
}
?>