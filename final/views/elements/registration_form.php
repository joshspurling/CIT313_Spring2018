<form id="registration_form" name="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />

<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />

<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100" required="password" />

<label for="password_again">Confirm Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password_again" name="password_again" value="<?php echo $password;?>" maxlength="100" required="password" />
<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>$( "#registration_form" ).validate({
  rules: {
    first_name: "required",
    last_name: "required",
    email: "required",
    password_again: {
      equalTo: "#password"
    },
    password: {
      required: true,
      minlength: 5,
      maxlength: 100
    }
    }
  });</script>
