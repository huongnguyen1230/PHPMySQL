<?php
    class Greetings{
        private $word = "Hello";
    }
    $closure = function ($whom){
        echo "$this -> world $whom\n";
    };
    $obj = new Greetings();

    $closure->call($obj, 'Kevin');
    $closure->call($obj, 'John');
