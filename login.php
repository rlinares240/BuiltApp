<?php

    require_once "dbLogin.php";
    require_once("support.php");
    session_start();
    
    // To go to main incase of retrive error
    if (isset($_POST['returnToMain'])) {
        header("Location: main.php");
    }
    
    $body = <<<EOBODY
  <form action="$_SERVER[PHP_SELF]" method="post">
        <input type="submit" name="returnToMain" value="Return to Log In" /><br><br>
    </form>
EOBODY;
    
    $db_connection = new mysqli($host, $user, $password, $database);
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    } else {
        //echo "Connection to database established<br><br>";
    }
     $pass = $_SESSION['password'];
	$email = $_SESSION['email'];

    /* Query */
    $query = "select * from " . $table . " where email=\"$email\" and password=password(\"$pass\")";
	
    
    /* Executing query */
    $result = $db_connection->query($query);
    if (!$result) {
        die("Retrieval failed: " . $db_connection->error);
    } else {
        
        /* Number of rows found */
        $num_rows = $result->num_rows;
        if ($num_rows === 0) {
            echo "<h2>No entry exists in the database for the specified email and password</h2>" . $body;
            
        } else {
            for ($row_index = 0; $row_index < $num_rows; $row_index++) {
                $result->data_seek($row_index);
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
		// Set sessions to display retrieve results
                $_SESSION['name']   = $row['name'];
                $_SESSION['email']  = $row['email'];
                $_SESSION['weight']    = $row['weight'];
                $_SESSION['feet']   = $row['feet'];
                $_SESSION['inches'] = $row['inches'];
		
		// Script to display retrieved results
                header("Location:choose.php");
            }
        }
    }
    
    /* Freeing memory */
    $result->close();
    
    /* Closing connection */
    $db_connection->close();
  
?>