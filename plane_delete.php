<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"planeticketbook")){
		header("location:show_Plane_Ticket_Booking_Information.php");
	}


?>