<?php 
   session_start(); 
   include('connect.php'); 

  if (!isset($_SESSION['faculty_username'])) {
  	header('location: faculty_login.php');
  }
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['faculty_username']);
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
  
<title>Faculty Details | BCVM</title>

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
  color:red;
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

<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.php" style=""><b>BCVM.com</b></a>  		
		<a href="faculty_details.php?logout='1'" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:15px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
	</div>
</nav>  


<form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:15px;max-width:600px;min-width:300px">
<label>
   &nbsp;&nbsp;Avatar :
    <input class="input" type="file" name="myimage" accept = "image/*" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
<label>
   &nbsp;&nbsp;Faculty Name :
    <input type="text" class="input" pattern="^[a-zA-Z\s]+$" name="name" placeholder="Ex: Chandan Kumar Nayak" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    &nbsp;&nbsp;Email ID :
    <input type="email" class="input" name="email" placeholder="Ex: xyz@gmail.com" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Mobile No :
    <input type="tel" class="input" maxlength="10" pattern="^[6789]\d{9}$" name="phone" placeholder="Ex: 9876543210" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Subject :
    <input type="text" class="input" name="subject" placeholder="Ex: English" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Qualification :
    <input type="text" class="input" name="qualification" placeholder="Ex: B.Tech" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Location :
    <input type="text" class="input" name="location" placeholder="Ex: Talapada,Rahama" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name="submit">submit</button>
  <button type="reset">reset</button>
</form>


    <div class="footer" style="background-color:#001f3f;width:100%;height:70px"><br>
	<center><p style="color:white">Copyright © 2020 BCVM.com [All Rights Reserved]</p></center>
	</div>
	
</body>
</html>

<?php

include('connect.php'); 

 $upload_image1="";
 $folder1="";
 $insert_path1="";
 $name1 = "";
 $target_dir1 = "";
 $target_file1 = "";
 $imageFileType1 = "";
 $extensions_arr1 = "";


if(isset($_POST['submit'])){
	
	$upload_image1 = $_FILES['myimage']['name'];
 
 $imageFileType1 = strtolower(pathinfo($upload_image1,PATHINFO_EXTENSION));
 

 // Valid file extensions
 $extensions_arr1 = array("jpg","jpeg","png","gif");
 // Check extension
 if( in_array($imageFileType1,$extensions_arr1) )

  $name=$_POST['name'];
  $email = $_POST['email'];
  $phone=$_POST['phone'];
  $subject = $_POST['subject'];
  $qualification = $_POST['qualification'];
  $location=$_POST['location'];
  
  $sql="UPDATE `faculty` SET myimage='$upload_image1' ,name='$name' ,email='$email' ,phone='$phone' ,subject='$subject' ,qualification='$qualification' ,location='$location' ,status='1' WHERE faculty_username='".$_SESSION['faculty_username']."'";	
if($result = mysqli_query($db, $sql))
		
       $folder1="faculty-img/";
move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder1".$_FILES['myimage']['name']);

echo '<meta http-equiv="refresh" content="0;faculty_profile.php" />';

}

?>
