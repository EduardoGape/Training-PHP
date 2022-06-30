<?php
	require_once 'inc/header.php'; 
	if ( ! empty( $_POST ) ) {
		echo filter_var($_POST['message'], FILTER_SANITIZE_MAGIC_QUOTES);
	}
?>

<form name="clean" class="clean" method="POST">
	<textarea name="message"></textarea>
	<div><input type="submit" name="submit" value="Submit" /></div>
</form>

<?php require_once 'inc/footer.php'; 