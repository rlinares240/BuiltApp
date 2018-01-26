<?php
function getAbs($db,$table){
     $sqlQuery = "select data from $table where name = 'russiantwist'";
    $sqlQuery1 = "select data from $table where name = 'cablecrunch'";
	$result = mysqli_query($db, $sqlQuery);
     $result1 = mysqli_query($db,$sqlQuery1);
     if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $rt = $row['data'];
        $cc = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
     	mysqli_close($db);
        $direct = "images/workouts/";
    $russ = "<img id =\"russPic\" src=\"data:image/jpeg;base64,".base64_encode($rt)."\"  />";
    $cab ="<img id =\"cabCrunchPic\" src=\"data:image/jpeg;base64,".base64_encode($cc)."\"  />";
    $lraise= "<img id =\"lraisePic\" src =\" ".$direct."legraise.jpg\"  />";
    $wheel= "<img id =\"wheelPic\" src =\" ".$direct."abwheel.jpg\"  />";
    $bi= "<img id =\"biPic\" src =\" ".$direct."bicyclecrunch.jpg\"   />";
   $abs = <<< EOFDATA
    
   <span id ="cablecrunch" ><input type ="checkbox" id ="cablecrunch1" name ="abs2[]" value="Cable Crunch">  <label  for="cablecrunch1">Cable Crunch &nbsp;&nbsp;</label> </span> {$cab}<br>
   <span id ="legraise" ><input type ="checkbox" id ="legraise1" name ="abs2[]" value="Leg Raises">  <label  for="legraise1">Leg Raises &nbsp;&nbsp;</label> </span> {$lraise}<br>
    <span id ="abwheel" ><input type ="checkbox" id ="abwheel1" name ="abs2[]" value="Ab-Wheel">  <label  for="abwheel1">Ab Wheel &nbsp;&nbsp;</label> </span> {$wheel}<br>
    <span id ="russiantwist" ><input type ="checkbox" id ="russiantwist1" name ="abs2[]" value="Russian Twists">  <label  for="russiantwist1">Russian Twists &nbsp;&nbsp;</label> </span> {$russ}<br>
    <span id ="bicrunch" ><input type ="checkbox" id ="bicrunch1" name ="abs2[]" value="Bicycle Crunches">  <label  for="bicrunch1">Bicycle Crunches &nbsp;&nbsp;</label> </span>{$bi} <br>
    
EOFDATA;
return  $abs;
}

function getChest($db,$table){
     $sqlQuery = "select data from $table where name = 'bench'";
    $sqlQuery1 = "select data from $table where name = 'dbpress'";
	$result = mysqli_query($db, $sqlQuery);
     $result1 = mysqli_query($db,$sqlQuery1);
     if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $b = $row['data'];
        $dbp = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
     	mysqli_close($db);
        $direct = "images/workouts/";
    $bench = "<img id =\"benchPic\" src=\"data:image/jpeg;base64,".base64_encode($b)."\"  />";
    $dbpress ="<img id =\"dbpressPic\" src=\"data:image/jpeg;base64,".base64_encode($dbp)."\"  />";
    $cabF= "<img id =\"cabFlysPic\" src =\" ".$direct."cableflys.jpg\"  />";
    $incF= "<img id =\"inclineflysPic\" src =\" ".$direct."db_incline_flys.jpg\"  />";
    $dbF= "<img id =\"dbflatPic\" src =\" ".$direct."db_flat_flys.jpg\"   />";
   $chest = <<< EOFDATA
    
    
   <span id ="bench" ><input type ="checkbox" id ="bench1" name ="chest2[]" value="Bench Press">  <label  for="bench1">Bench Press &nbsp;&nbsp;</label> </span> {$bench}<br>
   <span id ="cableflys" ><input type ="checkbox" id ="cableflys1" name ="chest2[]" value="Cable Flys">  <label  for="cableflys1">Cable Flys&nbsp;&nbsp;</label> </span>{$cabF} <br>
    <span id ="dbflat" ><input type ="checkbox" id ="dbflat1" name ="chest2[]" value="Dumbbell Flys">  <label  for="dbflat1">Dumbbell Flys &nbsp;&nbsp;</label> </span> {$dbF}<br>
    <span id ="inclineflys" ><input type ="checkbox" id ="inclineflys1" name ="chest2[]" value="Incline Dumbbell Flys">  <label  for="inclineflys1">Incline Flys&nbsp;&nbsp;</label> </span> {$incF}<br>
    <span id ="dbpress" ><input type ="checkbox" id ="dbpress1" name ="chest2[]" value="Dumbbell Press">  <label  for="dbpress1">Dumbbell Press &nbsp;&nbsp;</label> </span> {$dbpress}<br>
    
EOFDATA;
return  $chest;
}

function getBack($db, $table){
     $sqlQuery = "select data from $table where name = 'latpulls'";
    $sqlQuery1 = "select data from $table where name = 'pullups'";
	$result = mysqli_query($db, $sqlQuery);
     $result1 = mysqli_query($db,$sqlQuery1);
     if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $lat = $row['data'];
        $pull = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
     	mysqli_close($db);
        $direct = "images/workouts/";
    $lp = "<img id =\"latsPic\" src=\"data:image/jpeg;base64,".base64_encode($lat)."\"  />";
    $pup ="<img id =\"pullupPic\" src=\"data:image/jpeg;base64,".base64_encode($pull)."\"  />";
    $crow= "<img id =\"cabRowPic\" src =\" ".$direct."cable-row.jpg\"  />";
    $drow= "<img id =\"dbrowPic\" src =\" ".$direct."dbrow.jpg\"  />";
    $bor= "<img id =\"borPic\" src =\" ".$direct."bent-over-barbell-row.jpg\"   />";
    $back = <<< EOFDATA
    
    
   <span id ="bor" ><input type ="checkbox" id ="bor1" name ="back2[]" value="Bent-over Row">  <label  for="bor1">Bent-over Row &nbsp;&nbsp;</label> </span> {$bor}<br>
   <span id ="cablerow" ><input type ="checkbox" id ="cablerow1" name ="back2[]" value="Cable Row">  <label  for="cablerow1">Cable Rows&nbsp;&nbsp;</label> </span> {$crow}<br>
    <span id ="pullup" ><input type ="checkbox" id ="pullup1" name ="back2[]" value="Pull-ups">  <label  for="pullup1">Pull-up &nbsp;&nbsp;</label> </span> {$pup}<br>
    <span id ="lats" ><input type ="checkbox" id ="lats1" name ="back2[]" value="Lat Pulls">  <label  for="lats1">Lat Pulldown&nbsp;&nbsp;</label> </span>{$lp}<br>
    <span id ="dbrow" ><input type ="checkbox" id ="dbrow1" name ="back2[]" value="Dumbbell Row">  <label  for="dbrow1">Dumbbell Row &nbsp;&nbsp;</label> </span>{$drow} <br>
    
EOFDATA;
return  $back;
}

function getShoulder($db,$table){
     $sqlQuery = "select data from $table where name = 'ohp'";
    $sqlQuery1 = "select data from $table where name = 'dbshoulderpress'";
	$result = mysqli_query($db, $sqlQuery);
     $result1 = mysqli_query($db,$sqlQuery1);
     if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $oh = $row['data'];
        $dbshoulder = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
     	mysqli_close($db);
        $direct = "images/workouts/";
    $ohp = "<img id =\"ohpPic\" src=\"data:image/jpeg;base64,".base64_encode($oh)."\"  />";
    $dshoulder ="<img id =\"dbshouldPic\" src=\"data:image/jpeg;base64,".base64_encode($dbshoulder)."\"  />";
    $shrugs= "<img id =\"shrugsPic\" src =\" ".$direct."dbshrugs.jpg\"  />";
    $raises= "<img id =\"raisesPic\" src =\" ".$direct."dbraises.jpg\"  />";
    $ohmach= "<img id =\"ohpMachPic\" src =\" ".$direct."ohpmachine.jpg\"   />";
   
    $shoulder = <<< EOFDATA
    
    
   <span id ="dbshould" ><input type ="checkbox" id ="dbshould1" name ="shoulders2[]" value="Dumbbell Shoulder Press">  <label  for="dbshould1">Dumbbell Shoulder Press &nbsp;&nbsp;</label> </span> {$dshoulder}<br>
   <span id ="ohp" ><input type ="checkbox" id ="ohp1" name ="shoulders2[]" value="Overhead Press">  <label  for="ohp1">Overhead Press&nbsp;&nbsp;</label> </span> {$ohp}<br>
    <span id ="dbshrugs" ><input type ="checkbox" id ="dbshrugs1" name ="shoulders2[]" value="Dumbbell Shrugs">  <label  for="dbshrugs1">Dumbbell Shrugs&nbsp;&nbsp;</label> </span>{$shrugs} <br>
    <span id ="dbraise" ><input type ="checkbox" id ="dbraise1" name ="shoulders2[]" value="Dumbbell Raises">  <label  for="dbraise1">Dumbbell Raises&nbsp;&nbsp;</label> </span>{$raises}<br>
    <span id ="ohpmach" ><input type ="checkbox" id ="ohpmach1" name ="shoulders2[]" value="Overhead Press machine">  <label  for="ohpmach1">Overhead Press machine &nbsp;&nbsp;</label> </span>{$ohmach }<br>
    
EOFDATA;
return  $shoulder;
    
}

function getArms($db,$table){
    $sqlQuery = "select data from $table where name = 'preacher'";
    $sqlQuery1 = "select data from $table where name = 'dips'";
	$result = mysqli_query($db, $sqlQuery);
     $result1 = mysqli_query($db,$sqlQuery1);
     if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $preacher = $row['data'];
        $dips = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
     	mysqli_close($db);
        $direct = "images/workouts/";
    $preacher = "<img id =\"preacherPic\" src=\"data:image/jpeg;base64,".base64_encode($preacher)."\"  />";
    $dips ="<img id =\"dipsPic\" src=\"data:image/jpeg;base64,".base64_encode($dips)."\"  />";
    $hammer= "<img id =\"hammerPic\" src =\" ".$direct."hammercurl.jpg\"  />";
    $reverse= "<img id =\"reversePic\" src =\" ".$direct."reversecurl.jpg\"  />";
    $skull= "<img id =\"skullPic\" src =\" ".$direct."skullcrusher.jpg\"   />";
    $dbtri= "<img id =\"dbtriPic\" src =\" ".$direct."dbtricep.jpg\"   />";
    $tricab= "<img id =\"tricablePic\" src =\" ".$direct."tricepcable.jpg\"   />";
    
    $arms = <<< EOFDATA
    
    
   <span id ="preacher" ><input type ="checkbox" id ="preacher1" name ="arms2[]" value="Preacher curls">  <label  for="preacher1"> Preacher curls&nbsp;&nbsp;</label> </span> {$preacher}<br>
   <span id ="hammer" ><input type ="checkbox" id ="hammer1" name ="arms2[]" value="Hammer curls">  <label  for="hammer1">Hammer curls&nbsp;&nbsp;</label> </span> {$hammer}<br>
    <span id ="reverse" ><input type ="checkbox" id ="reverse1" name ="arms2[]" value="Reverse curls">  <label  for="reverse1">Reverse curls&nbsp;&nbsp;</label> </span> {$reverse}<br>
    <span id ="dips" ><input type ="checkbox" id ="dips1" name ="arms2[]" value="Dips">  <label  for="dips1">Dips&nbsp;&nbsp;</label> </span> {$dips}<br>
    <span id ="skull" ><input type ="checkbox" id ="skull1" name ="arms2[]" value="Skull crushers">  <label  for="skull1">Skull crushers &nbsp;&nbsp;</label> </span>{$skull} <br>
    <span id ="tricable" ><input type ="checkbox" id ="tricable1" name ="arms2[]" value="Tricep Extensions">  <label  for="tricable1">Tricep Extensions&nbsp;&nbsp;</label> </span>{$tricab} <br>
    <span id ="dbtri" ><input type ="checkbox" id ="dbtri1" name ="arms2[]" value="Dumbbell Tricep Extension">  <label  for="dbtri1">Dumbbell Tricep Extension &nbsp;&nbsp;</label> </span>{$dbtri} <br>
EOFDATA;
return  $arms;
}

function getLegs($db,$table){
    
    $sqlQuery = "select data from $table where name = 'squat'";
    $sqlQuery1 = "select data from $table where name = 'splitsquat'";
	$result = mysqli_query($db, $sqlQuery);
    $result1 = mysqli_query($db,$sqlQuery1);
    $source;
    $squat;
    $splitsquat;
    
	if ($result ) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $squat = $row['data'];
        $splitsquat = $row1['data'];

		mysqli_free_result($result);
	} else { 				   
		$body = "<h3>Failed to retrieve document : ".mysqli_error($db)." </h3>";
	}
		$direct = "images/workouts/";
	/* Closing */
	mysqli_close($db);
    $image_squat = "<img id =\"squatPic\" src=\"data:image/jpeg;base64,".base64_encode($squat)."\" alt=\"squat\" height= \"200px\"/>";
    $image_split ="<img id =\"splitPic\" src=\"data:image/jpeg;base64,".base64_encode($splitsquat)."\" alt=\"splitsquat\" height= \"200px\"/>";
    $deads= "<img id =\"deadsPic\" src =\" ".$direct."deadlift_girl.jpg\" alt=\"deadlift\" height =\"200px\" />";
    $lunge= "<img id =\"lungePic\" src =\" ".$direct."lunges1.jpg\" alt=\"lunge\"  />";
    $lpress= "<img id =\"lpressPic\" src =\" ".$direct."legpress.png\" alt=\"legpress\"  />";
    
    

    //$squat_src ="data:image/jpeg;base64,".base64_encode($squat);
    $legs = <<< EOFDATA
    
    
   <span id ="squat" ><input type ="checkbox" id ="squats1" name ="legs2[]" value="Backsquat">  <label  for="squats1">Squats &nbsp;&nbsp;</label> </span> {$image_squat}<br>
   <span id ="splitsquat" ><input type ="checkbox" id ="splitsquat1" name ="legs2[]" value="Split Squat">  <label  for="splitsquat1">Split Squat &nbsp;&nbsp;</label> </span> {$image_split}<br>
    <span id ="dl" ><input type ="checkbox" id ="deads1" name ="legs2[]" value="Deadlift">  <label  for="deads1">Deadlift &nbsp;&nbsp;</label> </span> {$deads}<br>
    <span id ="lunge" ><input type ="checkbox" id ="lunges1" name ="legs2[]" value="Lunges">  <label  for="lunges1">Lunges &nbsp;&nbsp;</label> </span> {$lunge}<br>
    <span id ="press" ><input type ="checkbox" id ="legpress1" name ="legs2[]" value="Leg Press">  <label  for="legpress1">Leg Press &nbsp;&nbsp;</label> </span> {$lpress}<br>
    
EOFDATA;

return $legs;
}

    
function connectToDB($host, $user, $password, $database) {
	$db = mysqli_connect($host, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Connect failed.\n".mysqli_connect_error();
		exit();
	}
	return $db;
}

?>