<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	$query = "select * from planeticketbook where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
         $f_name=$res['First_Name'];
       $l_name=$res['Last_Name'];
       $mobile=$res['Mobile_Number'];
       $email = $res['Email'];
       $Pickup=$res['Pickup'];
       $Dropping=$res['Dropping'];
       $Time=$res['Time'];
       $date=$res['Date'];
	
	}
?>

<form action="plane_edit_action.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
    <input type="text" name="first" value="<?php echo $f_name;?>"/>
    <input type="text" name="last" value="<?php echo $l_name;?>"/>
	<input type="text" name="mobile" value="<?php echo $mobile;?>"/>
	<input type="text" name="email" value="<?php echo $email;?>"/>
	<input type="text" name="select_location" value="<?php echo $Pickup;?>"/>
	<input type="text" name="dropping_point" value="<?php echo $Dropping;?>"/>
	<input type="text" name="Time" value="<?php echo $Time;?>"/>
	<input type="date" name="date" value="<?php echo $date;?>"/>
	<input type="submit" name="update" value="Update"/>
</form>