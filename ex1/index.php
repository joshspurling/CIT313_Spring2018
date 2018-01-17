 <?php
 /*
Create a function that uses a loop to return every value in the array EXCEPT your name in a unordered list (<ul>) to the screen
Print the results of the function to the screen.*/
include('_includes/header.inc.php');

$favorites = array ('name' => 'Josh', 'color' => 'black', 'movie' => 'Monty Python and the Holy Grail',
'book' => 'Of Mice and Men', 'website'=> 'soundcloud.com');

function displayFavorites() {
  echo '<ul>';
    foreach ($favorites as $item) {
    echo '<li> '. $item . ' </ul>';
  }
  echo '</ul>'
}
     ?>
  </ul>
}
?>
<body>
<h1>
<?php
echo $favorites ['name'];
displayFavorites();
 ?>
</h1>

</body>


<?php
include('_includes/footer.inc.php');
?>
