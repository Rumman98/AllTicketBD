<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	$query = "select * from movieticketbook where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
         $f_name=$res['First_Name'];
       $l_name=$res['Last_Name'];
       $mobile=$res['Mobile_Number'];
       $email = $res['Email'];
       $movie=$res['Movie_Name'];
       $theater=$res['Theater'];
       $Time=$res['Time'];
       $date=$res['Date'];
	
	}
?>

<form action="movie_edit_action.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
    <input type="text" name="first" value="<?php echo $f_name;?>"/>
    <input type="text" name="last" value="<?php echo $l_name;?>"/>
	<input type="text" name="mobile" value="<?php echo $mobile;?>"/>
	<input type="text" name="email" value="<?php echo $email;?>"/>
	<input type="text" name="select_movie" value="<?php echo $movie;?>"/>
	<input type="text" name="select_theater" value="<?php echo $theater;?>"/>
	<input type="text" name="Time" value="<?php echo $Time;?>"/>
	<input type="date" name="date" value="<?php echo $date;?>"/>
	<input type="submit" name="update" value="Update"/>

</form>