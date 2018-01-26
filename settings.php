<?php

	require_once("support.php");
	session_start();


	 if (isset($_POST['home'])){
		header("Location: choose.php");
     }
	if (isset($_POST['submitRegister'])){
		$_SESSION['name']= $_POST['name'];
		$_SESSION['email']= $_POST['email'];
		$_SESSION['password']= $_POST['password'];
		$_SESSION['weight']= $_POST['weight'];
		$_SESSION['feet']=$_POST['feet'];
		$_SESSION['inches']=$_POST['inches'];
		//load all fields of form
		header("Location: updateAccount.php");
     }


$body = <<<EOBODY
<body>
	<header>
		<form action="$_SERVER[PHP_SELF]" method="post">
			<input type="submit" name="home" id="home" value="" />
		</form>
	</header>

	<img src="images/getBuilt.png" alt="Built" width=450 height=180 id="built" />

	<form action="$_SERVER[PHP_SELF]" method="post" id="registerForm">
		<fieldset id="inputArea">
			<strong>Name:</strong> <input type="text" name="name" id="name" value= "{$_SESSION['name']}"/><br>
			<strong>Email:</strong> <input type="email" name="email" id="email" value= "{$_SESSION['email']}"/><br/>
			<strong>Password:</strong> <input type="password" name="password" id="password" value= "{$_SESSION['password']}"/><br>
			<strong>Weight:</strong> <input type="text" name="weight" id="weight" value= "{$_SESSION['weight']}"/><br>
			<strong>Height:</strong>&nbsp; <input type="number" name="feet" id="feet" min="2" max="7"value= "{$_SESSION['feet']}"/><em>feet</em>
			<input type="number" name="inches" id="inches" min="0" max="11"value= "{$_SESSION['inches']}"/><em>inches</em><br>
		</fieldset>
		<input type="submit" name="submitRegister" id="submitRegister" value="Update" /><br>
	</form>
EOBODY;

echo generatePage($body, "Update Account", "css/settings.css");
?>