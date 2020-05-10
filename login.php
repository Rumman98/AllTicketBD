
<center><form action="login.php" method="POST">
  <div>
    <img src="login.png" class="avatar">
  </div>
  <center><h2>Login portal</h2></center>

  <div>
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <input type="submit" value="Login" name="submit" class="submit">

    <h2> Dont have a account?</h2>
    <a href="registrar.php" class="signup">Sign Up</a>
    <a href="Home.php" class="signup">Cancel</a>
  </div>
</form></center>

	<?php
	session_start();
  include_once"crud.php";
	$Crud=new crud();
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$password=md5($_POST['psw']);
		$loggedIn=$Crud->getData("select * from register where email='$email' and password='$password'");

		if ($loggedIn) {
			foreach($loggedIn as $res){
      $email = $res['email'];
      $name = $res['name'];
    }
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    header("Location:After_login.php");
		}
	}
	?>
  

  <style>
* {
  box-sizing: border-box;
  border-radius: 40px;
}
form {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 50vh;
  margin: 10%;
   position: center;
}


input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}
.submit {
border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.signup {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.submit:hover {
  opacity: 0.8;
}
.signup:hover{
  opacity: 0.8;
}



.avatar {
  width: 30%;
  border-radius: 30%;
}

</style>
