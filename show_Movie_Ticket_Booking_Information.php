<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:admin_login.php');
  }
  ?>

<?php
 header("Access-Control-Allow-Origin: *");
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from movieticketbook order by id DESC";

$result = $crud->getData($query);

?>

<center><img src="content/movie.png" style="width:200px;height:200px;"></center>
<center><h1><b>Movie Ticket Booking Information</b></h1></center>


<center><table border="1" class="table" >

	<tr>
		<td> First Name </td>
		<td> Last Name </td>
		<td> Mobile Number </td>
		<td> Email </td>
		<td> Movie Name </td>
		<td> Theater </td>
		<td> Time </td>
		<td> Date </td>

	</tr>
	<?php
	 foreach($result as $key=>$res){
		 echo "<tr >";
		 echo "<td>".$res['First_Name']."</td>";
		 echo "<td>".$res['Last_Name']."</td>";
		 echo "<td>".$res['Mobile_Number']."</td>";
		 echo "<td>".$res['Email']."</td>";
		 echo "<td>".$res['Movie_Name']."</td>";
		 echo "<td>".$res['Theater']."</td>";
		 echo "<td>".$res['Time']."</td>";
		 echo "<td>".$res['Date']."</td>";

		  echo "<td> <a href='edit_movie_data.php?id=$res[id]'>Edit</a> | 
               <a href='movie_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
	 }
	 ?>
</table></center>
<center><a href="admin.php"><button class="button">Back</button></a></center>

<style>
	.table{
		width: 100%;
		background color: : #717171;
		font-size: 18px;
		font-family: 'Josefin Sans';
	}

	.button{
   background-color: #FC4747;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 100px;
  width: 40%;
  align-items: center;
  font-size: 1.2rem;
   font-family: 'PT Sans', sans-serif;

	}


</style>