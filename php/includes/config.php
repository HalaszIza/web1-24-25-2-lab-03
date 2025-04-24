<?php
// boolean
$active = false;

// numbers
$age = 44;
$price = 44.3;

// string 
$name = 'Joe';
$message = 'Hello world!';
// echo 'My name is $name'; //mindent kiír ami benne van
// echo "My name is $name"; //változót keres és azt írja ki

// array
$numbers = [3, 5, 7, 9];
$numbers2 = array(4, 5, 7);

// associtive array
$settings = ['time' => 44, 'active' => true];
// echo $settings['time'];

//object
$user = new stdClass;
$user->name = 'Jack Reacher';
$user->address = 'unknown';
$user->weight = 130;

// menu
$menu = [
    ['link' => 'index.php?page=home', 'text' => 'Home'],
    ['link' => 'index.php?page=user', 'text' => 'Users'],
    ['link' => 'index.php?page=products', 'text' => 'Products'],
];