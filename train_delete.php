<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"trainticketbook")){
		header("location:show_Train_Ticket_Booking_Information.php");
	}


?>