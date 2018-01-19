<?php
include('_includes/header.inc.php');

$favorites = array ('name' => 'Josh', 'color' => 'black', 'movie' => 'Monty Python and the Holy Grail',
'book' => 'Of Mice and Men', 'website'=> 'soundcloud.com');

function displayFavorites($favorites) {
  echo '<ul>';
    foreach ($favorites as $key => $item) {
        if ($key != 'name') {
    echo '<li> '. $item . ' </li>';
        }
  }
  echo '</ul>';
}
     ?>


<body>
<h1>
<?php
echo $favorites ['name'];
displayFavorites($favorites);
 ?>
</h1>

</body>


<?php
include('_includes/footer.inc.php');
?>
