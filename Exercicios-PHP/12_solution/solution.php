<?php
$min = 1; 
$max = 50;
$guess = 100; //Change this value to test!
$num = 16; // Change this value to test!

// If you really want to go nuts, try this:
$num = rand($min, $max);

if ( $guess < $min || $guess > $max ) {
    echo '<p>Your guess is out of range.</p>';
    exit();
}

if ( $num == $guess ) {
    echo '<h3>That\'s Correct!</h3>';
} else if ( $num > $guess ) {
    echo '<p>Sorry - that guess is too low.</p>';
} else {
    echo '<p>Sorry - that guess is too high.</p>';
}


print_r( $num );