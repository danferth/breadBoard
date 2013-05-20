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