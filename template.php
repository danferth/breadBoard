<?php 
//setting content location and GO variable
$contentLocation = "content";
$contentFile = $contentLocation."/".$content;
$contentGo = file_get_contents($contentFile);

//setting js location and GO variable
$jsLocation = "coffee";
$js = $jsLocation."/".$jsFile;
$jsGo = "";
if ($jsFile == "") {
	$jsGo = "//No jQuery loaded into page";
}else{
$jsGo = file_get_contents($js);
}
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta name="description" content=<?php echo "\"".$description."\""; ?>>
	<link rel="stylesheet" href="components/normalize-css/normalize.css">
	<link rel="stylesheet" href="css/style.css" media="all" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="components/prefixfree.min/index.js"></script>
</head>
<body>
<div class=<?php echo "\"taco ".$tacoExtraClasses."\""; ?>>
	<h1><?php echo $heading; ?></h1>
	
	<?php echo $contentGo; ?>
	       
</div>
	<script>
		<?php echo $jsGo; ?>
	</script>
</body>
</html>