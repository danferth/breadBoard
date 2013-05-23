<?php 

//check password
function checkPass(){
/*001 here we are looking for login.php?attempt not login.php.
If login.php?attempt is loaded it will know that $_POST variables are set and will continue with script */
if (isset($_REQUEST['attempt'])) {
		//set variable for password
		$password = "hello";
		//on submit (login.php?attempt) retreive password input
		$passwordInput = $_POST['password'];
		//strip password entry of tags
		$stripedInput = strip_tags($passwordInput);
		//do password and input match
		if ($stripedInput == $password) {
			//go to index.php or....
			$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
			$next_page = 'index.php';
			/* The header() function sends a HTTP message The 303 code asks the server to use GET when redirecting to another page */
			header('HTTP/1.1 303 See Other');
			header('Location: http://' . $server_dir . $next_page);
		}elseif ($stripedInput != $password) {
			//if not display error
			echo "ACCESS DENIED!";
		}	
	}
}
echo checkPass();

 ?>

<!--  sending page to login.php?attempt this makes sure we do not throw errors on the page load as the $_POST variable is not set yet  see comment 001 above -->
<form action="login.php?attempt" method="post">
	<p>
	<label for="password">password</label>
	<input type="password" name="password" id="password">
	</p>
	<p><input type="submit" value="Login"></p>
</form>

<hr>
	
	<h3>conclusion</h3>
 	     <ol>
 	     	<li>Set form to go to ?attempt so <code>$_POST</code> variables do not throw error</li>
 	     	<li>If <code>?attempt</code> is in <code>URL</code> then procced</li>
 	     	<li>place password input into variable</li>
 	     	<li>Strip it of tags and such</li>
 	     	<li>Compair to password set in variable</li>
 	     	<li>if yes then go to index.php</li>
 	     	<li>If not then display error</li> 
