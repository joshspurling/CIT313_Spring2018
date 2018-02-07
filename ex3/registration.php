<html>
  <form action="results.php"  id="registration" method="post">
				<fieldset>
					<legend>Registration Form</legend>
					<ul>
							<li><label for "firstName">First Name:</label>
							<input type="text" name="firstName" id="firstName" autofocus placeholder="enter your first name" required/></li>
							<li><label for "lastName">Last Name:</label>
							<input type="text" name="lastName" id="lastName" placeholder="enter your last name" required/></li>
							<li><label for "email">Email Address:</label>
							<input type="email" name="email" id="email" placeholder="email@address.com" required/></li>
					</ul>
						<div id="submit">
							<input type="submit" class="submit" value="Submit" >
						</div>
					</fieldset>
	</form>
</html>
