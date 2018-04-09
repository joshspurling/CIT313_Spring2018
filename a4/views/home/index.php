<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title; ?></h1>
		 </div>

		 <h4><a href="<?php echo $item_link?>"><?php echo $item_title; ?></a> (<?php echo date("F j, Y, g:i a", strtotime($item_date)); ?>)</h4>
		 <p><?php echo $item_description ?></p></h4>


 

	<?php

		if (isset($_SESSION['loggedout'])) {
			echo $_SESSION['loggedout'];
			unset($_SESSION['loggedout']);
	}
unset($_SESSION['loggedout']);
		?>
	</h4>
</div>
<?php
include('views/elements/footer.php');?>
