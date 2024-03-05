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

<title>Food Chart | BCVM</title>


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


table { 
   width: 100%;
  border-collapse: collapse;

}
th { 
  background: blue; 
  color: white; 
   border: 2px solid black;
  text-align: center;
  font-weight: bold; 
  font-size: 23px;
}
td { 
 border: 2px solid black;
  text-align:center; 
  font-size: 17px;
  color: black;
  background-color: white;
}

</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.php" style=""><b>BCVM.com</b></a>  		
		<a href="food_chart_back.php?logout='1'" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:15px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
		<a href="admin_profile.php" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:75px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-home"></i></a>
	</div>
</nav>


<div class="w3-row">

<?php
include('connect.php'); 
$eid = ''; 
if( isset( $_GET['id'])) {
    $eid = $_GET['id']; 
} 

$getdata=("SELECT * FROM `food_chart` WHERE id='$eid'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?> 
<div class="w3-col m5 w3-left">
  <form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
  <center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: <?php echo $row['day']; ?> :-</b></h3></center>
  <label>
   &nbsp;&nbsp;Breakfast :
    <input type="text" class="input" pattern="^[a-zA-Z\s]+$" name="breakfast" placeholder="Ex: Biscuits" value="<?php echo $row['breakfast']; ?>" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    &nbsp;&nbsp;Lunch :
	<input type="text" class="input" pattern="^[a-zA-Z\s]+$" name="lunch" placeholder="Ex: Rice & Egg curry" value="<?php echo $row['lunch']; ?>" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Tiffin :
   <input type="text" class="input" pattern="^[a-zA-Z\s]+$" name="tiffin" placeholder="Ex: Bread & Butter" value="<?php echo $row['tiffin']; ?>" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Dinner :
   <input type="text" class="input" pattern="^[a-zA-Z\s]+$" name="dinner" placeholder="Ex: Roti & Dal" value="<?php echo $row['dinner']; ?>" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 
  <button type="submit" name="edit">update</button>
  <button type="reset">reset</button>
  </form>
  </div>
  <?php
      }
?>
<?php
include('connect.php'); 

if(isset($_POST['edit'])) 
{
  $eid=$_GET['id'];
  $breakfast=$_POST['breakfast'];
  $lunch = $_POST['lunch'];
  $tiffin=$_POST['tiffin'];
  $dinner = $_POST['dinner'];

$sql="UPDATE `food_chart` SET breakfast='$breakfast' ,lunch='$lunch' ,tiffin='$tiffin' ,dinner='$dinner' WHERE id='$eid'";	
if($result = mysqli_query($db, $sql))
if(($result) > 0)

echo '<meta http-equiv="refresh" content="0;food_chart_back.php" />';
}

?>
<?php

include('connect.php'); 

$getdata=("SELECT * FROM food_chart");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
echo "<div class='w3-col m7 w3-right'>";
echo "<div style='overflow-x:auto;'>";
echo "<table style='padding:2px;margin:5px'>";

echo "<tr>

<th>Days</th>
<th>Breakfast</th>
<th>Lunch</th>
<th>Tiffin</th>
<th>Dinner</th>
<th>Edit</th>

</tr>";

while($row = mysqli_fetch_array($result))

{
echo "<tr>";

echo "<td style='color:white;background-color:blue;font-size:20px'><b>" . $row['day'] . "</b></td>";
echo "<td>" . $row['breakfast'] . "</td>";
echo "<td>" . $row['lunch'] . "</td>";
echo "<td>" . $row['tiffin'] . "</td>";
echo "<td>" . $row['dinner']. "</td>" ;
echo '<td><a href="food_chart_back.php?id='.$row['id'].'"><button name="change"><i class="fa fa-pencil"></i></button></a></td>';
echo "</tr>";

}
echo "</table>";
echo "</div>";
echo "</div>";
?>
</div>

<br>
<div class="footer" style="background-color:#001f3f;width:100%;height:70px;"><br>
	<center><p style="color:white">Copyright © 2020 BCVM.com [All Rights Reserved]</p></center>
	</div>
	
</body>
</html>