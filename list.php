<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<div class="header"><h1>YOUR EVENTS:</h1></div>
	<div class="mybody" style="margin-left:400px;">
	<?php

			$username="root";
			$password="";
			$database="mydb";
			mysql_connect("localhost",$username,$password);
			mysql_select_db($database) or die("Unable to select database");

			$query="SELECT * FROM myevents";

			$result=mysql_query($query);
			echo "<table border='1px solid black' cellpadding='10px' margin='50px'>";
			echo "<tr><th>Event Name</th><th>Start Date</th><th>End Date</th><th>Time</th><tr>";

			while($row = mysql_fetch_array($result))
				{
					echo '<td>' . $row['theEvent'] . '</td>';
					echo '<td>' . $row['startdate'] . '</td>';
					echo '<td>' . $row['enddate'] . '</td>';
					echo '<td>' . $row['time'] . '</td>';


					echo "</tr>";
					}

					echo "</table>";

					mysql_close();

	?><br>

	<button style="color: white; padding: 10px; margin-left: 5px; margin-bottom: 10px; text-decoration: none;"><a href="index.php">BACK TO EVENT CREATOR</a></button>
	<script type="text/javascript" src="js/script.js"></script>

	</div>
</body>
