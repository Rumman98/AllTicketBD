<?php
	
	include_once 'crud.php';
	
	$Crud = new crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
         $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email'];
       $Pickup=$_POST['select_location'];
       $Dropping=$_POST['dropping_point'];
       $Time=$_POST['Time'];
       $date=$_POST['date'];
		
		$result = $Crud->execute("Update trainticketbook SET First_Name='$f_name',Last_Name='$l_name',Mobile_Number='$mobile',Email='$email',Pickup='$Pickup',Dropping='$Dropping',Time='$Time',Date='$date' where id=$id");
		
		if($result){
			header("Location:show_Train_Ticket_Booking_Information.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>
