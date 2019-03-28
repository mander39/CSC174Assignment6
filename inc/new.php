<?php
include('inc/renderform.php');

// connect to the database
include('inc/connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

	// check to make sure both fields are entered
	if ($firstname == '' || $email == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $email, $error);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO mytable (firstname, email) VALUES ('$firstname', '$email')");

		// once saved, redirect back to the view page
		header("Location: index.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','');
}
?>