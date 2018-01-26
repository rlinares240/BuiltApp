<!doctype html>
    
    
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Select Target Area</title>
        <link rel="stylesheet" href="css/processSelection.css"/>
    </head>
    
    
    <header>
       <form >
			<input type="button" name="home" id="home" value="" />
			
		</form>
    </header>
    
    <body>
        
		<div id="choose">
			Select Target.
		</div> <br/>
        
        <form action="processSelection.php" method="post">
			<br>
			<select name = "workoutDay">
			<?php session_start();
			if ($_SESSION['workoutDay']==1) {
echo"<option value =\"1\" selected=\"selected\"> 1 </option>";
}else {
echo"<option value =\"1\"> 1 </option>";
}
if ($_SESSION['workoutDay']==2) {
echo"<option value =\"2\" selected=\"selected\"> 2 </option>";
}else {
echo"<option value =\"2\"> 2 </option>";
}
if ($_SESSION['workoutDay']==3) {
echo "<option value =\"3\" selected=\"selected\"> 3 </option>";
}else {
echo "<option value =\"3\"> 3 </option>";
}
if ($_SESSION['workoutDay']==4) {
echo "<option value =\"4\" selected=\"selected\"> 4 </option>";
}else {
echo "<option value =\"4\"> 4 </option>";
}
if ($_SESSION['workoutDay']==5) {
echo "<option value =\"5\" selected=\"selected\"> 5 </option>";
}else {
echo "<option value =\"5\"> 5 </option>";
}
					
			?>
		</select>
			<!--<select name = "workoutDay">
				<option value ="1">1 </option>
				<option value="2">2 </option>
				<option value ="3">3</option>
				<option value ="4">4</option>
				<option value ="5">5</option>-->
			 <input type ="submit" id ="finalizeDay" name ="finalizeDay" value = "Submit"/><br><br>
        
        <input type="submit"   name="legs" id="legs" value="LEGS"/> &nbsp;
		<input type="submit"   name="abs" id="abs" value="ABS"/> <br/>
        <input type="submit"   name="chest" id="chest" value="CHEST"/> &nbsp;
        <input type="submit"   name="back" id="back" value="BACK"/>  <br/> 
        <input type="submit"   name="shoulder" id="shoulders" value="SHOULDERS"/>  &nbsp;
        <input type="submit"   name="arms" id="arms" value="ARMS"/>
            
            
        </form>
        <script>
				document.getElementById("home").onclick= function(){location.href="choose.php";};
			</script>
        
    </body>
    
    
    
    
</html>