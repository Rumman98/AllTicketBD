<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"movieticketbook")){
		header("location:show_Movie_Ticket_Booking_Information.php");
	}


?>