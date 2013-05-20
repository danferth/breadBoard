<p>
		this test is to find out why <code>php echo or print</code> is adding an empty <code>p tag</code>
	</p>
	<hr />
	 <?php 
		$hello = "this is text that is not in a <code>p tag</code> it should be plain text maybe?";
		$world = "<p>This is inside of a <code>p tag</code> and it should be <code>echoed</code> as such, not sure as this is a test";
		?>
		<p><strong>echo</strong></p>
		<?php
		echo $hello;
		echo $world;
		?>
		<hr />
		<p><strong>print</strong></p>
		<?php
		print $hello;
		print $world;
 	?> 
 	
 	     <h3>conclusion</h3>
 	     <ol>
 	     	<li>text <strong>NOT</strong> in a <code>p tag</code> is rendoring as plain text.</li>
 	     	<li>Problem must be somewhere in the code for htslabs itself</li>
 	     </ol>