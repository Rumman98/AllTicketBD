<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"busticketbook")){
		header("location:show_Bus_Ticket_Booking_Information.php");
	}


?>