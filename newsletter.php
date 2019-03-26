<?php include 'inc/html-top.inc'; ?>
<main id="center">
	<header class="column">
		<h2>Subscribe to the Newsletter</h2>
		<span class="byline">Never pay full price for coffee again!</span>
	</header>

	<form class="pure-form pure-form-aligned row">
    <fieldset class="column">
        <div class="pure-control-group">
            <label for="name">First name</label>
            <input id="name" type="text" placeholder="First name">
        </div>

        <div class="pure-control-group">
            <label for="email">Email address</label>
            <input id="email" type="email" placeholder="Email address" required="">
        </div>

        <div class="pure-controls">
            <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> Sign me up for the Starbucks Secret Menu Info newsletter too!
            </label>

            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
</main>
</body>
</html>