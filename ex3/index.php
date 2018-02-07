<?php
function myLoad($class) {
  include_once('classes/'.$class.'.class.php');
}

spl_autoload_register('myLoad');


$registered = new RegisteredUser('Regular User', 100);
$registered->first_name = 'Joe';
$registered->last_name = 'Schmo';
$registered->email_address = 'jschmo@schmo.com';

$admin = new Admin('Administrator', 200);
$admin->first_name = 'Jane';
$admin->last_name = 'Doe';
$admin->email_address = 'jdoe@doe.com';

$calculate = Admin::calculate(2,10);

echo 'User Level: ' . $registered->user_level;
echo '<br>Registered User ID: ' . $registered->user_id;
echo '<br>Registered User Type: ' . $registered->user_type;
echo '<br>Registered First Name: ' . $registered->first_name;
echo '<br>Registered Last Name: ' . $registered->last_name;
echo '<br>Registered Email: ' . $registered->email_address;
echo '<hr>User Level: ' . $admin->user_level;
echo '<br>Admin User ID: ' . $admin->user_id;
echo '<br>Admin User Type: ' . $admin->user_type;
echo '<br>Admin First Name: ' . $admin->first_name;
echo '<br>Admin Last Name: ' . $admin->last_name;
echo '<br>Admin Email: ' . $admin->email_address;
echo '<hr>Calculation: ' . $calculate;
 ?>
 <hr><a href="registration.php">Registration Form</a>
