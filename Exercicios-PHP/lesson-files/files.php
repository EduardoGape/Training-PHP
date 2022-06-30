<?php require_once 'inc/header.php'; 

	echo '<h4><code>readfile()</code></h4>';
	readfile( 'treasure-island.txt' ); 
	echo '<hr/>';

	echo '<h4><code>file_get_contents()</code></h4>';
	$text = file_get_contents( 'treasure-island.txt' );
	var_dump( $text );

	echo $text;
	echo '<hr/>';

	echo '<h4><code>file()</code></h4>';
	$text = file( 'treasure-island.txt' );
	var_dump( $text );
	echo '<hr/>';

	foreach($text as $line) {
		echo "<p>$line</p>";
	}

	echo '<hr/>';
	echo '<h4><code>file() with website</code></h4>';
	$text = file_get_contents( 'https://casabona.org' );
	//var_dump( $text );

	if( strpos( $text, 'wp-content' ) ) {
		echo '<p>This website is running WordPress</p>';
	}

	require_once 'inc/footer.php';


