

<center><form action="admin_login.php" method="POST">
  <div>
    <img src="login.png" class="avatar">
  </div>
  <center><h2>Admin Login portal</h2></center>

  <div>
    <label><b>User ID</b></label>
    <input type="number" placeholder="Enter ID" name="id_number" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <center><input type="submit" value="Login" name="submit" class="submit"><br>
      <br>
    <a href="Home.php" class="submit">Cancel</a></center>
       
  </div>
</form></center>

	<?php
	session_start();
  include_once"crud.php";
	$Crud=new crud();
	if (isset($_POST['submit'])) {
		$id_number=$_POST['id_number'];
		$password=$_POST['psw'];
		$loggedIn=$Crud->getData("select * from admin_access where id_number='$id_number' and password='$password'");

		if ($loggedIn) {
			foreach($loggedIn as $res){
      $email = $res['id_number'];
      $name = $res['name'];
    }
    $_SESSION['id_number'] = $id_number;
    header("Location:admin.php");
		}
    else{
      echo "Incorrect ID or Password";
    }
	}
	?>
  

  <style>
* {
  box-sizing: border-box;
  border-radius: 60px;
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


.submit:hover {
  opacity: 0.8;
}
.avatar {
  width: 30%;
  border-radius: 30%;
}

</style>
