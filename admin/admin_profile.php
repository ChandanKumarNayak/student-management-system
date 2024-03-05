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
  
<title>Admin Profile | BCVM</title>

<style type="text/css">
	
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
	     position: sticky;
         top: 0;
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
		<a href="admin_profile.php?logout='1'" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:15px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
		<a href="setting.php" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:75px;padding:3px;width:50px;font-size:20px">&nbsp;<i class="fa fa-gears"></i></a>
	    <a href="edit.php?id=<?php echo $row['id']?>" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:135px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-edit"></i></a>
		
	</div>
</nav>  
<?php

}
?>
  <div class="w3-row">
  <div class="w3-col m4 w3-left">
			<form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
               
					<?php
$getdata=("SELECT * FROM admin WHERE admin_username='".$_SESSION['admin_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{

echo "<center><img src='admin-img/".$row['myimage']."' style='width:150px;height:150px;border-radius:10%;border:3px solid blue;padding:2px;margin:5px'></center>";
}
?>
                         <div style="margin:5px;padding:2px;color:black;">
                         <input type="file" name="myimage" accept = "image/*" required>
		                 <input type="submit" class="MyButton" name="change" value="upload"><br><br>
						 <?php
$getdata=("SELECT * FROM admin WHERE admin_username='".$_SESSION['admin_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?>
<label>
   &nbsp;&nbsp;Admin Name :
    <input value="<?php echo $row['name']; ?>" readonly>
  </label>
  <label>
    &nbsp;&nbsp;Email ID :
    <input value="<?php echo $row['email']; ?>" readonly>
  </label>
  <label>
   &nbsp;&nbsp;Mobile No :
    <input value="<?php echo $row['phone']; ?>" readonly>
  </label>
  <label>
   &nbsp;&nbsp;Location :
    <input value="<?php echo $row['location']; ?>" readonly>
  </label>
						 <?php	}
	?> 
                         </div>
					</form>
</div>
<div class="w3-col m8 w3-right">
<form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
<div style="border: 1px solid #001f3f;padding:2px;margin:5px">
<center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: STUDENT MENU :-</b></h3></center>
<div style="display:inline-block;border: 3px solid white;border-radius:10px;padding:2px;margin:2px;width:auto;font-size:20px;background-color:#001f3f;">
<a href="student_list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i><br>&nbsp;Student List&nbsp;</a>
</div>
</div>
<div style="border: 1px solid #001f3f;padding:2px;margin:5px">
<center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: FACULTY MENU :-</b></h3></center>
<div style="display:inline-block;border: 3px solid white;border-radius:10px;padding:2px;margin:2px;width:auto;font-size:20px;background-color:#001f3f;">
<a href="faculty_list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i><br>&nbsp;Faculty List&nbsp;</a>
</div>
</div>
<div style="border: 1px solid #001f3f;padding:2px;margin:5px">
<center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: OTHER MENU :-</b></h3></center>
<div style="display:inline-block;border: 3px solid white;border-radius:10px;padding:2px;margin:2px;width:auto;font-size:20px;background-color:#001f3f;">
<a href="admin_list.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i><br>&nbsp;Admin List&nbsp;</a>
</div>
<div style="display:inline-block;border: 3px solid white;border-radius:10px;padding:2px;margin:2px;width:auto;font-size:20px;background-color:#001f3f;">
<a href="achievement_back.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trophy"></i><br>&nbsp;Achievements&nbsp;</a>
</div>
<div style="display:inline-block;border: 3px solid white;border-radius:10px;padding:2px;margin:2px;width:auto;font-size:20px;background-color:#001f3f;">
<a href="food_chart_back.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cutlery"></i><br>&nbsp;Food Chart&nbsp;</a>
</div>
</div>
</form>
</div>
</div>

<?php
include('connect.php'); 

$upload_image="";
$folder="";
$insert_path="";
 $name = "";
 $target_dir = "";
 $target_file = "";
 $imageFileType = "";
 $extensions_arr = "";
 $uploadOk = "1";

if (isset($_POST['change'])) {

$upload_image=$_FILES['myimage']['name'];

 // Select file type
 $imageFileType = strtolower(pathinfo($upload_image,PATHINFO_EXTENSION));

// Check file size
if ($_FILES['myimage']['size'] > 5000000) {
   
    $uploadOk = 0;
} 

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 
     echo "<div style ='font:15px/21px Arial,tahoma,sans-serif;color:red'>Sorry, your image size is more than 500kb.</div>";
// if everything is ok, try to upload file
} else {

 $sql="UPDATE `admin` SET myimage='$upload_image' WHERE admin_username='".$_SESSION['admin_username']."'";	
if($result = mysqli_query($db, $sql))

$folder="admin-img/";

move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);
echo '<meta http-equiv="refresh" content="0;admin_profile.php" />';


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