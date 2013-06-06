<p>This page reserved for super <strong>Quick &amp; Dirty</strong> test of <code>php</code> or <code>js</code></p>
<hr>
<h2>working on creating links from files in root directory</h2>
<?php 

//glob() creates aray from files ending with .php
$fileNames = glob('*.php');

//cycle through glob() array
foreach ($fileNames as $key => $value) {
	//remove index and template files
	if ($value != 'index.php' && $value != 'template.php') {
		//echo links
		echo "<a href=\"" . $value . "\">" . $value . "</a><br>";
	}
}

/*******************************************

need to find a way to create name of link insead of using file name
possibly naming convention can be used like "file_nameOfLink.php" and
then use regex or some built in php function to separeate after the "_"
and before ".php" to creat the string for the link name hmmmmmm......

Time to learn regex.... 

*********************************************/

 ?>
