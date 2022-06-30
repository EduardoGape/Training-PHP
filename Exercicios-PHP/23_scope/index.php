<?php
function double( $a ) {
    return $a * 2;
}

function triple( &$a ) {
    $a *= 3;
}

function quad() {
    //global $a;
    $GLOBALS['a'] *= 4;
}

$a = 5;
echo double($a);

echo "<p>$a</p>";

triple( $a );

echo "<p>$a</p>";

$b = 10;
$c =& $b;
$c = 7;
echo $b;

$numbers = array(1,2,3);
foreach( $numbers as &$num ) {
    triple($num);
}
print_r( $numbers );

$a = 5;
quad();
echo "<p>$a</p>";