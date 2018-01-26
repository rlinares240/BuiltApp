<?php

	require_once("support.php");
	session_start();

     if (isset($_POST['login'])){
		$_SESSION['email']= trim($_POST['email']);
		$_SESSION['password']= trim($_POST['password']);						  
		header("Location: login.php");
     }
	  if (isset($_POST['register'])){
		header("Location: form.php");
     }
	  if (isset($_POST['settings'])){
		header("Location: settings.php");
     }
	 
   

$body = <<<EOBODY
<body>
	<img src="images/logo.jpg" alt="Built" width=700 height=450 id="built" />

	<form action="$_SERVER[PHP_SELF]" method="post">
		<input type="text" name="email" id="email" value="email" /><br>
		<input type="password" name="password" id="password" value="" /><br>
		<input type="submit" name="login" id="login" value="" />
		<input type="submit" name="register" id="register" value="" />
	</form>
</body>
EOBODY;

echo generatePage($body, "Main", "css/main.css");
?>