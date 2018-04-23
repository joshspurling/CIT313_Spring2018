<?php
include('views/elements/header.php');
?>

<div class="container">
	<div class="page-header">
   <h1>Register</h1>

   <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

<?php include('views/elements/registration_form.php');
echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
?>

</div>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>$( "#registration_form" ).validate());</script>

<?php include('views/elements/footer.php');
?>
