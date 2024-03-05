<?php 
   session_start(); 
   include('connect.php'); 

  if (!isset($_SESSION['admin_username'])) {
  	header('location: admin_login.php');
  }
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_username']);
  	header("location: ../index.php");
  }
	  
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bhakta Charan Vidya Mandir(BCVM) is a coaching institution which provides coaching classes for standard 8th,9th & 10th students along with hostel facilities for boys.">
<meta name="keywords" content="BCVM,Bhakta Charan Vidya Mandir,AMVP,Akhandala Mani Vidya Pitha,Rahama,Boys Hostel In Rahama">
<meta name="owner" content="Suresh Chandra Dalai">
<link rel="icon" type="image/png" href="logo.png"/>
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<title>Privacy Settings | BCVM</title>

<style type="text/css">
	
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		color: #fff;
		background: #001f3f;
		padding: 5px 16px;
		border-radius: 0;
		border: none;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.navbar img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #efe5ff;
		padding-left: 0;
		padding-right: 50px;
		font-size: 24px;		
	}
	.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		color: #fff;
	}
	.navbar .navbar-brand i {
		font-size: 25px;
		margin-right: 5px;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .nav-item span {
		position: relative;
		top: 3px;
	}
	.navbar .nav > li a {
		color: #efe5ff;
		padding: 8px 15px;
		font-size: 14px;		
	}
	.navbar .nav > li a:hover, .navbar .nav > li a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.3);
	}
	.navbar .nav > li > a > i {
		display: block;
		text-align: center;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
    .navbar .dropdown-item .material-icons {
        font-size: 21px;
        line-height: 16px;
        vertical-align: middle;
        margin-top: -2px;
    }
	.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
		color: #fff;
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777 !important;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
		color: #333 !important;
		background: transparent !important;
	}
	.navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.2);
		background: transparent !important;
	}
	.navbar .nav .user-action {
		padding: 9px 15px;
	}
	.navbar .navbar-toggle {
		border-color: #fff;
	}
	.navbar .navbar-toggle .icon-bar {
		background: #fff;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
		background: transparent;
	}
	.navbar .navbar-nav .open .dropdown-menu {
		background: #faf7fd;
		border-radius: 1px;
		border-color: #faf7fd;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .divider {
		background-color: #e9ecef !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 350px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.navbar .nav > li > a > i {
			display: inline-block;			
			text-align: left;
			min-width: 30px;
			position: relative;
			top: 4px;
		}
		.navbar .navbar-collapse {
			border: none;
			box-shadow: none;
			padding: 0;
		}
		.navbar .navbar-form {
			border: none;			
			display: block;
			margin: 10px 0;
			padding: 0;
		}
		.navbar .navbar-nav {
			margin: 8px 0;
		}
		.navbar .navbar-toggle {
			margin-right: 0;
		}
		.input-group {
			width: 100%;
		}
	}

@media screen and (max-width: 650px){
  .column {
    width: 100%;
    display: block;
  }
}

input.MyButton {
width: 100px;
height: 40px;
padding: 0px;
margin: 2px 1px;
cursor: pointer;
font-weight: bold;
font-size: 120%;
color: white;
background: #000;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
background: #3366cc;
color: #fff;
border: 1px solid #fff;
}
a {
  color: yellow;
  margin:2px;
}
a:hover {
  color: white;
}




label {
  display: block;
  position: relative;
  margin: 20px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  font-size:15px;
  color:black;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: blue;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 10px 20px;
  margin:5px;
  background: black;
  font-weight: bold;
  font-size:20px;
  color: yellow;
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}
</style>
</head>
<body>


<?php
include('connect.php');

$getdata=("SELECT * FROM admin WHERE admin_username='".$_SESSION['admin_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))

{
?>	

<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.php" style=""><b>BCVM.com</b></a>  		
		<a href="setting.php?logout='1'" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:15px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
		<a href="edit.php?id=<?php echo $row['id']?>" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:75px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-edit"></i></a>
		<a href="admin_profile.php" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:135px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-home"></i></a>
	</div>
</nav>  
<?php

}
?>

<div class="w3-row">
  <div class="w3-col m6 w3-left">
  <form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
  <center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: USERNAME :-</b></h3></center>
       <label>
   
    <input type="text" class="input" name="admin_username1" placeholder="Enter current username" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    
	<input type="text" class="input" name="admin_username2" placeholder="Enter new username" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    
	<input type="password" class="input" name="admin_username3" placeholder="Confirm new username" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  
  <button type="submit" name="change_username">change</button>
  <button type="reset">reset</button>
  
            </form>
</div>

<!--===============================================Server Username================================================-->

<?php
include('connect.php'); 
   
$arr ="";
$row = "";
$errors = array();
$sql = "";
$admin_username    = "";
$admin_username1    = "";
$admin_username2    = "";
$admin_username3    = "";
 if(isset($_POST['change_username']))
{
 
 $admin_username1 = $_POST['admin_username1'];

  $sqluser="SELECT admin_username FROM admin WHERE admin_username='$admin_username1' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
{echo '<script language="javascript">alert("Current username is wrong.");</script>';}
  else
  { 

 $admin_username2 = $_POST['admin_username2'];

  $sqluser="SELECT admin_username FROM admin WHERE admin_username='$admin_username2' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count > 0)
  {
  echo '<script language="javascript">alert("This username already exist.");</script>';
  }
  else
  
  {
  $admin_username3 = $_POST['admin_username3'];

 
  if (empty($admin_username1)) { array_push($errors, "Current username is required"); }
  if (empty($admin_username2)) { array_push($errors, "New username is required"); }
  if (empty($admin_username3)) { array_push($errors, "Confirm username is required"); }
  if ($admin_username2 != $admin_username3) 
   {echo '<script language="javascript">alert("New username & confirm new username did not match.");</script>';}
   else
   if(count($errors) == 0){

$sql="UPDATE `admin` SET admin_username='$admin_username2' WHERE admin_username='".$_SESSION['admin_username']."' AND admin_username = '$admin_username1'";
if($result = mysqli_query($db, $sql))
if(($result) > 0)
    session_destroy();
  	unset($_SESSION['admin_username']);
 echo '<meta http-equiv ="refresh" content ="0 ;admin_login.php">';
   }   
}
}
}

?>



<div class="w3-col m6 w3-right">
<form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
  <center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: PASSWORD :-</b></h3></center>
       <label>
   
    <input type="text" class="input" name="admin_username1" placeholder="Enter current username" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    
	<input type="text" class="input" name="password1" placeholder="Enter current password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    
	<input type="text" class="input" name="password2" placeholder="Enter new password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    
	<input type="password" class="input" name="password3" placeholder="Confirm new password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  
  <button type="submit" name="change_password">change</button>
  <button type="reset">reset</button>
  
            </form>

</div>
</div>
<!--===============================================Server Password================================================-->

<?php
include('connect.php');
  
$arr ="";
$row = "";
$errors = array();
$sql = "";
$admin_username1    = "";
$password1    = "";
$password2    = "";
$password3    = "";

if(isset($_POST['change_password'])) 
{
  $admin_username1 = $_POST['admin_username1'];

  $sqluser="SELECT admin_username FROM admin WHERE admin_username='$admin_username1' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
{echo '<script language="javascript">alert("Current username is wrong.");</script>';}
  else
  { 
  $password1 = $_POST['password1'];

  $sqluser="SELECT password FROM admin WHERE password='$password1' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
   if($count == 0)
{echo '<script language="javascript">alert("Current password is wrong.");</script>';}
  else
  { 
  $password2 = $_POST['password2'];

  $password3 = $_POST['password3'];
  if (empty($admin_username1)) { array_push($errors, "Username is required"); }
  
  if (empty($password1)) { array_push($errors, "Current password is required"); }
  if (empty($password2)) { array_push($errors, "New password is required"); }
  if (empty($password3)) { array_push($errors, "Confirm password is required"); }
  if ($password2 != $password3) 
  {echo '<script language="javascript">alert("New password & confirm new password did not match.");</script>';}
   else
    if(count($errors) == 0){

$sql="UPDATE `admin` SET password='$password3' WHERE admin_username='$admin_username1' AND password = '$password1'";	
if($result = mysqli_query($db, $sql))
if(($result) > 0)

echo '<meta http-equiv="refresh" content="0;admin_profile.php" />';
	}
}
}
}
?>

<br>
    <div class="footer" style="background-color:#001f3f;width:100%;height:70px"><br>
	<center><p style="color:white">Copyright © 2020 BCVM.com [All Rights Reserved]</p></center>
	</div>
	
</body>
</html>