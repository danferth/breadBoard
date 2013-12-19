<?php 
$bowerLocation = "assets/components";

 //jQuery at the top ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php 
/*jQuery plugins to be loaded from boolean
As new plugins are added for testing: add to STEP 1 & 2 for fuctionality & add to array on STEP 4 */

//STEP 1 check if variable exsist since plugins added may not be set on earlier pages
if (!isset($fitText)) {$fitText = false;}
if (!isset($validation)) {$validation = false;}
if (!isset($prism)) {$prism = false;}
//STEP 2 this function checks for ture/false in plugin variables then loads plugin if needed
function jsCheck ($jsInQuestion, $assetLocation, $folder, $file){
	if (!isset($jsInQuestion)) {
		$jsInQuestion = false;
	}else{
		if ($jsInQuestion == false) {
			//do nothing plugin is inactive
		}else{
			echo "<script src=\"".$assetLocation."/".$folder."/".$file."\"></script>";
		}
	}
}
//STEP 3 call installed plugins
echo jsCheck($fitText, $bowerLocation, 'FitText.js', 'jquery.fittext.js');
echo jsCheck($validation, $bowerLocation, 'jquery.validation', 'jquery.validate.js');
echo jsCheck($prism, 'assets', 'coffee', 'prism.js');
if ($prism == true) {
	echo "<link rel=\"stylesheet\" href=\"assets/coffee/prism.css\">";
}
//STEP 4 for footer documentation
$usedPlugins = array('fitText.js' => $fitText, 'jquery.validate.js' => $validation, 'prism.js' => $prism);
function used($pluginArray){
	echo "<em>Plugins Used</em>: ";
	foreach ($pluginArray as $key => $value) {
		if ($value == true) {
			echo $key." <span>|</span> ";
		}
	}
}
?>

<?php //REQUIRED CSS ?>
<?php echo "<link rel=\"stylesheet\" href=\"".$bowerLocation."/normalize-css/normalize.css\">";?>
<link rel="stylesheet" href="<?php echo $root; ?>/assets/css/style.css" media="all" type="text/css">

<?php 
//extra css for page

if ($extraCSS == "") {
	echo "<!--NO custom css on this page -->";
}else{
 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$root."assets/custom_css/".$extraCSS."\">";
}
?>
  
<?php //prefix-free at the bottom under ALL css ?>
<?php echo "<script src=\"".$bowerLocation."/prefixfree.min/index.js\"></script>"; ?>