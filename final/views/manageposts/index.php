<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

        <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add Post</a>
				<?php if($u->isAdmin()) {
		    ?>
				<div class="container">
						<hr/>
						<?php foreach($posts as $p){?>
		            <h3><?php echo $p['title'];?></h3>
		            <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
		            <div style="margin-top:15px;"><a class="btn btn-primary" href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>">View</a>
									<a class="btn btn-primary" href="<?php echo BASE_URL?>manageposts/edit/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>" category="<?php echo $p['category'];?>">Edit</a>
									<a class="btn btn-primary" href="<?php echo BASE_URL?>manageposts/delete/<?php echo $p['pID'];?>">Delete</a>
								</div>

		        <?php }?>
				</div>
				<?php
			} ?>
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
