<?php
    
    /*---------------------------------------------------------
    The script updates a record.
    This example assumes a table and database exists.
    Table Fields:
    name varchar(50), email varchar(100) primary key, gpa float,
    year integer, gender enum("M","F"), password varchar(10)
    -----------------------------------------------------------*/
    
    require_once "dbLogin.php";
    session_start();
    
    /* Connecting to the database */
    $db_connection = new mysqli($host, $user, $password, $database);
    if ($db_connection->connect_error) {
        die($db_connection->connect_error);
    } else {
        echo "Connection to database established<br><br>";
    }
    
    /* set up query */
    $query = "replace into " . $table . " values(\"{$_SESSION['name']}\", \"{$_SESSION['email']}\",
    \"{$_SESSION['weight']}\", \"{$_SESSION['feet']}\", \"{$_SESSION['inches']}\", password(\"{$_SESSION['password']}\"))";
    /* Executing query */
    $result = $db_connection->query($query);
    if (!$result) {
        die("Insertion failed: " . $db_connection->error);
    } else {
        // Go to script to display all the new info after replace
        header("Location: choose.php");
    }
    
    /* Closing connection */
    $db_connection->close();
?>