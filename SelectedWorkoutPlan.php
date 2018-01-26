<!doctype html>
<html>
    <head> 
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/SelectedWorkoutPlan.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
    </head>
    <body id="entire">
    <?php
		require_once "dbuserWorkout.php";
        session_start();
        /*Load in the User, Workout Plan(ex.Thor/strengthTraining ).(Mainly)*/
        $keys = array_keys($_POST);
        foreach ($keys as $key){
            $_SESSION[$key] = $_POST[$key];
        }
		//print_r($_SESSION);
		
        
        if(isset($_SESSION["strengthTraining"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strength Training";
            
            $muscle1 = "Chest/Tric/Back/Abs/Neck";
            $day1["Bench Press"] = "10,2-3";
            $day1["Standing Front Press"] = "3,3-5";
            $day1["Tricep Pushdowns"] = "1,10-12";
            $day1["One-Arm Medicine Ball Slam"] = "5,10-12";
            $day1["Landmine 180"] = "5,10-12";
            
            $muscle2 = "Back/Legs/Bicep/Neck";
            $day2["Barbell Squat"] = "1,1-2";
            $day2["Leg Curls"] = "4,5-7";
            $day2["Cable Row"] = "3,10-12";
            $day2["1-Arm Dumbbell Row"] = "3,10-12";
            $day2["Landmine 180"] = "5,10-12";
            
            $muscle3 = "Chest/Tric/Back/Abs";
            $day3["Decline Press"] = "1,1-2";
            $day3["Flat Dumbbell Press"] = "1,12-15";
            $day3["Skull Crushers"] = "3,3-7";
            $day3["Lying Face Down Plate Neck"] = "5,10-12"; 
        
            $muscle4 = "Legs/Back/Bicep/Abs";
            $day4["Box Squats"] = "4,1-2";
            $day4["Leg Curls"] = "4,12-15";
            $day4["Cable Row"] = "3,5-7";
            $day4["Shrugs"] = "3,10-15";
            $day4["Barbell Bicep Curl"] = "3,9-10";
            $day4["One-Arm Medicine Ball Slam"] = "5,10-12";
            
            $muscle5 = "";
            $day5[""] = "";
            
         $body = <<<DATA1
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table">
            <thead>
                <tr class="active">
				<th> EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr class="active">
				<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>$muscle4</th>
                    <th>Rest</th>
                </tr>
            </thead>
            <tbody>
            
            <tr><td><div id ="bench1"> </div> <div id ="bsquat1"></div><div id ="declinep1"></div><div id ="boxsquat1"> </div>   </td><td id="bench"> Bench Press <br> 10x2-3 </td> <td id="bsquat"> Barbell Squat <br>1x1-2</td>       <td id="declinep">Decline Press <br>1x1-2 </td>        <td id ="boxsquat">Box Squat<br>4x1-2</td><td> <br>  </td>  </tr>
            <tr><td><div id ="legcurls1"> </div><div id ="db_press1"> </div><div id ="standfrontp1"> </div><div id ="legcurl1"> </div></td><td id="standfrontp"> Standing Front Press<br>3x3-5  </td>            <td id="legcurl"> Leg Curls<br> 4x5-7 </td>          <td id="db_press">Flat Dumbbell<br> 1x1-2  </td>       <td id="legcurls">Leg Curls <br>4x12-15 </td>  <td> <br>  </td>  </tr>
            <tr><td><div id ="cablerows1"> </div><div id ="cablerow1"> </div><div id ="skull1"> </div><div id ="triceppushdown1"> </div></td><td id="triceppushdown">Tricep Pushdowns <br>1x10-12    </td>    <td id="cablerow"> Cable Row <br>3x10-12</td>         <td id="skull">Skull Crushers <br>3x3-7 </td>       <td id="cablerows">Cable Rows<br>3x5-7</td>  <td> <br>  </td>  </tr>
            <tr><td><div id ="medicine1"> </div><div id ="dbs1"> </div><div id ="becky1"> </div><div id ="dbrow1"> </div> </td><td id="medicine">One-Arm Medicine Ball Slam <br>5x10-12 </td>     <td id="dbrow"> 1-Arm Dumbbell Row<br>3x10-12</td> <td id="becky">Lying Face Down Plate Neck<br>5x10-12</td> <td id="dbs">Shrugs<br>3x10-15   </td>  <td> <br>  </td>  </tr>
            <tr><td><div id ="landmine1"> </div><div id ="landmines1"> </div></td><td id="landmine">Landmine 180's <br> 5x10-12     </td>            <td id="landmines"> Landmine 180's<br>5x10-12</td>     <td> <br> </td>     <td>Barbell Bicep Curl <br> 3x9-10  </td>  <td><br>  </td>  </tr>
            <tr><td></td><td> <br> </td> <td> <br>  </td>     <td>   <br>   </td>  <td>  One-Arm Medicine Ball Slam <br> 5x10-12  </td>      <td>  - <br>  </td>  </tr>
		
            </tbody>
            </table> 
            </div>
            </div>
DATA1;
       
        echo $body;
            
        }else if(isset($_SESSION["bulkTraining"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bulk Training";
            
            $muscle1= "Back/Bicep/Legs/Traps";
            $day1["Pull Up"] = "4,5-6";
            $day1["Dips"] = "4,5-6";
            $day1["Leg Curls"] = "4,5-6";
            $day1["Barbell Squat"] = "4,5-6";
            $day1["Barbell Shrug"] = "4,5-6";
            
            $muscle2 = "Legs/Back/Bic/Chest/Shoulder";
            $day2["Barbell Curl"] = "4,5-6";
            $day2["Standing Barbell Calf Raise"] = "4,5-6";
            $day2["Smith Mach. Rev. Calf Raise"] = "4,5-6";
            $day2["Standing Military Press"] = "4,5-6";
            $day2["Side Lateral Raise"] = "4,5-6";
            $day2["Close-Grip Barbell Bench Press"] = "4,5-6";
            
            $muscle3 = "None";
            $day3["Rest"] = "";
            
            $muscle4 = "Chest/Legs/Back/Traps";
            $day4["Bent Over Barbell Row"] = "3,11-12";
            $day4["Barbell Incline Bench Press"] = "3,11-12";
            $day4["Stiff-legged Barbell Deadlift"] = "3,11-12";
            $day4["Barbell Lunge"] = "3,11-12";
            $day4["Barbell Shrug"] = "3,11-12";
            
            
            $muscle5 = "Legs/Back/Bic/Tric/Shoulder";
            $day5["Preacher Curl"] = "3,10-12";
            $day5["Standing Barbell Calf Raise"] = "3,10-12";
            $day5["Front Dumbbell Raise"] = "3,10-12";
            $day5["Side Lateral Raise"] = "3,10-12";
            $day5["Barbell Rear Delt Row"] = "3,10-12";
            $day5["Standing Overhead Tricep Ext."] = "3,10-12";
                     
         $body = <<<DATA2
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
					<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>Rest</th>
                    <th>$muscle4</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
           <tr><td></td> <td>Dips <br> 4x5-6 </td>             <td>Barbell Curl <br>4x5-6  </td>                           <td>   </td>     <td>Bent Over Barbell Row  <br>3x11-12  </td>      <td>   Preacher Curl<br>  3x10-12  </td>  </tr>
           <tr><td></td><td> Leg Curls<br>4x5-6 </td>        <td> Standing Barbell Calf Raise<br>4x5-6  </td>             <td>    </td>     <td>  Standing Barbell Calf Raise <br> 3x10-12 </td>      <td>   Barbell Incline Bench Press<br>3x11-12  </td>  </tr>
           <tr><td></td><td>Barbell Squat <br> 4x5-6</td>    <td> Smith Mach. Rev Calf Raise<br> 4x5-6 </td>             <td>   </td>     <td> Stiff-Legged Barbell Deadlift <br>3x11-12  </td>   <td>   Front Dumbbell Raise<br>3x10-12 </td>  </tr>
           <tr><td></td><td>Barbell Shrug <br>4x5-6 </td>    <td>Standing Military Press <br>4x5-6  </td>                <td>   </td>     <td>   Barbell Lunge<br>3x11-12    </td>      <td> Side Lateral Raise  <br> 3x10-12 </td>  </tr>
           <tr><td></td><td> <br> </td>                       <td> Side Lateral Raise<br>4x5-6   </td>                   <td></td>     <td>   Barbell Shrug <br> 3x11-12 </td>      <td> Barbell Rear Delt Row <br>3x10-12  </td>  </tr>
           <tr><td></td><td> <br> </td>                       <td> Close-Grip Barbell Bench Press<br>4x5-6  </td>         <td>   <br>  </td>     <td>   <br>   </td>      <td>   Standing Overhead Tricep Ext.<br> 3x10-12 </td>  </tr>
		
            </tbody>
            </table> 
            </div>
            </div>
DATA2;
       
        echo $body;
             
        }else if(isset($_SESSION["leanTraining"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lean Training";
            
            $muscle1 = "Chest/Tricep/Cardio";
            $day1["Incline Dumbbell Press"] = "6,12-15";
            $day1["Flat Dumbbell Flye"] = "6,20-30";
            $day1["Incline Dumbbell Flye"] = "6,20-30";
            $day1["Skull Crushers"] = "6,12-15";
            $day1["Close Grip Barbell Bench Press"] = "5,10-12";
            
            $muscle2 = "Back/Bicep/Cardio";
            $day2["T-Bar Row"] = "6,12-15";
            $day2["Back Dumbbell Flye"] = "6,12-15";
            
            $day2["Barbell Bicep Curl"] = "6,12-15";
            $day2["Dumbbell Hammer Curl"] = "6,12-15";
            $day2["Treadmill"] = "1,30-45";
            
            
            $muscle3 = "Shoulder/Abs/Cardio";
            $day3["Seated Barbell Military Press"] = "6,12-15";
            $day3["Side Laterals"] = "6,12-15";
            
            $day3["One-Arm Medicine Ball Slam"] = "6,12-15";
            $day3["Weighted Suitcase Crunches"] = "6,15-20";
            $day3["Jump Rope"] = "1x30-45";
            
            $muscle4 = "Chest/Tricep/Cardio";
            $day4["Incline Dumbbell Press"] = "6,12-15";
            $day4["Incline Dumbbell Flye"] = "6,20-30";
            $day4["Skull Crushers"] = "6,12-15";
            $day4["Tricep Pushdowns"] = "6,15-20";
            $day4["Treadmill"] = "1,30-45";
            
            $muscle5 = "Back/Bicep/Shoulders";
            $day5["Pull Up"] = "6,12-15";
            $day5["T-Bar Row"] = "6,12-15";
            $day5["Barbell Bicep Curl"] = "6,12-15";
            $day5["Seated Barbell Military Press"] = "6,12-15";
            $day5["Seated Dumbbell Press"] = "6,12-15";
            $day5["Treadmill"] = "1,30-45";
            $body = <<<DATA3
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
					<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>$muscle4</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
        <tr><td></td><td> Incline Dumbbell Press<br> 6x12-15</td>    <td> T-Bar Row<br> 6x12-15 </td>     <td>  Seated Barbell Military Press <br>6x12-15  </td>     <td>  Incline Dumbbell Press <br> 6x12-15   </td>      <td>  Pull Up <br>6x12-15  </td>  </tr>
         <tr><td></td><td>Flat Dumbbell Bench Flye <br>6x10-30 </td>    <td> Back Dumbbell Flye<br>6x12-15  </td>     <td>  Side Laterals <br>6x12-15  </td>     <td>  Incline Dumbbell Flye <br>6x20-30   </td>      <td> T-Bar Row  <br>6x12-15  </td>  </tr>
         <tr><td></td><td>Incline Dumbbell Flye<br>6x20-30 </td>    <td> Barbell Bicep Curl<br>6x12-15  </td>     <td>  One-Arm Medicine Ball Slam<br>6x12-15  </td>     <td>  Skull Crushers <br>6x12-15   </td>      <td>   Barbell Bicep Curl<br>6x12-15  </td>  </tr>
         <tr><td></td><td> Skull Crushers<br>6x12-15 </td>    <td> Dumbbell Hammer Curl<br> 6x12-15 </td>     <td>Weighted Suitcase Crutches   <br>6x15-20  </td>     <td>   Tricep Pushdowns<br>6x20-30   </td>      <td> Steated Barbell Military Press  <br>6x12-15  </td>  </tr>
         <tr><td></td><td> Close Grip Barbell Bench Press<br>5x10-12 </td>    <td>Treadmill <br>1x30-45  </td>     <td>Jump Rope   <br> 1x30-45</td>     <td>  Treadmill <br>1x30-45   </td>    <td> Seated Dumbbell Press  <br> 6x12-15 </td>  </tr>
         <tr><td></td><td> <br> </td>    <td> <br>  </td>     <td>   <br>  </td>     <td>   <br>   </td>      <td>   Treadmill<br>1x30-45  </td>  </tr>
            </tbody>
            </table> 
            </div>
            </div>
DATA3;
		
        echo $body;
          
            
        }else if(isset($_SESSION["thor"])){
			
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thor Workout";
            $muscle1 = "Back";
            $day1["Pull Up"] = "5,10-20";
            $day1["Push Up"] = "5,15-20";
            $day1["Hammer String Row"] = "4,10-12";
            $day1["Dumbbell Row"] = "4,18-20";
            $day1["Swiss Ball Hyperextension"] = "4,15-20";
            
            $muscle2 = "Chest";
            $day2["Barbell Bench Press"] = "8,4-12";
            $day2["Incline Dumbbell Press"] = "4,11-12";
            $day2["Hammer Strength Press"] = "4,13-15";
            $day2["Weighted Dips"] = "4,9-10";
            $day2["Cable Flye"] = "4,10-12";
             
            $muscle3 = "Legs";
            $day3["Back Squat"] = "7,3-10";
            $day3["Leg Press"] = "6,12-20";
            $day3["Weighted Walking Lunges"] = "4,18-20";
            $day3["Single-Leg Curl"] = "3,18-20";
            $day3["Standing Calf Raise"] = "3,18-20";
            
            $muscle4 = "Shoulders";
            $day4["Military Press"] = "7,3-10";
            $day4["Arnold Press"] = "4,10-12";
            $day4["Barbell Shrug"] = "4,10-12";
            $day4["Dumbbell Lateral Raise"] = "3,13-15";
         
            
            $muscle5 = "Arms";
            $day5["Skull Crusher"] = "3,9-10";
            $day5["Barbell Bicep Curl"] = "3,9-10";
            $day5["EZ-Bar Preacher Curl"] = "3,9-10";
            $day5["Dumbbell Lying Tricep Ext."] = "3,9-10";
            $day5["Barbell Reverse Wrist Curl"] = "3,18-20";
			         $body = <<<DATA4
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
					<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>$muscle4</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
        
         <tr><td> </td> <td> Push Up<br>5x15-20</td>    <td>Barbell Bench Press <br>4x8-12  </td>     <td>  Back Squat <br>3x3-10  </td>     <td>  Military Press <br>7x3-10   </td>      <td>Skull Crushers <br>3x9-10 </td>  </tr>
		 <tr><td> </td><td> Hammer String Row<br> 4x10-12</td>    <td> Incline Dumbbell Press<br>4x11-12  </td>     <td> Leg Press  <br>6x12-20  </td>     <td>  Arnold Press <br>4x10-12   </td>      <td> Bicep Curl<br>3x9-10 </td>  </tr>
		 <tr><td> </td><td> Dumbbell Row<br> 4x18-20</td>    <td> Hammer Strength Press<br>4x11-12  </td>     <td> Weighted Walking Lunges  <br>4x18-20  </td>     <td> Barbell Shrug  <br> 4x10-12  </td>      <td> EZ-Bar Preacher Curl<br>3x9-10 </td>  </tr>
		 <tr><td> </td><td> Swill Ball Hyperextension<br>4x15-20 </td>    <td>  Weighted Dips<br>4x9-10  </td>     <td>Single-Leg Curl   <br> 3x18-20 </td>     <td>  Dumbbell Lateral Raise <br>3x13-15   </td>      <td>Dumbbell Lying Tricep Ext. <br>3x9-10 </td>  </tr>
		 <tr><td> </td><td> <br> </td>    <td> Cable Flye<br> 4x10-12 </td>     <td>  Standing Calf Raise <br>3x18-20  </td>     <td>   <br>   </td>      <td> Barbell Reverse Wrist Curl<br>3x18-20 </td>  </tr>
		 
            </tbody>
            </table> 
            </div>
            </div>
DATA4;
			
        echo $body;
            
        }else if(isset($_SESSION["gerald"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 300 Spartan Work Out";
            
            $muscle1 = "Full Body";
            $day1["Pull Up"] = "4,25-30";
            $day1["Push Up"] = "4,45-50";
            $day1["Box Jump"] = "4,45-50";
            $day1["Floor Wipers"] = "4,45-50";
            $day1["Single Arm Clean & Press"] = "4,45-50";
        
            $muscle2 = "";
            $day2[""] = "";
            
            $muscle3 = "Full Body";
            $day3["Pull Up"] = "4,25-30";
            $day3["Barbell Deadlift"] = "4,45-50";
            $day3["Box Jump"] = "4,45-50";
            $day3["Floor Wipers"] = "4,45-50";
            $day3["Single Arm Clean & Press"] = "4,45-50";
    
            
            $muscle4 = "None";
            $day4["Rest"] = "";
            
            $muscle5 = "Full Body";
            $day5["Pull Up"] = "4,25-30";
            $day5["Barbell Deadlift"] = "4,45-50";
            $day5["Box Jump"] = "4,45-50";
            $day5["Floor Wipers"] = "4,45-50";
            $body = <<<DATA5
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
				<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>$muscle4</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
        
         
		 <tr><td></td><td> Pull Up<br> 4x25-30</td>   	<td>  <br>  </td> 	<td> Pull Up<br> 4x25-30</td><td>  <br>  </td> 	<td> Pull Up<br> 4x25-30</td>				</tr>
		 <tr><td></td><td>Push Up <br>4x45-50 </td>   		<td>  <br>  </td> 		<td>Push Up <br>4x45-50 </td>	<td>  <br>  </td> 		<td>Push Up <br>4x45-50 </td>					  </tr>
		 <tr><td></td><td>Box Jump <br>4x45-50 </td>   		<td>  <br>  </td> 	 <td>Box Jump <br>4x45-50 </td>  <td>  <br>  </td> 	 <td>Box Jump <br>4x45-50 </td>  		 			 </tr>
		<tr><td></td><td>Floor Wipers <br>4x45-50 </td>       	<td>  <br>  </td> <td>Floor Wipers <br>4x45-50 </td> <td>  <br>  </td> <td>Floor Wipers <br>4x45-50 </td> 				 </tr>
		<tr><td></td><td> Single Arm Clean & Press<br>4x45-50 </td>   	<td>  <br>  </td> <td> Single Arm Clean & Press<br>4x45-50 </td><td>  <br>  </td> <td> Single Arm Clean & Press<br>4x45-50 </td>			    </tr>
	
		 
            </tbody>
            </table> 
            </div>
            </div>
DATA5;

        echo $body;
          
            
          
        }else if(isset($_SESSION["terryCrews"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp; Expandable Workout";
            
            $muscle1 = "Shoulders/Arms/Abs/Cardio";
            $day1["Upright Barbell Row"] = "1,5-6";
            $day1["Power Clean"] = "1,5-6";
            $day1["Front Dumbbell Raise"] = "4,9-10";
            $day1["Arnold Dumbbell Press"] = "4,9-10";
            $day1["Treadmill"] = "1,25-30";
            
            $muscle2 = "Back/Cardio";
            $day2["Barbell Deadlift"] = "4,5-6";
            $day2["Pull Up"] = "4,4-10";
            $day2["Barbell Deadlift"] = "3,3-6";
            $day2["Reverse Grip Bent Over Rows"] = "4,5-6";
            $day2["Treadmill"] = "1,25-30";
            
            $muscle3 = "Cardio";
            $day3["Treadmill"] = "1,40-45";
            
            $muscle4 = "None";
            $day4["Rest"] = "";
            
            $muscle5 = "Legs/Tricep/Abs/Cardio";
            $day5["Barbell Squat"] = "4,4-10";
            $day5["Leg Press"] = "4,9-10";
            $day5["Close Grip Barbell Bench Press"] = "4,4-10";
            $day5["Leg Extentions"] = "4,4-10";
            $day5["Treadmill"] = "1,30-35";
			        
         $body = <<<DATA1
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
					<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>Rest</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
        
         
		 
		<tr><td></td><td>Power Clean<br>1x5-6 </td>  <td>  Barbell Deadlift<br> 4x5-6 </td> <td>Treadmill <br>1x40-45 </td><td>  <br>  </td> <td> Barbell Squat<br>4x4-10 </td>  </tr>
		<tr><td></td><td>Power Clean<br>1x5-6 </td>  <td> Pull Up <br>4x4-10  </td> <td> <br> </td><td>  <br>  </td> <td>Leg Press <br>4x9-10 </td> </tr>
		<tr><td></td><td>Front Dumbbell Raise<br>4x9-10 </td>  <td>Barbell Deadlift  <br>3x3-6  </td> <td> <br> </td><td>  <br>  </td> <td> Ckose Grip Barbell Bench Press<br>4x4-10 </td>  </tr>
		<tr><td></td><td>Arnold Dumbbell Press<br>4x9-10 </td>  <td> Reverse Grip Bent Over Row <br>4x5-6  </td> <td> <br> </td><td>  <br>  </td> <td>Leg Extensions <br>4x4-10 </td>  </tr>
		<tr><td></td><td>Treadmill<br>1x25-30 </td>  <td> Treadmill <br>1x25-30  </td> <td> <br> </td><td>  <br>  </td> <td> Treadmill <br>1x30-45 </td>  </tr>
		
	
		 
            </tbody>
            </table> 
            </div>
            </div>
DATA1;

        echo $body;
			
        }else if(isset($_SESSION["arnold"])){
            $workoutGoal = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arnold Schwarzenegger Workout";
             
            $muscle1 = "Chest/Back/Abs";
            $day1["Barbell Brench Press"] = "5,5-30";
            $day1["Dumbbell Flyes"] = "5,6-30";
            $day1["Chin Up"] = "4,15-30";
            $day1["Bent Over Barbell Row"] = "5,6-30";
            $day1["Hanging Leg Raise"] = "5x,10-25";
            
            $muscle2 = "Shoulder/Arms/Abs";
            $day2["Clean And Press"] = "5,20-25";
            $day2["Front Dumbbell Raise"] = "5,6-30";
            $day2["Side Lateral Raise"] = "5,6-30";
            $day2["Barbell Curl"] = "5,6-30";
            $day2["Skull Crushers"] = "5,6-25";
            
            $muscle3 = "Legs";
            $day3["Barbell Squat"] = "5,8-12";
            $day3["Stiff-Legs"] = "5,8-12";
            $day3["Good Morning"] = "5,8-12";
            $day3["Seated Leg Curl"] = "5,8-12";
            $day3["Seated Calf Raise"] = "5,8-12";
            
            $muscle4 = "Chest/Back/Abs";
            $day4["Barbell Brench Press"] = "5,5-30";
            $day4["Dumbbell Pull Over"] = "5,5-30";
            $day4["Chin Up"] = "4x15-30";
            $day4["Bent Over Barbell Row"] = "5,6-30";
            $day4["Hanging Leg Raise"] = "5,20-25";
            
            $muscle5 = "Shoulder/Arms/Abs";
            $day5["Clean And Press"] = "5,20-25";
            $day5["Standing Dumbbell Press"] = "5,6-30";
            $day5["Side Lateral Raise"] = "5,6-30";
            $day5["Upright Barbell Row"] = "5,6-30";
            $day5["Skull Crushers"] = "5,6-25";
			  $body = <<<DATA7
         <h1 id= "title3"><strong>$workoutGoal.</strong></h1>
         <div class="container">                                                                            
            <div class="table">
            <table class="table" >
            <thead>
                <tr>
					<th>EXERCISE DEMONSTRATION</th>
                    <th>Day 1</th>
                    <th>Day 2</th>
                    <th>Day 3</th>
                    <th>Day 4</th>
                    <th>Day 5</th>    
                </tr>
                <tr>
					<th></th>
                    <th>$muscle1</th>
                    <th>$muscle2</th>
                    <th>$muscle3</th>
                    <th>$muscle4</th>
                    <th>$muscle5</th>
                </tr>
            </thead>
            <tbody>
            
		<tr><td></td><td>Dumbbel Flyes<br>4x6-30</td>  <td>Clean & Press <br>5x20-25 </td> <td> Barbell Squat<br>5x8-12 </td><td> Barbell Bench Press <br> 5x5-30 </td> <td> Clean & Press<br> 5x20-25</td>  </tr>
		<tr><td></td><td>Chin Up<br>4x15-30</td>  <td> Front Dumbbell Raise<br>6x6-30 </td> <td>Stiff-Legs <br>5x8-12 </td><td> Dumbbell Pull Over <br>5x5-30  </td> <td> Standing Dumbbell Press<br> 5x6-30</td>  </tr>
		<tr><td></td><td>Bench Press<br>5x5-30</td>  <td>Side Lateral Raise <br>5x6-30 </td> <td> Good Morning <br>5x8-12 </td><td>  Chin Up<br>5x5-30  </td> <td> Side Lateral Raise<br>5x6-30 </td>  </tr>
		<tr><td></td><td>Bent Over Barbell Row<br>5x6-30</td>  <td>Barbell Curl <br>5x6-30 </td> <td>Seated Leg Curl <br> 5x8-12</td><td> Bent Over barbell Row <br> 5x5-30 </td> <td>Upright Barbell Row <br> 5x6-30</td>  </tr>
		<tr><td></td><td>Hanging Leg Raise<br>10x25</td>  <td> Skull Crushers<br> 5x6-30</td> <td> Seated Calf Raise<br>5x8-12 </td><td> Hanging Leg Raise <br>5x5-30  </td> <td>Skull Crusher <br>5x6-30 </td>  </tr>
		
	
		 
            </tbody>
            </table> 
            </div>
            </div>
DATA7;
		
        echo $body;
        }
		$bottom ="";
		if(isset($_SESSION["thor"]) || isset($_SESSION["gerald"]) || isset($_SESSION["arnold"])||
		   isset($_SESSION["terryCrews"])){
			$bottom .= <<<DATA8
			<form action="celebrityWorkoutSelection.html" method="post">
			<input type="submit" name="back" id="back" " value="Back" /><br>
		</form>

DATA8;
		}else{
			$bottom .= <<<DATA9
			
			<form action="WorkoutPlansSelection.html" method="post">
				<input type="submit" name="back" id="back" " value="Back" /><br>
			</form>
DATA9;
		}
		$bottom .= <<< DATA10
		<form action="confirmWorkout.php" method="post">
			<input type="submit" name="confirm" id="con" " value="Confirm" /><br>
		</form>
DATA10;
		echo $bottom;
		
		$_SESSION["thor"]=null;
		$_SESSION["gerald"]=null;
		$_SESSION["terryCrews"]=null;
		$_SESSION["arnold"]=null;
		$_SESSION["strengthTraining"]=null;
		$_SESSION["leanTraining"]=null;
		$_SESSION["bulkTraining"]=null;
		
		$workout1 ="";
		$count =1;
		foreach($day1 as $key1 => $value1){
			if($value1 != ""){
				$workout1 .= $key1. ",". $value1;
			}
			if($count != count($day1)){
				$workout1 .= ",";
			}
			$count++;
		}
		
		$_SESSION["days1"] = 1;
		$_SESSION["day1"] = $workout1;
		
		$workout2 ="";
		$count =1;
		foreach($day2 as $key1 => $value1){
			if($value1 != ""){
				$workout2 .= $key1. ",". $value1;
			}
			if($count != count($day2)){
				$workout2 .= ",";
			}
			$count++;
		}
		$_SESSION["days2"] = 2;
		$_SESSION["day2"] = $workout2;
		
		$workout3 ="";
		$count =1;
		foreach($day3 as $key1 => $value1){
			if($value1 != ""){
				$workout3 .= $key1. ",". $value1;
			}
			if($count != count($day3)){
				$workout3 .= ",";
			}
			$count++;
		}
		$_SESSION["days3"] = 3;
		$_SESSION["day3"] = $workout3;
		
		$workout4 ="";
		$count =1;
		foreach($day4 as $key1 => $value1){
			if($value1 != ""){
				$workout4 .= $key1. ",". $value1;
			}
			if($count != count($day4)){
				$workout4 .= ",";
			}
			$count++;
		}
	$_SESSION["days4"] = 4;
		$_SESSION["day4"] = $workout4;
		
		$workout5 ="";
		$count =1;
		foreach($day5 as $key1 => $value1){
			if($value1 != ""){
				$workout5 .= $key1. ",". $value1;
			}
			if($count != count($day5)){
				$workout5 .= ",";
			}
			$count++;
		}
			$_SESSION["days5"] = 5;
		$_SESSION["day5"] = $workout5;	
    ?>
        
    </body>
    </form>
	<script>
	
			
			
			document.getElementById("bench").onmouseenter = function(){
                 let temp = document.getElementById("bench1");
				 temp.innerHTML= "<img src=\"images/workouts/bench_press.jpg\" height=90px/>";
            };
            document.getElementById("bench").onmouseout = function(){
				let temp = document.getElementById("bench1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("bsquat").onmouseenter = function(){
                 let temp = document.getElementById("bsquat1");
				 temp.innerHTML= "<img  src=\"images/workouts/backsquat3.jpg\" height=100px/>";
            };
            document.getElementById("bsquat").onmouseout = function(){
				let temp = document.getElementById("bsquat1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("declinep").onmouseenter = function(){
                 let temp = document.getElementById("declinep1");
				 temp.innerHTML= "<img  src=\"images/workouts/declinepress.jpg\" height=75px/>";
            };
            document.getElementById("declinep").onmouseout = function(){
				let temp = document.getElementById("declinep1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("boxsquat").onmouseenter = function(){
                 let temp = document.getElementById("boxsquat1");
				 temp.innerHTML= "<img  src=\"images/workouts/boxsquat.jpg\" height=75px/>";
            };
            document.getElementById("boxsquat").onmouseout = function(){
				let temp = document.getElementById("boxsquat1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("standfrontp").onmouseenter = function(){
                 let temp = document.getElementById("standfrontp1");
				 temp.innerHTML= "<img  src=\"images/workouts/standfrontp.jpg\" height=85px/>";
            };
            document.getElementById("standfrontp").onmouseout = function(){
				let temp = document.getElementById("standfrontp1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("legcurl").onmouseenter = function(){
                 let temp = document.getElementById("legcurl1");
				 temp.innerHTML= "<img src=\"images/workouts/legcurl.jpg\" height=85px/>";
            };
            document.getElementById("legcurl").onmouseout = function(){
				let temp = document.getElementById("legcurl1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("db_press").onmouseenter = function(){
                 let temp = document.getElementById("db_press1");
				 temp.innerHTML= "<img src=\"images/workouts/db_press.jpg\" height=85px/>";
            };
            document.getElementById("db_press").onmouseout = function(){
				let temp = document.getElementById("db_press1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("legcurls").onmouseenter = function(){
                 let temp = document.getElementById("legcurls1");
				 temp.innerHTML= "<img src=\"images/workouts/legcurl.jpg\" height=85px/>";
            };
            document.getElementById("legcurls").onmouseout = function(){
				let temp = document.getElementById("legcurls1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("triceppushdown").onmouseenter = function(){
                 let temp = document.getElementById("triceppushdown1");
				 temp.innerHTML= "<img src=\"images/workouts/triceppushdown.jpg\" height=85px/>";
            };
            document.getElementById("triceppushdown").onmouseout = function(){
				let temp = document.getElementById("triceppushdown1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("cablerow").onmouseenter = function(){
                 let temp = document.getElementById("cablerow1");
				 temp.innerHTML= "<img src=\"images/workouts/cable-row.jpg\" height=90px/>";
            };
            document.getElementById("cablerow").onmouseout = function(){
				let temp = document.getElementById("cablerow1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("skull").onmouseenter = function(){
                 let temp = document.getElementById("skull1");
				 temp.innerHTML= "<img src=\"images/workouts/skullcrusher.jpg\" height=90px/>";
            };
            document.getElementById("skull").onmouseout = function(){
				let temp = document.getElementById("skull1");
                temp.innerHTML = "<div></div>";
            };
		document.getElementById("cablerows").onmouseenter = function(){
                 let temp = document.getElementById("cablerows1");
				 temp.innerHTML= "<img src=\"images/workouts/cable-row.jpg\" height=90px/>";
            };
            document.getElementById("cablerows").onmouseout = function(){
				let temp = document.getElementById("cablerows1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("medicine").onmouseenter = function(){
                 let temp = document.getElementById("medicine1");
				 temp.innerHTML= "<img src=\"images/workouts/medicine.jpg\" height=90px/>";
            };
            document.getElementById("medicine").onmouseout = function(){
				let temp = document.getElementById("medicine1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("dbrow").onmouseenter = function(){
                 let temp = document.getElementById("dbrow1");
				 temp.innerHTML= "<img src=\"images/workouts/dbrow.jpg\" height=90px/>";
            };
            document.getElementById("dbrow").onmouseout = function(){
				let temp = document.getElementById("dbrow1");
                temp.innerHTML = "<div></div>";
            };
			
			document.getElementById("landmine").onmouseenter = function(){
                 let temp = document.getElementById("landmine1");
				 temp.innerHTML= "<img src=\"images/workouts/land.jpg\" height=90px/>";
            };
            document.getElementById("landmine").onmouseout = function(){
				let temp = document.getElementById("landmine1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("landmines").onmouseenter = function(){
                 let temp = document.getElementById("landmines1");
				 temp.innerHTML= "<img src=\"images/workouts/land.jpg\" height=90px/>";
            };
            document.getElementById("landmines").onmouseout = function(){
				let temp = document.getElementById("landmines1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("becky").onmouseenter = function(){
                 let temp = document.getElementById("becky1");
				 temp.innerHTML= "<img src=\"images/workouts/becky.jpg\" height=90px/>";
            };
            document.getElementById("becky").onmouseout = function(){
				let temp = document.getElementById("becky1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("dbs").onmouseenter = function(){
                 let temp = document.getElementById("dbs1");
				 temp.innerHTML= "<img src=\"images/workouts/dbshrugs.jpg\" height=90px/>";
            };
            document.getElementById("dbs").onmouseout = function(){
				let temp = document.getElementById("dbs1");
                temp.innerHTML = "<div></div>";
            };
			document.getElementById("dbrowss").onmouseenter = function(){
                 let temp = document.getElementById("dbrowss1");
				 temp.innerHTML= "<img  src=\"images/workouts/dbrow.jpg\" height=90px/>";
            };
            document.getElementById("dbrowss").onmouseout = function(){
				let temp = document.getElementById("dbrowss1");
                temp.innerHTML = "<div></div>";
            };
			
	</script>
</html>