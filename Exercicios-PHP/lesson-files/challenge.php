<?php 
	$form_data = $_POST ?? null; 	
	$form_is_complete = true;

	function check_required( $value ) {
		if( empty( trim( $value ) ) ) {
			echo '<p class="alert">This is a required field.</p>';
			$_GLOBALS['form_is_complete'] = false;
		} 
	}

	function check_email( $email ) {
		$regex= '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
		if ( ! preg_match( $regex, $email ) ) {
			echo '<p class="alert">You did not input a valid email address.</p>';
			$_GLOBALS['form_is_complete'] = false;
		}
	}

	function send_message( $form_data ) {
		$name = filter_var( strip_tags( trim( $_POST['name'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
		$to = "Joe Casabona <joe@casabona.org>";
		$from = "$name <$email>";
		$reason = ucfirst( $_POST['reason'] );
		$subject = "Conact Form Filled out. Reason: $reason";
		$message = filter_var( strip_tags( trim( $_POST['message'] ) ), FILTER_SANITIZE_MAGIC_QUOTES );
		$message = 'From: ' . $from . ', for '. $reason . "\n\n" . $message;

		$headers = 'From: ' . $from . "\r\n" .
    		'Reply-To: ' . $from . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

		if( mail( $to, $subject, $message, $headers ) )  {
			echo "<h3>Your message has been sent!</h3>";
		}
	}
	
?>
    <h2>Contact <?php echo $author; ?></h2>
	<form name="contact" method="POST">
		<div>
			<?php if ( ! empty( $form_data ) ) check_required( $form_data['name'] ); ?>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
		</div>
		<div>
			<?php if ( ! empty( $form_data ) ) check_required( $form_data['email'] ); ?>
			<label for="email">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
		</div>
		<div>
			<p>Reason for Contact:</p>
			<select name="reason" required>
				<option value="Consult">Consultation</option>
				<option value="Question">Question</option>
				<option value="Say Hello">Say Hello</option>
			</select>
		</div>
		<div>
			<label for="message">What's your message?</label><br/>
			<?php if ( ! empty( $form_data ) ) check_required( $form_data['message'] ); ?>
			<textarea name="message" required></textarea>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php 
	if ( true === $form_is_complete) {
		send_message( $form_data );
	}