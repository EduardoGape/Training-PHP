    <h2>Contact</h2>
   
	<form name="contact" method="POST" action="process.php">
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
