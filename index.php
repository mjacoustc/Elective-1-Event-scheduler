<!DOCTYPE html>
<html>
<head>
	<title>EVENT SCHEDULER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h1> EVENT SCHEDULER </h1>
	</div>

	<div class="box">
	
		<div id="response"></div>
		<!-- event name -->
		Event Name:
		<input type="text" id="theEvent" placeholder="Your Event"><br>
		<!-- event date -->
		Date Start:
		<input type="date" id="startdate"><br>
		Date End:
		<input type="date" id="ender"><br>
		Event Time:
		<input	type="time" id="time"><br>
		<button onclick="obj.addEvent()">CREATE EVENT</button>
		<button><a href="list.php">GO TO EVENT LIST</a></button>
	</div>
	

	<script type="text/javascript" src="js/script2.js"></script>
	

</body>
</html>