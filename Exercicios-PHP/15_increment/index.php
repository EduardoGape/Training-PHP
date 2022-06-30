<?php 
$a = 5;
//this will be 6
echo 'The value of $a is ' . --$a . '<br/>'; 
//This will still be 6
echo 'Now $a is ' . $a . '<br/>'; 


$a = 5;
//this will still be 5
echo 'The value of $a is ' . $a-- . '<br/>'; 
//This will be 6
echo 'Now $a is ' . $a . '<br/>'; 

$a = 'A';
echo '$a is ' . ++$a . '<br/>';

$a = 1;

$a /= 5;
echo $a;

