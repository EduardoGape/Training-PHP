	<?php $form_complete = null; ?>
	<h2>Contact</h2>
   
	<form name="contact" method="POST">
		<div>
			<?php 
				if ( isset( $_POST['name'] ) && empty( trim( $_POST['name'] ) ) ) {
				 echo "<p class=\"alert\">Name is required</p>"; 
				 $form_complete = false;
				}
			?>
			<label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
		</div>
		<div>
			<?php 
				if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ) {
				 echo "<p class=\"alert\">Email is required</p>"; 
				 $form_complete = false;
				}
			?>
			<label for="name">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
		</div>
		<div>
			<p>Reason for Contact:</p>
			<input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
			<input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
			<input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
		</div>
		<div>
			<p>What topics do you like reading about? (Check all that apply):</p>
			<input type="checkbox" name="topics[]" id="HTML" value="HTML" /> <label for="HTML">HTML</label>
			<input type="checkbox" name="topics[]" id="CSS" value="CSS" /> <label for="CSS">CSS</label>
			<input type="checkbox" name="topics[]" id="PHP" value="PHP" /> <label for="PHP">PHP</label>
			<input type="checkbox" name="topics[]" id="WordPress" value="WordPress" /> <label for="WordPress">WordPress</label>
		</div>
		<div>
			<p>What's your favorite movie(s)?</p>
			<select name="movie[]" id="movie" multiple>
				<option value="Star Wars I">Star Wars I</option>
				<option value="Star Wars II">Star Wars II</option>
				<option value="Star Wars III">Star Wars III</option>
				<option value="Star Wars IV">Star Wars IV</option>
				<option value="Star Wars V">Star Wars V</option>
				<option value="Star Wars VI">Star Wars VI</option>
				<option value="Star Wars VII">Star Wars VII</option>
				<option value="Star Wars VIII">Star Wars VIII</option>
				<option value="Star Wars IX">Star Wars IX</option>
				<option value="none">I don't like movies</option>
			</select>
		</div>
		<div>
		<?php 
				if ( isset( $_POST['message'] ) && empty( trim( $_POST['message'] ) ) ) {
				 echo "<p class=\"alert\">Message is required</p>"; 
				 $form_complete = false;
				}
			?>
			<label for="message">What's your message?</label>
			<textarea name="message" required></textarea>
		</div>
		<div><input type="submit" name="submit" value="Submit" /></div>
	</form>

	<style>
		.alert {
			color: red;
			font-weight: bold;
		}
	</style>

	<?php
	$form_complete ?: true;
	if ( $form_complete ) {
		foreach( $_POST as $name => $value ) {
			if ( 'submit' != $name ) {
				if ( is_array( $value ) ) {
					$value = implode( ', ', $value );
				}
				echo "<p><b>" . ucfirst( $name ) ."</b> is $value.</p>";
			}
		}
	}