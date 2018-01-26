<?php
	require_once("support.php");
	session_start();

	$host = "localhost";
	$user = "dbuser";
	$password = "goodbyeWorld";
	$database = "groupApplication";
	$table = "usersWorkout";
	
	if (!isset($_SESSION['day'])){
		$_SESSION['day']="";
	}
	
	// To go back to main incase of error
    if (isset($_POST['home'])) {
        header("Location: choose.php");
    }
	
	if(isset($_POST['submitWorkoutDay'])){
		
		$_SESSION['day']= $_POST['day'];
	
		
	    $db_connection = new mysqli($host, $user, $password, $database);
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    } else {
        # echo "Connection to database established<br><br>";
    }
    /* Query */
    $query = "select * from " . $table . " where email=\"{$_SESSION['email']}\"and day=\"{$_SESSION['day']}\"";
    /* Executing query */
    $result = $db_connection->query($query);
    if (!$result) {
        die("Retrieval failed: " . $db_connection->error . $body);
    } else {
        
        /* Number of rows found */
        $num_rows = $result->num_rows;
        if ($num_rows === 0) {
			$_SESSION['workoutList'] = "";
			header("Location:doWorkout.php");
            
        } else {
            for ($row_index = 0; $row_index < $num_rows; $row_index++) {
                $result->data_seek($row_index);
                $row                = $result->fetch_array(MYSQLI_ASSOC);
                // Set sessions to fill out update form with previous info
                $_SESSION['email']  = $row['email'];
                $_SESSION['workoutList']   = $row['workoutList'];
				//LOAD UP NEW TABLE INFO
                header("Location:doWorkout.php");
            }
        }
    }
    /* Freeing memory */
    $result->close();
    
    /* Closing connection */
    $db_connection->close();
    
    }
		
$body = <<<EOBODY
    <header>
       <form action="$_SERVER[PHP_SELF]" method="post">
			<input type="submit" name="home" id="home" value="" />
		</form>
    </header>
		<div id="choose">
			Select Workout Day.
		</div> <br/>
		<div id="chooseDay">
        <form action="$_SERVER[PHP_SELF]" method="post">
			<br>
			<select name ="day">
EOBODY;

if ($_SESSION['day']==1) {
	$body .= "<option value =\"1\" selected=\"selected\"> 1 </option>";
}else {
	$body .= "<option value =\"1\"> 1 </option>";
}
if ($_SESSION['day']==2) {
	$body .= "<option value =\"2\" selected=\"selected\"> 2 </option>";
}else {
	$body .= "<option value =\"2\"> 2 </option>";
}
if ($_SESSION['day']==3) {
	$body .= "<option value =\"3\" selected=\"selected\"> 3 </option>";
}else {
	$body .= "<option value =\"3\"> 3 </option>";
}
if ($_SESSION['day']==4) {
	$body .= "<option value =\"4\" selected=\"selected\"> 4 </option>";
}else {
	$body .= "<option value =\"4\"> 4 </option>";
}
if ($_SESSION['day']==5) {
	$body .= "<option value =\"5\" selected=\"selected\"> 5 </option>";
}else {
	$body .= "<option value =\"5\"> 5 </option>";
}

$body .= <<<EOBODY
	</select> <input type ="submit" id ="submit" name ="submitWorkoutDay" value = "Submit"/><br><br>
        </form>
		</div>
EOBODY;

 
 $workoutTable="";
 
	if (isset($_SESSION['workoutList']) && !empty($_SESSION['workoutList'])){
	$workoutTable =<<<EODATA
	<div id="workoutArea">
	<table>
		<thead>
			<tr>
				<th>Workout</th>
				<th>Sets</th>
				<th>Reps</th>
			</tr>
		</thead>
		<tbody>
EODATA;
		
			$workouts = explode(",", $_SESSION['workoutList']);
			for($i = 0; $i+2 < count($workouts); $i++){
				$workoutTable .="<tr>";
				$workoutTable .="<td><strong>";
				$workoutTable .= $workouts[$i++];
				$workoutTable .="</td></strong>";
	
				$workoutTable .="<td>";
				$workoutTable .= $workouts[$i++];
				$workoutTable .="</td>";
		
				$workoutTable .="<td>";
				$workoutTable .= $workouts[$i];
				$workoutTable .="</td>";
				$workoutTable .="</tr>";
			
			}
			$workoutTable .="</tbody></table></div>";


} else {
	$workoutTable = "<img src=\"images/rest.jpg\" alt=\"Rest\" width=736 height=309 id=\"rest\" />";
}

echo generatePage($body.$workoutTable, "Main", "css/doWorkout.css");
?>