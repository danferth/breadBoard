<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get URL values with jQuery</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css" media="all" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://htslabs.com/java/prefix.js"></script>
	<script>
		$(document).ready(function(){
			// this function will grab the $_GET values from the url and put them into an array
			$.extend({
  				getUrlVars: function(){
    				var vars = [], hash;
    				var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    				for(var i = 0; i < hashes.length; i++){
      					hash = hashes[i].split('=');
      					vars.push(hash[0]);
      					vars[hash[0]] = hash[1];
    				}
    			return vars;
  				},
  				getUrlVar: function(name){
    			return $.getUrlVars()[name];
  				}
			});
			//this is how you retreive a single value "name"
			var byName = $.getUrlVar('name');

			//alert (byName);


		});
	</script>
</head>
<body>
<div class="taco">
	<h1>This is the Ding Dong test</h1>
	<p>
		Get URL values with jQuery. Use form below to see in action
	</p>
	<form action="dingdong.php" method="get">
		
		<input type="text" name="name" id="" value="honey boo boo">
		<input type="submit" value="ding dong!!">
	</form>
	<hr />
	<p>output of query <code>name</code> </p>
	 <?php  
$var = $_GET['name'];

echo "<strong class=\"output\">".$var."</strong>";
?>	
 	
 	     <h3>conclusion</h3>
 	     <ol>
 	     	<li>Possible to use form with <code>method="GET"</code> and use appended query in <code>jQuery</code></li>
 	     	<li>Used on htslabs.com - on product pages form with hidden <code>input</code>
 	     		<ol>
 	     			<li>user clicks submit and <code>action</code> takes them to tech library</li>
 	     			<li>On library query string has value of hidden <code>input</code></li>
 	     			<li>jQuery used to open product section they were on</li>
 	     	
 	     		</ol>
 	     </li>     
</div>
	<script>
		$(document).ready(function(){
			//jQuery Please

			$('.output').css('color','red').hide().fadeIn(1000);
		});
	</script>
</body>
</html>