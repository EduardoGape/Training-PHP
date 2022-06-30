<?php 
	require_once 'inc/header.php'; 

	if ( ! empty( $_POST ) ) {
		$name = $_POST['name'];
		$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
		$to = "Joe Casabona <jcasabona@gmail.com>";
		$from = "$name <$email>";
		$reason = ucfirst( $_POST['reason'] );
		$subject = "Conact Form Filled out. Reason: $reason";
		$message = filter_var( strip_tags( $_POST['message'] ), FILTER_SANITIZE_MAGIC_QUOTES );
		$message = "From: $from \n\n $message";

		$headers = 'From: ' . $from . "\r\n" .
    		'Reply-To: ' . $from . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

		if( mail( $to, $subject, $message, $headers ) )  {
			echo "<h3>Your message has been sent!</h3>";
		}
	}
?>
    <h2>Email <?php echo $author; ?></h2>
	<form name="contact" method="POST">
		<div>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" />
		</div>
		<div>
			<label for="name">Email:</label> <input type="text" name="email" placeholder="Your Email" />
		</div>
		<div>
			<p>Reason for Contact:</p>
			<input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
			<input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
			<input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
		</div>

		<div>
			<label for="message">What's your message?</label>
			<textarea name="message"></textarea>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

<?php require_once 'inc/footer.php';