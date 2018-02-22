<?php
function myLoad($class) {
  include_once('classes/'.$class.'.class.php');

}

spl_autoload_register('myLoad');

$user = new RegisteredUser('newuser', 'regular');

$user->first_name = $_POST["firstName"];
$user->last_name = $_POST["lastName"];
$user->email_address = $_POST["email"];

if ($user instanceof RegisteredUser) {
  echo 'First Name: ' . $user->first_name;
  echo '<br>Last Name: ' . $user->last_name;
  echo '<br>Email: ' . $user->email_address;
}
?>
