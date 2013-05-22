<?php 
//set variable for password
$password = "hello";
//on submit retreive password input
$passwordInput = $POST['password'];
//strip password entry of tags
$stripedInput = strip_tags($passwordInput);
//check password
if ($stripedInput === $password) {
	# code...
}
// Redirection domain and phisical dir
$server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
$next_page = 'index.php';
/* The header() function sends a HTTP message The 303 code asks the server to use GET when redirecting to another page */
header('HTTP/1.1 303 See Other');

if ($stripedInput != $password){
	// Back to form page
   		$next_page = 'login.php';
   		// Add error message to the query string
		$error = "badpassword";
  		 $query_string .= '&error=' . $error;
  		 // redirect to contact page
  		 header('Location: http://' . $server_dir . $next_page . $query_string);
	}elseif ($stripedInput == $password){
		header('Location: http://' . $server_dir . $next_page);
	}


 ?>






<form action="#" method="post">
	<p>
	<label for="password">password</label>
	<input type="password" name="password" id="password">
	</p>
	<p><input type="submit" value="Login"></p>
</form>