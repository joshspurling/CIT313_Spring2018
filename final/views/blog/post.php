
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'blog/category/'. $categoryID.'">' . $name .'</a>'; ?>
        </sub>
    </div>
    <div class="container">
      <h2>Comments</h2>
<?php foreach($post as $p)  {?>

      <div class="well">
        <div class="row">
        <div class="span8">
      <p><?php echo $commentText;?></p>
      <sub><?php echo 'Posted by: '. $first_name . ' ' . $last_name . ' on ' . $commentDate;?></sub>
        </div>

      <?php if($u->isAdmin()) {
          ?>
          <div class="span2">
              <a href="<?php echo BASE_URL?>blog/delete"><button class= "btn btn-primary">Delete Comment</button></a>
          </div>
            <?php }?>
      </div>
    </div>
    <?php }?>
    </div>

    <?php if($u->isRegistered()) {
    ?>

    <div class="row">
        <div class="span8 offset1">
          <form action="<?php echo BASE_URL?>blog/add" method="post" onsubmit="editor.post()">


            <label>Add Comment</label>
            <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"></textarea>
      			<br/>
            <input type="hidden" name="pID" value="<?php echo $pID?>"/>
            <input type="hidden" name="uID" value="<?php echo $uID?>"/>

            <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
          </form>

        </div>
    </div>

    <?php
    }
    else {
    ?>
    <div class="row">
        <div class="span8 offset1">
    <a href="<?php echo BASE_URL?>login/"><button class="btn btn-primary">Log in</button> </a>
      </div>
    </div>
    <?
    }
    ?>

<?php include('views/elements/footer.php');?>
