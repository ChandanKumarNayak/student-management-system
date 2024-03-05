<?php 
   session_start(); 
   include('connect.php'); 

  if (!isset($_SESSION['student_username'])) {
  	header('location: student_login.php');
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
<title>Report Card | BCVM</title>
<style>
form {
padding:2px;
margin:2px;
max-width:600px;
height:auto;
display:block;
text-align:left;
box-shadow:0 0 0 1px rgba(14,41,57,0.12),0 2px 5px rgba(14,41,57,0.44),inset 0 -1px 2px rgba(14,41,57,0.15);
}

@media screen and (min-width: 600px) {
  h1 {
    font-size: 40px;
	text-align:center;
  }
}
@media screen and (max-width: 600px) {
  h1 {
    font-size: 24px;
	text-align:center;
  }
}

table { 
   width: 99%;
   margin-top:2px;
   margin-right:2px;
   margin-bottom:2px;
   margin-left:2px;
  border-collapse: collapse;
}
th { 
  background: black; 
  border: 1px solid white;
  font-weight:normal;
  color: white; 
  text-align: left;
  font-size: 21px;
}
td {
	border: 1px solid black;
}

</style>
</head>
<body>

<center>
  <form method="POST" action="" enctype="multipart/form-data">
  <h1>Bhakta Charan Vidya Mandir,Rahama</h1>

<?php
$getdata=("SELECT * FROM student WHERE student_username='".$_SESSION['student_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{
	
echo "<center><img src='student-img/".$row['myimage']."' style='width:125px;height:125px;border-radius:10%;'></center>";
}
?>

<?php
include('connect.php'); 
$eid = ''; 
if( isset( $_GET['id'])) {
    $eid = $_GET['id']; 
} 

$getdata=("SELECT * FROM `report_card` WHERE id='$eid'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?> 
  <table>
  <tr>
  <th>Student Name</th>
  <th>Year Of Admission</th>
  </tr>
  <tr>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['year']; ?></td>
  </tr>
  </table>
  <br>
  <table>
  <tr>
  <th>Faculty Name</th>
  <th>Subject</th>
  <th>Full Mark</th>
  <th>Mark Obtained</th>
  </tr>
  <tr>
  <td><?php echo $row['faculty_name']; ?></td>
  <td><?php echo $row['subject']; ?></td>
  <td><?php echo $row['full_mark']; ?></td>
  <td><?php echo $row['mark']; ?></td>
  </tr>
  </table>
  <br><br>
  <center><p style="opacity:50%;"><?php echo $row['date']; ?></p></center>
  <?php
      }
?>

</form>
 </center>
</body>
</html>