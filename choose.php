<?php

	require_once("support.php");
	session_start();

	 if (isset($_POST['settings'])){
		header("Location: getUser.php");
     }
	 
     if (isset($_POST['home'])){
		header("Location: main.php");
     }
	 if (isset($_POST['personalTrainer'])){
		//RICHARDS FILES
		header("Location: WorkoutPlansSelection.html");
     }
	  if (isset($_POST['createWorkout'])){
		//RODRIGOS BODY PART CHOICE
		header("Location: targetArea.php");
     }
	  if (isset($_POST['doWorkout'])){
		header("Location: doWorkout.php");
     }
	 
   

$body = <<<EOBODY
<body>
	<header>
		<form action="$_SERVER[PHP_SELF]" method="post">
			<input type="submit" name="home" id="home" value="" />
			<input type="submit" name="settings" id="settings" value="" />
		</form>
	</header>

	<img src="images/getBuilt.png" alt="Built" width=450 height=180 id="built" />

	<form action="$_SERVER[PHP_SELF]" method="post" id="chooseForm">
		<input type="submit" name="personalTrainer" id="personalTrainer" value="Personal Trainer" /><br>
		<input type="submit" name="createWorkout" id="createWorkout" value="Create Workout" /><br>
		<input type="submit" name="doWorkout" id="doWorkout" " value="Do Workout " /><br>
	</form>
EOBODY;

echo generatePage($body, "Choose", "css/choose.css");
?>