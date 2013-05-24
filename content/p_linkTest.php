<?php
	$links = array( '<a href="#">link 1</a>',
					'<a href="#">link 2</a>',
					'<a href="#">link 3</a>',
					'<a href="#">link 4</a>',
					'<a href="#">link 5</a>',
					'<a href="#">link 6</a>',
					'<a href="#">link 7</a>',
					'<a href="#">link 8</a>',
					'<a href="#">link 9</a>',
					'<a href="#">link 0</a>' );

	$random_links = array_rand($links, 4);
?>

<p>
		Use array to hold catalog of links and have random selection displayed on refresh, the array on this page has 10 links
	</p>
	
	<hr />
	<?php 
			echo $links[$random_links[0]] . "<br>" . $links[$random_links[1]];
				?>
				<br><br>
				<?php
			echo $links[$random_links[2]] . "<br>" . $links[$random_links[3]];
		 ?>
 	
 	     <h3>conclusion</h3>
 	     <ol>
 	     	<li>works best with more than needed amount of links</li>
 	     	<li>Start with <code>0</code></code>
 	     </li> 
 	     </ol>   