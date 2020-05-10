<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"launchticketbook")){
		header("location:show_Launch_Ticket_Booking_Information.php");
	}


?>