<?php
	include_once('dbconnect.php');

	if(isset($_GET) && $_GET['theEvent'] != ''){
		$theEvent = $_GET['theEvent'];
		$startdate = $_GET['startdate'];
		$startdate = $_GET['enddate'];
		$enddate = $_GET['time'];
		$query = "INSERT INTO myevents VALUES('','$theEvent','$startdate','$enddate','$time')";

			if($conn->query($query) === true){
				$data['status'] = 1;
				$data['message'] = "Event Successfully Added";
				$data['addEvent'] = array('theEvent' => $theEvent);
				$data['addEvent'] = array('startdate' => $startdate);
				$data['addEvent'] = array('enddate' => $enddate);
				$data['addEvent'] = array('time' => $time);
				echo json_encode($data);
			}else{
				echo "Failed to Add Event";
			}
	}else{
		echo "Invalid Input";
	}
?>