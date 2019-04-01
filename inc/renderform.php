<?php
require_once("connect-db.php");
function renderForm($id, $firstname, $email, $error) {
?>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
	<form action="#" method="post" class="pure-form pure-form-aligned row">
        <fieldset class="column">
            <div class="pure-control-group">
                <label for="firstname">First name</label>
                <input id="firstname" type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>"/>
            </div>

            <div class="pure-control-group">
                <label for="email">Email address</label>
                <input id="email" type="email" placeholder="Email address" name="email" value="<?php echo $email; ?>"/>
            </div>

            <div class="pure-controls">
                <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> Sign me up for the Starbucks Secret Menu Info newsletter too!
                </label>
                <input type="submit" name="submit" value="Submit">
            </div>
        </fieldset>
    </form>
<?php
}
mysqli_close($connection);
?>
