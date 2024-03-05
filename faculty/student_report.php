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

<script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>  
<script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>  
<link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />
 	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="table.css">

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Student Reports | BCVM</title>


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

p1 {
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

p1:hover {
  background: #8BC34A;
  color: #ffffff;
}

</style>

</head>
<body>


<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.php" style=""><b>BCVM.com</b></a>  		
		<a href="student_report.php?logout='1'" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:15px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
		<a href="faculty_profile.php" class="nav-link" style="color:white;position:absolute;border:2px solid white;border-radius:10px;top:13px;right:75px;padding:3px;width:50px;font-size:20px">&nbsp;&nbsp;<i class="fa fa-home"></i></a>
	</div>
</nav>

<div class="w3-row">

<?php
include('connect.php'); 
$eid = ''; 
if( isset( $_GET['id'])) {
    $eid = $_GET['id']; 
} 

$getdata=("SELECT * FROM `student` WHERE id='$eid'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?> 
  <div class="w3-col m6 w3-left">
  <form method="POST" action="" enctype="multipart/form-data" style="border: 3px solid #001f3f;padding:2px;margin:5px">
<center><h3 style="font-size:25px;color:red;width:100%;font-family:Arial"><b>-: Add Report :-</b></h3></center>
<label>
   <input type="hidden" class="input" name="student_username" value="<?php echo $row['student_username']; ?>" readonly>
  </label>
  <label>
   <input type="hidden" class="input" name="email" value="<?php echo $row['email']; ?>" readonly>
  </label>
  <label>
   <input type="hidden" class="input" name="content" value="Click Here:- https://www.bcvm.com/student/student_login.php" readonly>
  </label>
<label>
   &nbsp;&nbsp;Student Name :
   <input type="text" class="input" name="name" value="<?php echo $row['name']; ?>" readonly>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Batch :
   <input type="text" class="input" name="year" value="<?php echo $row['year']; ?>" readonly>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <?php
$getdata=("SELECT * FROM faculty WHERE faculty_username='".$_SESSION['faculty_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?>
  <label>
   <input type="hidden" class="input" name="faculty_username" value="<?php echo $row['faculty_username']; ?>" readonly>
  </label>
  <label>
   &nbsp;&nbsp;Faculty Name :
    <input type="text" class="input" name="faculty_name" value="<?php echo $row['name']; ?>" readonly>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   <input type="hidden" class="input" name="sub" value="A Report Card From <?php echo $row['name']; ?>" readonly>
  </label>
  <?php	}
	?>
	<label>
   &nbsp;&nbsp;Date :
    <input type="text" class="input" name="date" id="in_dob" placeholder="Ex: 29/01/2020" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
	<script type="text/javascript">
                            $(function() {
                            $("#in_dob").datepicker({ dateFormat: 'dd-mm-yy', yearRange:'-0:+0', changeYear:true, changeMonth:true});
                        });
                         </script>
  </label>
  <label>
   &nbsp;&nbsp;Subject :
    <input type="text" class="input" name="subject" placeholder="Ex: English" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Full Mark :
    <input type="text" class="input" name="full_mark" placeholder="Ex: 30" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
   &nbsp;&nbsp;Mark Obtained :
    <input type="text" class="input" name="mark" placeholder="Ex: 25" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name="add">add</button>
  <button type="reset">reset</button>
  </form>
  </div>
<?php
      }
?>

<?php

include('connect.php'); 

if(isset($_POST['add']))
{
  $student_username=$_POST['student_username'];
  $email=$_POST['email'];
  $name=$_POST['name'];
  $year = $_POST['year'];
  $faculty_username=$_POST['faculty_username'];
  $faculty_name=$_POST['faculty_name'];
  $date = $_POST['date'];
  $subject = $_POST['subject'];
  $mark = $_POST['mark'];
  $full_mark=$_POST['full_mark'];
  $mailSub = $_POST['sub'];
  $mailMsg = $_POST['content'];
  
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "movie7addict@gmail.com";
   $mail ->Password = "1832247398";
   $mail ->SetFrom("movie7addict@gmail.com","BCVM | Rahama");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($email);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
  
  $query = "INSERT INTO report_card (student_username,email,name,year,faculty_username,faculty_name,date,subject,mark,full_mark) 
  			  VALUES('$student_username', '$email', '$name', '$year', '$faculty_username', '$faculty_name', '$date', '$subject', '$mark', '$full_mark')";
  	
	if($result = mysqli_query($db, $query))
		
echo '<meta http-equiv="refresh" content="0;student_report.php" />';
   }
}
?>

 
<?php
include 'connect.php';
$getdata=("SELECT * FROM student WHERE status='1' ORDER BY id DESC");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
	
echo "<div class='w3-col m6 w3-right'>";
echo "<form method='POST' action='' enctype='multipart/form-data' style='border: 3px solid #001f3f;padding:2px;margin:5px'>";
  echo "<center>";
  echo "<h3 style='font-size:25px;color:red;width:100%;font-family:Arial'><b>-: STUDENT LIST :-</b></h3>";
  echo "<input type='search' id='myInput' onkeyup='myFunction()' class='light-table-filter' placeholder='Type a student name...' />";
  echo "</center>";
echo "<div style='overflow-x:auto;'>";
echo "<div style='height:300px;overflow-y:auto;'>";
echo "<table id='myTable'>";
echo "<tr>
<th>Avatar</th>
<th>Full Name</th>
<th>Batch</th>
<th>Add Report</th>
</tr>";

while($row = mysqli_fetch_array($result))

{
echo "<tr>";
echo "<td><img src='../student/student-img/".$row['myimage']."' style='width:70px;height:70px;border-radius:5px;margin:5px'></td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['year'] . "</td>";
echo '<td><a href="student_report.php?id='.$row['id'].'"><p1><i class="fa fa-plus"></i></p1></a></td>';
echo "</tr>";

}
echo "</table>";
echo "</div>";
echo "</div>";
echo "</form>";
echo "</div>";

?>

</div>
<br>
    <div class="footer" style="background-color:#001f3f;width:100%;height:70px"><br>
	<center><p style="color:white">Copyright © 2020 BCVM.com [All Rights Reserved]</p></center>
	</div>
	
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>   

</body>
</html>