<?php
//retrieve session data
 session_start();
 $dbHost = "academic-mysql.cc.gatech.edu";         //Location Of Database usually its localhost 
 $dbUser = "cs4400_Group_59";            //Database User Name 
 $dbPass = "sg44Hlvd";            //Database Password 
 $dbDatabase = "cs4400_Group_59";    //Database Name 
 
 $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
 //Connect to the databasse 
 mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");   
?>
 
<html>
<head>
<title>GT Car Rental: Maintenance Requests   </title>

<body bgcolor="#000000">
<center>
<font color="#ffffff">


</head>
<body>

<p><b>Maintenance Requests </b></p>        


<!-- ************************************************************* -->  


<!-- ************************************************************* -->  
       

<form action = "maintenanceSubmit.php" method = "post">
	Select the Location:
	<br>
	<select name="location">
	<?php
	//IMPORTANT CODE
	//Lists the locations from the SQL table in the option list
	$getLocations = mysql_query("SELECT Location_Name FROM Location");
	while ($temp = mysql_fetch_assoc($getLocations)) {
		echo "<option value='".$temp['Location_Name']."'>".$temp['Location_Name']."</option>";
	}
	?>
	</select>
	<br>

	<input type="submit" value="Choose Car">
</form>
