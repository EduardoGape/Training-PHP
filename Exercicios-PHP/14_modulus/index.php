<?php
$a = 5;
if( $a % 2 == 0 ) {
    echo "<p>$a is even.</p>";
} else {
    echo "<p>$a is odd.</p>";
}

$a = 15;
$b = 5;

echo ( $a % $b == 0 ) ? "<p>$b is a factor of $a</p>" : "<p>$b is not a factor of $a</p>";

echo -$a % 2;