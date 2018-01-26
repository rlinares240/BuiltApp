<?php
    
    require_once "dbLogin.php";
    session_start();
    
    // To return to main incase of error on insert
    if (isset($_POST['returnToMain'])) {
        header("Location: login.php");
    }
    
    $body = <<<EOBODY
   <br><br> <form action="$_SERVER[PHP_SELF]" method="post">
        <input type="submit" name="returnToMain" value="Return to Log In" /><br><br>
    </form> 
EOBODY;
    
    /* Connecting to the database */
    $db_connection = new mysqli($host, $user, $password, $database);
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    } else {
        //echo "Connection to database established<br><br>";
    }
    
    /* set up query */
    $query = "insert into " . $table . " values(\"{$_SESSION['name']}\", \"{$_SESSION['email']}\", \"{$_SESSION['weight']}\", \"{$_SESSION['feet']}\", \"{$_SESSION['inches']}\", password(\"{$_SESSION['password']}\"))";
    
    /* Executing query */
    $result = $db_connection->query($query);
    if (!$result) {
        die("Insertion failed: " . $db_connection->error . $body);
    } else {
        header("Location: choose.php");
        
    }
    
    /* Closing connection */
    $db_connection->close();
?>