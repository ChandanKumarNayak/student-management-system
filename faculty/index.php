<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bhakta Charan Vidya Mandir(BCVM) is a coaching institution which provides coaching classes for standard 8th,9th & 10th students along with hostel facilities for boys.">
<meta name="keywords" content="BCVM,Bhakta Charan Vidya Mandir,AMVP,Akhandala Mani Vidya Pitha,Rahama,Boys Hostel In Rahama">
<meta name="owner" content="Suresh Chandra Dalai">
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<link rel="icon" type="image/png" href="logo.png"/>
<title>Faculty Login | BCVM</title>
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="">
					<span class="login100-form-title p-b-32">
						Faculty Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="faculty_username" placeholder="Enter username" required>
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<script src="jquery-3.2.1.min.js"></script>
	<script src="main.js"></script>
</body>
</html>



<!--===============================================Server Part================================================-->

<?php

include 'connect.php';

//LOGIN USER
if(isset($_POST['login'])){
    
  $faculty_username = $_POST['faculty_username'];
  $sqluser="SELECT faculty_username FROM faculty WHERE faculty_username='$faculty_username' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong username.");</script>';}
  else
  { 

  $password = $_POST['password'];
  $sqluser="SELECT password FROM faculty WHERE password='$password' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong password.");</script>';}
	  
  $query = "SELECT * FROM faculty WHERE faculty_username = '$faculty_username' AND password = '$password' AND status = '1'";
  $results = mysqli_query($db,$query);
  if(mysqli_num_rows($results) == 1){
                $_SESSION['faculty_username'] = $faculty_username;
              
  echo '<meta http-equiv="refresh" content="0;faculty_profile.php" />';          
}
else
{
$query1 = "SELECT * FROM faculty WHERE faculty_username = '$faculty_username' AND password = '$password' AND status = '0'";
  $results1 = mysqli_query($db,$query1);
  if(mysqli_num_rows($results1) == 1){
                $_SESSION['faculty_username'] = $faculty_username;
             
  echo '<meta http-equiv="refresh" content="0;faculty_details.php" />';
  }
  else
  {
	 echo '<meta http-equiv="refresh" content="0;faculty_login.php" />';  
  }
}
}
}

?>
