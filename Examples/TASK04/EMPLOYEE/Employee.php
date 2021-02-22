<?php
class Employee
{
    private $man_no;
    private $name;
    public function _construct(){

    }

    public function getManNo()
    {
        return $this->man_no;
    }
    public function getName()
    {
        return $this->name;
    }
    //
    public function setManNo($man_no)
    {
        $this->man_no = $man_no;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}