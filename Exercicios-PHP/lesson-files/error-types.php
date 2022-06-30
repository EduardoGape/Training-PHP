<?php
/** MUST RETURN POSITIVE NUMBER */
function multiply($x, $y) {
	if ( $x < 0 || $y < 0 ) {
		throw new Exception( "The result will not be positive." );
	}
	return $x * $y;
}

echo '<h3>Warning Error</h3>';
include( 'variables.php' );

echo 'Warning: Has code terminated?';

echo '<h3>Parse Error</h3>';

echo 'I\'ve been around the block!';

echo 'Parse: Has code terminated?';

echo '<h3>Fatal Error</h3>';

try {
	$x = multiply( -431, 143 );
} catch( Exception $e ) {
	echo $e->getMessage();
}

echo 'Fatal: Has code terminated?';

echo '<h3>Notice Error</h3>';

echo $x;

echo 'Notice: Has code terminated?';

echo 'I\'ve been around the block!';


if( ( $x < 50 ) || ( $x > 1000000000 ) ) {
	echo "Hello!";
}


$a = array(3, 4, 5, 6);
$b = array( 'red' => 'Stop',
		'yellow' => 'Slow',
		'green' => 'Go',
);

