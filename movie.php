<?php session_start();
  if(!isset($_SESSION['email'])){
    header('location:login.php');
  }
  ?>

<form action="movie.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">
    <div class="imgcontainer">
    <img src="content/movie ticket.png" alt="Avatar" class="avatar">
  </div>
    <center><h2>Customer Information</h2></center>
    <hr>
   <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter Your first name" name="first" required>

    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your last name" name="last" required>

     <label ><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Your mobile number" name="mobile" required>

     <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

  

<center><label><b>Select movie:</b></label>
<p>you will find movies in selection box that are recently running in theaters</p>
    <select class="selectm" name="select_movie">
        <option value="selected"> Select Movie </option>
        <option value="Avengers-End"> Avengers-End Game</option>
        <option value="IT-Chapter2"> IT-Chapter2 </option>
        <option value="Saaho"> Saaho</option>
        <option value="password"> password </option>
      </select></center><br>
      <center><label><b>Select Theater:</b></label>
    <select class="select" name="select_theater">
       <option value="selected"> Select Theatre </option>
        <option value="shymoli-square"> shymoli-square</option>
        <option value="Sony-theatre"> Sony-theatre</option>
        <option value="Bolaka-theatre"> Bolaka-theatre</option>
        <option value="Bashundhara-Cineplex">Bashundhara-Cineplex</option>
        <option value="Star-cineplex"> Star-cineplex </option>
      </select></center><br>

       <center><label><b>Select Time:</b></label>
      <select class="select" name="Time">
        <option value="selected"> Select Time </option>
       <option value="10amTO12am"> 10:00AM-12:00AM </option>
        <option value="12pmTO2:00pm">12:00PM-2:00PM</option>
        <option value="2pmTO4pm">2:00PM-4:00PM</option>
        <option value="4pmTO6pm">4:00PM-6:00PM</option>
      </select><br></center>


              <label><b>Select Date:</b></label>
              <input type="date" name="dept_date" class="date">

    <center><input type="submit" onclick="alert('Booking Successfull')" class="button" value="Book now" name="submit">
   <a href="After_login.php" class="button">Cancel</a></center>
  </div>
  </form>

  <?php 

include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email'];
       $movie=$_POST['select_movie'];
       $Theater=$_POST['select_theater'];
       $Time=$_POST['Time'];
       $date=$_POST['dept_date'];


       $res = $crud->execute("insert into movieticketbook(First_Name,Last_Name,Mobile_Number,Email,Movie_Name,Theater,Time,Date) values('$f_name','$l_name','$mobile', '$email','$movie','$Theater','$Time','$date')");

       if($res){
        

           echo("Movie Ticket Booking Successfull");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size: 1.2rem;
}
.imgcontainer {
  text-align: center;
  margin: 15px 0 10px 0;
}
img.avatar {
  width: 40%;
  border-radius: 20px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.button {
   border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 20px 150px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:hover {
  opacity:5;
}




.container {
  padding: 16px;
}

.select{
   width: 45%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size: 1.2rem;
}
.selectm{
   width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size: 1.2rem;
}

.date{
  width: 100%;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  font-family: 'PT Sans', sans-serif;
  font-size: 1.2rem;
  display: block;
  padding: 0.5rem 1rem;
}
}
</style>