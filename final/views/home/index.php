<?php
include('views/elements/header.php');?>

<div class="container">
  <div class="row">
    <div class="span7">
      <img src="views\img\window.jpg" alt="img"  >
    </div>
    <div class="span5">
			<div class="well">
      <h1 class="text-center">Bizarre Blog</h1><hr/>
      <p class="text-center">Lorem ipsum dolor sit amet, an iudico maluisset vim.
         Pri ex nominati postulant, et mel sumo agam, pro vocibus facilisis accusamus
         no. Ea unum minimum explicari nec, alii senserit et mei. Error fabulas
         concludaturque te vis, quo no inani incorrupte. Ea facer maluisset dignissim
         ius, duo an deserunt splendide, in mel tota oratio corpora. Ne etiam
         inimicus prodesset has, homero populo tacimates per id, et his omnis
         soluta euripidis. Et debet bonorum offendit sed.</p><hr/>
      <h3>Get your local weather</h3>
      <form method="post" action="<?php echo BASE_URL?>weather/getresults">

       <label for "zip">Enter Your Zip Code</label>
       <input type="text" name="zip" id="zip" required="zip" />
       <br/>
       <button type="submit" class="btn">Load Results</button>

   </form>
			</div>
		</div>
  </div>
</div>

<div class="container">
	<div class="page-header">
    <h3>Latest news from <?php echo $title;?></h3>
  </div>
    <?php
    echo $data;
    ?>
</div>
<?php include('views/elements/footer.php');?>
