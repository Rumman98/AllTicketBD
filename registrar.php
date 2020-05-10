<form action="registrar.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Your Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required>

     <label for="email"><b>Your age</b></label>
    <input type="text" placeholder="Enter Your age" name="age" required>

     <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <center><input type="submit" class="button" value="signup" name="submit">
    <a href="login.php" class="button">Cancel</a></center>
  </div>
  </form>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
   	   $name=$_POST['name'];
       $age=$_POST['age'];
       $email = $_POST['email'];
       $password =md5($_POST['psw']);


       $res = $crud->execute("insert into register(name,age,email,password) values('$name','$age','$email', '$password')");

       if($res){
           echo("Successfully registrared");
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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
   background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.button{
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 200px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:hover {
  opacity:1;
}


.container {
  padding: 16px;
}


</style>