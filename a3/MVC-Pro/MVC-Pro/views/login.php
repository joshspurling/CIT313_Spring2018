<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
	  </div>
	<div class="row">
		    <div class="span8">
					<h3>Log in</h3>
        <form action="<?php echo BASE_URL?>login/<?php echo $task?>" method="post" onsubmit="editor.post()">
        	<label>Username</label>
          <input type="username" class="span6" name="username" required>
     			<label>Password</label>
          <input type="password" class="span6" name="password" required>
    			<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="login" type="submit" class="btn btn-primary" >Log in</button>
        </form>
      </div>
    </div>
</div>
<?php include('elements/footer.php');?>
