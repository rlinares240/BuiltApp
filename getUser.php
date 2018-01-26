<?php
    
    /*---------------------------------------------------------
    The script retrieves a record.
    This example assumes a table and database exists.
    Table Fields:
    name varchar(50), email varchar(100) primary key, gpa float,
    year integer, gender enum("M","F"), password varchar(10)
    -----------------------------------------------------------*/
    
    require_once "dbLogin.php";
    require_once("support.php");
    session_start();
    
    // To go back to main incase of error
    if (isset($_POST['returnToMain'])) {
        header("Location: main.php");
    }
    
    $body = <<<EOBODY
   <br><form action="$_SERVER[PHP_SELF]" method="post">
        <input type="submit" name="returnToMain" value="Return to Log in" /><br><br>
    </form>
EOBODY;
    
    
    $db_connection = new mysqli($host, $user, $password, $database);
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    } else {
        # echo "Connection to database established<br><br>";
    }
    
    
    /* Query */
    $query = "select * from " . $table . " where email=\"{$_SESSION['email']}\"and password=password(\"{$_SESSION['password']}\")";
    
    
    /* Executing query */
    $result = $db_connection->query($query);
    if (!$result) {
        die("Retrieval failed: " . $db_connection->error . $body);
    } else {
        
        /* Number of rows found */
        $num_rows = $result->num_rows;
        if ($num_rows === 0) {
            echo "<h2>No entry exists in the database for the specified email and password</h2>" . $body;
            
        } else {
            for ($row_index = 0; $row_index < $num_rows; $row_index++) {
                $result->data_seek($row_index);
                $row                = $result->fetch_array(MYSQLI_ASSOC);
                // Set sessions to fill out update form with previous info
                $_SESSION['name']   = $row['name'];
                $_SESSION['email']  = $row['email'];
                $_SESSION['weight']   = $row['weight'];
                $_SESSION['feet'] = $row['feet'];
				$_SESSION['inches']= $row['inches'];
		
                // Go to update form to enter new info
                header("Location:settings.php");
            }
        }
    }
    
    /* Freeing memory */
    $result->close();
    
    /* Closing connection */
    $db_connection->close();
    
    
?>