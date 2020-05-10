<?php session_start();
  if(!isset($_SESSION['email'])){
    header('location:login.php');
  }
  ?>
<form action="bus.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">
    <div class="imgcontainer">
    <img src="content/bus ticket.png" alt="Avatar" class="avatar">
  </div>
    <center><h2>Passenger Information</h2></center>
    <hr>
     <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter Your first name" name="first" required>

    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your last name" name="last" required>

     <label ><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Your mobile number" name="mobile" required>

     <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

 

<center><label><b>Pickup point *</b></label>
    <select class="select" name="select_location">
        <option value="selected"> Select Location </option>
        <option value="Dhaka"> Dhaka</option>
        <option value="Chattagram"> Chattagram </option>
        <option value="Rajshahi"> Rajshahi </option>
        <option value="khulna"> khulna </option>
        <option value="Bogra"> Bogra </option>
        <option value="Feni"> Feni </option>
        <option value="Rangpur"> Rangpur </option>
      </select></center><br>
<center><label><b>Dropping point </b></label>
      <select class="select" name="dropping_point">
        <option value="selected"> Select Location </option>
        <option value="Dhaka"> Dhaka </option>
        <option value="Chattagram"> Chattagram </option>
        <option value="Rajshahi"> Rajshahi </option>
        <option value="khulna"> khulna </option>
        <option value="Bogra"> Bogra </option>
        <option value="Feni"> Feni </option>
        <option value="Rangpur"> Rangpur </option>
      </select></center></br>

       <center><label><b>Bus Schedule:</b></label>
      <select class="select" name="Time">
        <option value="selected"> Select Time </option>
       <option value="10am"> 10:00AM </option>
        <option value="10:30am">10:30AM</option>
        <option value="11am">11:00AM</option>
        <option value="11:30am">11:30AM</option>
      </select><br></center>


              <label><b>Departure Date:</b></label>
              <input type="date" name="dept_date" class="date">

    <center><input type="submit" onclick="alert('Booking Successfull')" class="button" value="Book now" name="submit" >
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
       $Pickup=$_POST['select_location'];
       $Dropping=$_POST['dropping_point'];
       $Time=$_POST['Time'];
       $date=$_POST['dept_date'];


       $res = $crud->execute("insert into busticketbook(First_Name,Last_Name,Mobile_Number,Email,Pickup,Dropping,Time,Date) values('$f_name','$l_name','$mobile', '$email','$Pickup','$Dropping','$Time','$date')");

       if($res){
        

           echo("Bus Ticket Booking Successfull");
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

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.select{
   width: 40%;
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

</style>