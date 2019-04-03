<?php
require_once("config.php");

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
    // get form data, making sure it is valid
    $firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
    $email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));

    // check to make sure both fields are entered
    if ($firstname == '' || $email == '') {
        // generate error message
        error_reporting(0); //Hide ugly wamp error for empty fields 
        $error = 'ERROR: Please fill in all required fields!';

    } else {
        // save the data to the database
        mysqli_query($connection, "INSERT INTO emails (firstname, email) VALUES ('$firstname', '$email')");
        echo("<script>location.href = 'thanks.php';</script>");
        mysqli_close($connection);
    }
}

?>
	<form action="#" method="post" class="pure-form pure-form-aligned row formsec">
        <fieldset class="column">
            <div class="pure-control-group">
                <label for="firstname">First name</label>
                <input id="firstname" type="text" placeholder="First Name" name="firstname"/>
            </div>

            <div class="pure-control-group">
                <label for="email">Email address</label>
                <input id="email" type="email" placeholder="Email address" name="email"/>
            </div>

            <div class="pure-controls">
                <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> Sign me up for the Starbucks Secret Menu Info newsletter too!
                </label>
                <input type="submit" name="submit" value="Submit" class="button subbutton">
            </div>
        </fieldset>
        <?php if ($error != '') { echo '<div style="padding:4px; border:1px solid red; color:red; margin-left: 10%;">'.$error.'</div>'; }?>
    </form>
