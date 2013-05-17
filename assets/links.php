<?php 
$bowerLocation = "assets/components";

 ?>
<?php //jQuery at the top ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php //jQuery plugins to be loaded from array ?>


<?php //REQUIRED CSS ?>
<?php echo "<link rel=\"stylesheet\" href=\"".$bowerLocation."/normalize-css/normalize.css\">";?>
<link rel="stylesheet" href="assets/css/style.css" media="all" type="text/css">




<?php //extra css for page ?>
<?php
if ($extraCSS == "") {
	echo "<!--NO custom css on this page -->";
}else{
 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/custom_css/".$extraCSS."\">";
}
 ?>
 
 
 
 
<?php //prefix-free at the bottom under ALL css ?>
<?php echo "<script src=\"".$bowerLocation."/prefixfree.min/index.js\"></script>"; ?>