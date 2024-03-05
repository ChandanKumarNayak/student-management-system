<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bhakta Charan Vidya Mandir(BCVM) is a coaching institution which provides coaching classes for standard 8th,9th & 10th students along with hostel facilities for boys.">
<meta name="keywords" content="BCVM,Bhakta Charan Vidya Mandir,AMVP,Akhandala Mani Vidya Pitha,Rahama,Boys Hostel In Rahama">
<meta name="owner" content="Suresh Chandra Dalai">
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="logo.png"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> 
      
      <!-- CUSTOM STYLE -->
<link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
	  
<title>Achievements | BCVM</title>

<style>
      
	  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding:10px;
  text-align: left;
  font-family: arial;
}
.form {
  min-width: 300px;
  min-height:300px;
  max-width: 400px;
  max-height:auto;
  margin:5px;
  padding:5px;
  border: 3px solid #001f3f;
  display: inline-block;
}

    </style>
</head>

<body>
<!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav" style="background-color:#001f3f">              
                                   
                  <p class="nav-text" style="background-color:#001f3f">Menu</p>
                  <div class="top-nav s-12 l-5" style="background-color:#001f3f">
                     <ul class="right top-ul chevron">

						
						<li>
                           <a>SIGNIN</a>			    
                           <ul>
                              
                              <li>
                                <a href="admin/admin_login.php">Admin</a>				  
                              </li>
                              <li>
							    <a href="faculty/faculty_login.php">Faculty</a>
                              </li>
							  <li>
							    <a href="student/student_login.php">Student</a>
                              </li>
							  
                           </ul>
                        </li>						
						
				
						
                     </ul>
                  </div>
                 
                    <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <img src="images/rtupic.jpg" alt="chandan" style="width:100%;height:auto">
                     </li>
                  </ul>
                  
                  <div class="top-nav s-12 l-5" style="background-color:#001f3f">
                     <ul class="top-ul chevron">
					 
				
					<li>
                           <a>BCVM</a>			    
                           <ul>
                              
							  <li>
							    <a href="achievement.php">Achievements</a>
                              </li>
                              <li>
							    <a href="faculty.php">Faculty List</a>
                              </li>
							  <li>
							    <a href="food_chart.php">Food Chart</a>
                              </li>
							  
                           </ul>
                        </li>						
						
					<li>
                           <a>OTHERS</a>			    
                           <ul>
                              
                              <li>
                                <a href="">How To Reach</a>				  
                              </li>
							  
                           </ul>
                        </li>						
						
						
                       
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
<br><br><br><br>
	  <?php
	  include "connect.php";
$getdata=("SELECT * FROM `achievements` ORDER BY id DESC");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{
  echo "<form class='form'>";
  echo "<div class='card'>";
  echo "<img src='student/topper-img/".$row['myimage']."' style='width:100%;height:300px;padding:5px'>";
  echo "<br>";
  echo "<h4><b>Full Name:</b> ".$row['name']."</h4>";
  echo "<h4><b>Full Mark (in %):</b> ".$row['mark']."</h4>";
  echo "<h4><b>Batch:</b> ".$row['batch']."</h4>";
  echo "</div>";
  echo "</form>";
}
?>
		<br><br>
    <div class="footer" style="background-color:#001f3f;width:100%;height:70px"><br>
	<center><p style="color:white">Copyright © 2020 BCVM.com [All Rights Reserved]</p></center>
	</div>
    
</body>
</html>

 <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
            var owl = $('#header-carousel');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });	
          
      </script> 