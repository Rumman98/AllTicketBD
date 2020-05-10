<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:admin_login.php');
  }
  ?>
 
<center><img src="all ticket.png" style="width:250px;height:250px;"></center>
<center><h1><b>Admin Panel</b></h1></center>
		<center><button class="button" onclick="$('#bustable').slideUp();" id="busdata">Bus Ticket Booking Information</button>

      <div id="bustable">
         <?php
 header("Access-Control-Allow-Origin: *");
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from busticketbook order by id DESC";

$result = $crud->getData($query);

?>
        <center><button onclick="$('#bustable').slideUp();" id="busdata" class="cancel">slide up</button>

<center><img src="content/bus.png" style="width:200px;height:200px;"></center>
<center><h1><b>Bus Ticket Booking Information</b></h1></center>


<center><table border="1" class="table">

  <tr>
    <td> First Name </td>
    <td> Last Name </td>
    <td> Mobile Number </td>
    <td> Email </td>
    <td> Selected Location </td>
    <td> Dropping Point </td>
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
     echo "<td>".$res['Pickup']."</td>";
     echo "<td>".$res['Dropping']."</td>";
     echo "<td>".$res['Time']."</td>";
     echo "<td>".$res['Date']."</td>";

     echo "<td> <a href='edit_bus_data.php?id=$res[id]'>Edit</a> | 
               <a href='bus_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
   }
   ?>
</table></center>
</div>





		<button class="button" onclick="$('#movietable').slideUp();" id="moviedata">Movie Ticket Booking Information</button>


<div id="movietable">

   <center><button onclick="$('#movietable').slideUp();" id="busdata" class="cancel">slide up</button>

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
</div>



<button class="button" onclick="$('#traintable').slideUp();" id="traindata">Train Ticket Booking Information</button>

<?php
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from trainticketbook order by id DESC";

$result = $crud->getData($query);

?>
<div id="traintable">
  <center><button onclick="$('#traintable').slideUp();" id="busdata" class="cancel">slide up</button>
<center><img src="content/train.png" style="width:200px;height:200px;"></center>
<center><h1><b>Train Ticket Booking Information</b></h1></center>



<center><table border="1" class="table">

  <tr>
    <td> First Name </td>
    <td> Last Name </td>
    <td> Mobile Number </td>
    <td> Email </td>
    <td> Selected Location </td>
    <td> Dropping Point </td>
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
     echo "<td>".$res['Pickup']."</td>";
     echo "<td>".$res['Dropping']."</td>";
     echo "<td>".$res['Time']."</td>";
     echo "<td>".$res['Date']."</td>";

     echo "<td> <a href='edit_train_data.php?id=$res[id]'>Edit</a> | 
               <a href='train_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
   }
   ?>
</table></center>
</div>






		<button class="button" onclick="$('#launchtable').slideUp();" id="launchdata">Launch Ticket Booking Information</button>

<?php

include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from launchticketbook order by id DESC";

$result = $crud->getData($query);

?>

<div id="launchtable">
   <center><button onclick="$('#launchtable').slideUp();" id="launchdata" class="cancel">slide up</button></center>
<center><img src="content/launch.png" style="width:200px;height:200px;"></center>
<center><h1><b>Launch Ticket Booking Information</b></h1></center>



<center><table border="1" class="table">

  <tr>
    <td> First Name </td>
    <td> Last Name </td>
    <td> Mobile Number </td>
    <td> Email </td>
    <td> Selected Location </td>
    <td> Dropping Point </td>
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
     echo "<td>".$res['Pickup']."</td>";
     echo "<td>".$res['Dropping']."</td>";
     echo "<td>".$res['Time']."</td>";
     echo "<td>".$res['Date']."</td>";

      echo "<td> <a href='edit_launch_data.php?id=$res[id]'>Edit</a> | 
               <a href='launch_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
   }
   ?>
</table></center>
</div>



		<button class="button" onclick="$('#planetable').slideUp();" id="planedata">Plane Ticket Booking Information</button>

<?php
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from planeticketbook order by id DESC";

$result = $crud->getData($query);

?>
<div id="planetable">
   <center><button onclick="$('#planetable').slideUp();" id="planedata" class="cancel">slide up</button></center>
<center><img src="content/plane.png" style="width:200px;height:200px;"></center>
<center><h1><b>Plane Ticket Booking Information</b></h1></center>



<center><table border="1" class="table">

  <tr>
    <td> First Name </td>
    <td> Last Name </td>
    <td> Mobile Number </td>
    <td> Email </td>
    <td> Selected Location </td>
    <td> Dropping Point </td>
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
     echo "<td>".$res['Pickup']."</td>";
     echo "<td>".$res['Dropping']."</td>";
     echo "<td>".$res['Time']."</td>";
     echo "<td>".$res['Date']."</td>";

     echo "<td> <a href='edit_plane_data.php?id=$res[id]'>Edit</a> | 
               <a href='plane_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
   }
   ?>
</table></center>
</div>



		<a href="logout.php"><button class="button" >Logout</button></a></center>

	


<style>

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
  width: 70%;
  align-items: center;
  font-size: 1.2rem;
   font-family: 'PT Sans', sans-serif;

	}
  .cancel{
     background-color: #FC4747;
  border: none;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 100px;
  width: 10%;
  align-items: center;
   font-family: 'PT Sans', sans-serif;
  }

</style>

<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#busdata').click(function(){
      $('#bustable').slideDown();
    })
    
    $('#moviedata').click(function(){
      $('#movietable').slideDown();
    })

     $('#traindata').click(function(){
      $('#traintable').slideDown();
    })

      $('#launchdata').click(function(){
      $('#launchtable').slideDown();
    })

        $('#planedata').click(function(){
      $('#planetable').slideDown();
    })
    
    
    
  })
</script>