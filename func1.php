<?php
//Function
//1.User-defined a Function
function add(){
    $a = 10; //initialization is input
    $b = 5; //initialization is input
    $add = $a + $b; //expression Code bolc
    echo "This is a Function Add = ".$add ."<br />"; //display = Output
}

function sub(){
    $a = 10;
    $b = 5;
    $sub = $a - $b;
    echo "This is a Function Sub = ".$sub ."<br />";
}

function division(){
    $a = 10;
    $b = 5;
    $division = $a / $b;
    echo "This is a Function Division = ".$division ."<br />";
}

function multiply(){
    $a = 10;
    $b = 5;
    $multip = $a * $b;
    echo "This is a Function Multiply = ".$multip ."<br />";
}
add();
sub();
division();
multiply();