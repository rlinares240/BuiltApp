<html>
    <head>
        <meta charset="utf-8"/>
        <title>Select Exercise</title>
        <link rel="stylesheet" href="css/exerciseList.css"/>
    </head>
    
    <div id="title">Choose your exercises. </div><br><br> 
    <body id= "listChoose">
       
        <?php
        require("generateForms.php");
        require("extras/pictureDB.php");
        $backButton = <<< EOFDATA
       
        <input type ="submit" value= "Back" id="backButton" name ="backButton"/>
        
        <form/>
EOFDATA;
    session_start();
    $legReps= "3,6-8";
    $abReps = "5,10-12";
    $chestReps = "5,6-8";
    $backReps ="5,6-8";
    $shoulReps ="4,8";
    $armReps="4,8-12";
   
    //$table2 = "usersWorkout";
	$db = connectToDB($host, $user, $password, $database);
    //$db2= connectToDB($host, $user, $password, $database);
        $email = $_SESSION['email'];
        if(!isset($_SESSION['workoutLst'])){
            $_SESSION['workoutLst']="";
        }
        
        $choices ="";
       // echo $email;
        $body=" <form id =\"form1\" action =\"{$_SERVER['PHP_SELF']}\" method = \"POST\">";
        
        if(isset($_POST['legs'])){
            $body .= getLegs($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['abs'])){
            $body .= getAbs($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['chest'])){
            $body .= getChest($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['back'])){
            $body .= getBack($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['shoulder'])){
            $body .= getShoulder($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['arms'])){
            $body .= getArms($db,$table);
            $_SESSION['workoutDay']=$_POST['workoutDay'];
        }else if(isset($_POST['finalizeDay']) ){
          // here is where you create the full string and submit the current session to the table.
          
          $query = "insert into usersWorkout values('$email',".$_POST['workoutDay'].",'".rtrim($_SESSION['workoutLst'])."')";
          $result = mysqli_query($db, $query);
                if ($result) {
                   
                     $body.= "Submission made for Day: ".$_POST['workoutDay']." successful!";//.rtrim($_SESSION['workoutLst'],",");
                    $_SESSION['workoutLst'] ="";
                } else { 				   
                	$body .= "Inserting records failed.".mysqli_error($db);
                }
	
			/* Closing connection */
			mysqli_close($db);
         
        }else if(isset($_POST['backButton'])){
            $_SESSION['day']= $_POST['day'];
            $arr =array();
            if(isset($_POST['legs2'])){
                foreach($_POST['legs2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
               
            }else if(isset($_POST['abs2'])){
                foreach($_POST['abs2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
            }
           else if(isset($_POST['chest2'])){
            foreach($_POST['chest2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
           }else if(isset($_POST['back2'])){
            foreach($_POST['back2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
           }else if(isset($_POST['shoulders2'])){
            foreach($_POST['shoulders2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
           }else if(isset($_POST['arms2'])){
            foreach($_POST['arms2'] as $value){
                   $_SESSION['workoutLst'].= $value.",".$legReps.",";
                 
                 }
           }
           
           
            header("Location: targetArea.php");
           }
        
        
        
        echo $body."<br><br><br>".$backButton;
        
        
        
        ?>
        <br>
      <!-- <div id="imgholder"> <img id ="preview" src="" alt="Preview Exercise Here"/></div> -->
        
    </body>
    
       <!-- <script>
            
            document.getElementById("deads1").onmouseenter = function(){
                 document.getElementById("preview").setAttribute("src","images/workouts/deadlift_girl.jpg");
                 document.getElementById("preview").setAttribute("height","250px");
            };
            document.getElementById("form1").onmouseout = function(){
                document.getElementById("preview").setAttribute("src","");
            };
           
           
        </script>-->
    
</html>


