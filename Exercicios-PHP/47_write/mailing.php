<?php 
	$form_data = $_POST ?? null; 	
	$form_is_complete = true;
	function join_mailing_list( $form_data ) {

		//Prep Data
		$name = filter_var( strip_tags( trim( $form_data['name'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$email = filter_var( $form_data['email'], FILTER_SANITIZE_EMAIL );

		//Write Data to File.
		$entry = "$name, $email \n";
		file_put_contents( 'mailing-list.txt', $entry, FILE_APPEND );
		echo "<h3>Thanks! You're on the list!</h3>";
	
	}
	
?>
    <h2>Join Mailing List</h2>
	<form name="contact" method="POST">
		<div>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
		</div>
		<div>
			<label for="email">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php 
	if ( true === $form_is_complete && ! empty( $form_data ) ) {
		join_mailing_list( $form_data );
	}