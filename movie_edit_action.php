<?php
	
	include_once 'crud.php';
	
	$Crud = new crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
         $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email'];
       $movie=$_POST['select_movie'];
       $theater=$_POST['select_theater'];
       $Time=$_POST['Time'];
       $date=$_POST['date'];
		
		$result = $Crud->execute("Update movieticketbook SET First_Name='$f_name',Last_Name='$l_name',Mobile_Number='$mobile',Email='$email',Movie_Name='$movie',Theater='$theater',Time='$Time',Date='$date' where id=$id");
		
		if($result){
			header("Location:show_Movie_Ticket_Booking_Information.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>
