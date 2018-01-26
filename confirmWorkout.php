<!doctype html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Workout Selection</title>
        <link rel="stylesheet" href="css/WorkoutPlansSelection.css" type="text/css" />
    </head>
    <?php
    require_once "dbuserWorkout.php";
     session_start();
       
        
        
        $db_connection = new mysqli($host, $user, $password, $database);
		if ($db_connection->connect_error) {
		    die($db_connection->connect_error);
		} else {
		    echo "Connection to database established<br><br>";
		}
        //$email= "kanyewest4@gmail.com";
        $email = $_SESSION["email"];
        $days1 = $_SESSION["days1"];
        $workout1 = $_SESSION["day1"];
        
        
        $query = "insert into usersWorkout values('$email', '$days1','$workout1')";
        $result = $db_connection->query($query);
        
		if (!$result) {
			die("Insertion failed: " . $db_connection->error);
		} else {
			echo "Insertion completed.<br>";
		}
         $days2 = $_SESSION["days2"];
        $workout2 = $_SESSION["day2"];
        
        
        $query = "insert into usersWorkout values('$email', '$days2','$workout2')";
        $result = $db_connection->query($query);
        
         $days3 = $_SESSION["days3"];
        $workout3 = $_SESSION["day3"];
        
        
        $query = "insert into usersWorkout values('$email', '$days3','$workout3')";
        $result = $db_connection->query($query);
        
        
         $days4 = $_SESSION["days4"];
        $workout4 = $_SESSION["day4"];
        
        
        $query = "insert into usersWorkout values('$email', '$days4','$workout4')";
        $result = $db_connection->query($query);
        
         $days5 = $_SESSION["days5"];
        $workout5 = $_SESSION["day5"];
        
        
        $query = "insert into usersWorkout values('$email', '$days5','$workout5')";
        $result = $db_connection->query($query);
        
        $db_connection->close();
        header("Location: choose.php");
    ?>
</html>