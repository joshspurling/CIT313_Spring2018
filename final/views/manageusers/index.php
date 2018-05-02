
<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <?php if($u->isAdmin()) {
      ?>

	<?php foreach($users as $u){?>
        <div class="well">
        <div class="row">
        <div class="span2">
        <h3><a href="<?php echo BASE_URL?>members/users/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'];?> <?php echo $u['last_name'];?>"><?php echo $u['email'];?></a></h3>
        <p><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></p>
        </div>
            <div class="span2 offset3">
          <?php if ($u['active'] == '0'){?>
            <form action="<?php echo BASE_URL?>manageusers/approve" method="post" >
            <input type="hidden" name="uID" value="<?php echo $u['uID'];?>"/>
            <button id="approve" type="submit" class="btn btn-primary" >Approve</button>
            </form>
          <?php }?>
          <?php if ($u['user_type'] == '2'){?>
                      <form action="<?php echo BASE_URL?>manageusers/delete" method="post" >
                      <input type="hidden" name="uID" value="<?php echo $u['uID'];?>"/>
                      <button id="delete" type="submit" class="btn btn-primary" >Delete</button>
                      </form>
                      <?php } ?>
              </div>
            </div>
          </div>
          <?php }?>
        <?php }?>


</div>

<?php include('views/elements/footer.php');?>
