<?php 
//setting content location and GO variable
$contentLocation = "content";
$contentGo = $contentLocation."/".$content;


//setting js location and GO variable
$jsLocation = "assets/coffee";
$js = $jsLocation."/".$jsFile;
$jsGo = "";
if ($jsFile == "") {
	$jsGo = "<!-- No jQuery loaded into page -->";
}else{
$jsGo = file_get_contents($js);
}
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
	<meta name="description" content=<?php echo "\"".$description."\""; ?>>
<?php

	if (isset($mobileOption) && $mobileOption == true) {
		echo "<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\" />";
	}else{
		echo "<!-- mobile options not set -->";
	}
	

	 
	if (isset($extraHead) && $extraHead != "") {
		echo $extraHead;
	}else{
		echo "<!-- no extra head stuff -->";
	}


	include 'assets/links.php'; ?>
</head>
<body>
<header>
	<a class="homeLink" href="index.php">Take Me Home!</a>
</header>
<div roll="main" class=<?php echo "\"taco ".$tacoExtraClasses."\""; ?>>
	<h1><?php echo $heading; ?></h1>
	
	<?php include $contentGo; ?>
	       
</div>
<footer>
	<?php echo used($usedPlugins); ?>
</footer>
	<script>
		<?php echo $jsGo; ?>
	</script>
</body>
</html>