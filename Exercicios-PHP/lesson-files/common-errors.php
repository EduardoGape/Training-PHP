<?php
	//require( 'error-types.php' ); 
	//header( 'Location: index.php' );

/** MUST RETURN POSITIVE NUMBER */
function multiply($x, $y) {
	if ( $x < 0 || $y < 0 ) {
		throw new Exception( "The result will not be positive." );
	}
	return $x * $y;
}

try {
	$x = multiply( -431, 143 );
} catch( Exception $e ) {
	echo $e->getMessage();
}