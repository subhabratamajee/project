<!DOCTYPE html>
<html>
	<head>
		<!-- custom css -->
		<link rel="stylesheet" type="text/css"  href="debwebdevelopment.css">

		
		<!-- in-build css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Deb web</title>
		
	
	</head>
	<body>
	<header>
		<div class="header">
				<marquee direction="right">
				<strong>
				<h1 class="quote">Life is what you make it !!</h1></strong>
			   </marquee>
		</div>
       </header>
<main>
            <div class="content">
<div class="subha-container">
    <div class="debda">
		<div class="debsahu">  
			<h3 class="Deb"> <strong><span>Upcoming Workshop</span></strong></h3>
		</div>

            <?php

					$conn=mysqli_connect("localhost","root","");
					$db=mysqli_select_db($conn,'update page');
					$query="SELECT * FROM `upcoming event` WHERE 1";
					$query_run=mysqli_query($conn,$query);
					while ($row=mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
					
            ?>
        <div class="subha">
			
			<a href="<?php echo $row["hreftag"];?>">
			<?php echo $row["heading"];?>
			<img src="<?php echo $row["image"];?>">
			<h4>Last date : <span><?php echo $row["date"];?></span> </h4>
			</a>
	    </div>
		<?php } ?>
    </div>
	<div class="debda">
		<div class="debsahu">  
			<h3 class="Deb"> <strong>Projects</strong></h3>
		</div>

            <?php

					$conn=mysqli_connect("localhost","root","");
					$db=mysqli_select_db($conn,'update page');
					$query="SELECT * FROM `projects` WHERE 1";
					$query_run=mysqli_query($conn,$query);
					while ($row=mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
					
            ?>
        <div class="subha">
			
			<a href="<?php echo $row["hreftag"];?>">
			<?php echo $row["heading"];?>
			<img src="<?php echo $row["image"];?>">
			<h4>Last date : <span><?php echo $row["date"];?></span> </h4>
			</a>
	    </div>
		<?php } ?>
    </div>

	<div class="debda">
		<div class="debsahu">  
			<h3 class="Deb"> <strong><span>Upcoming Activities</span></strong></h3>
		</div>

            <?php

					$conn=mysqli_connect("localhost","root","");
					$db=mysqli_select_db($conn,'update page');
					$query="SELECT * FROM `upcoming activities` WHERE 1";
					$query_run=mysqli_query($conn,$query);
					while ($row=mysqli_fetch_array($query_run,MYSQLI_ASSOC)) {
					
            ?>
        <div class="subha">
			
			<a href="<?php echo $row["hreftag"];?>" target="_blank">
			<?php echo $row["heading"];?>
			<img src="<?php echo $row["image"];?>">
			<h4>Last date : <span><?php echo $row["date"];?></span> </h4>
			</a>
	    </div>
		<?php } ?>
    </div>
</div>
</div>			
</main>
 <!-- Footer -->
 <footer class="page-footer font-small teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

	<!-- Grid column -->
	<div class="col-md-3 mt-md-0 mt-3">

	  <!-- Content -->
	  <h5 class="text-uppercase font-weight-bold">About Us</h5>
	  <p>We are a group of students of RKMGEC having taken the initiative to provide the students of RKMGEC with the best of resources needed for their curriculum.</p>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none pb-3">

	<!-- Grid column -->
	<div class="col-md-3 mb-md-0 mb-3">

	  <!-- Content -->
	  <h5 class="text-uppercase font-weight-bold">Services</h5>
	  <p>We provide help to students of RKMGEC , Purulia with some resources that they need to complete their curriculum such as organisers,books,notes,experience for job seekers. </p>

	</div>
	<!-- Grid column -->
	 <!-- Grid column -->
	 <div class="col-md-3 mt-md-0 mt-3">

	  <!-- Content -->
	  <h5 class="text-uppercase font-weight-bold">Contact Us</h5>
	  <div class="phone">
		<a href="#"><i class="fas fa-phone-volume"></i></a>
	  </div>
	  <div class="email">
		<a href="#"><i class="fas fa-envelope"></i></a>
	  </div>

	</div>
	<!-- Grid column -->

	<hr class="clearfix w-100 d-md-none pb-3">

	<!-- Grid column -->
	<div class="col-md-3 mb-md-0 mb-3">

	  <!-- Content -->
	  <h5 class="text-uppercase font-weight-bold">Follow Us</h5>
	  <div class="media-icons">
		<a class="btn btn-link"
		role="button" target="_blank" href="https://www.facebook.com/ric.rkmgec.official/"><i class="fab fa-facebook"></i></a>
		<a class="btn btn-link"
		role="button" target="_blank" href="https://twitter.com/ric_rkmgec"><i class="fab fa-twitter"></i></a>
		<a class="btn btn-link"
		role="button" target="_blank" href="https://www.youtube.com/channel/UCWpFeZh-sU8dCorq3QHgs2w"><i class="fab fa-youtube"></i></a>
	  </div>

	</div>
	<!-- Grid column -->

  </div>
  </div>
  <!-- Grid row -->
  <div class="footer-copyright" ">
   <p> © 2021 Copyright </p>
  
  </div>
<!-- Footer Text -->




</footer>
<!-- Footer -->


	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>


	</html>