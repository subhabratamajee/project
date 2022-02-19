<!doctype HTML>
	<html>
	<head>


					<title>DEB DBMS FORM</title>


		<meta name="viewport" content="width=device=width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		
<style>
h1{
	font-size: 22px;
	color:  #E20d12;
	text-align: center;
}

*{
	margin: 0px;
	padding:  0px;

}

.container-fluid{

	background-image: url("eceblur.jpg");
	background-attachmaent: fixed;
	background-size: cover;
	font-family: new time roman;
	height: 100vh;


	
}


.form-control {
	font-size: 16px;
	font-family: verdana;

}

</style>
    </head>
    <body>
  		<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="update page";

	$id="";
	$name="";
	$tname="";
	$email="";
	$phone="";
	$coreelectronics="";
	$communication="";
	$software="";
	$branch="";
	$rollno="";
	$gender="";





	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	//connect to mysql database

	try{

		
$conn = mysqli_connect($servername,$username,$password,$dbname);

	}catch(MySQLi_Sql_Exception $ex){

   		echo("error in connecting");


	}


	//get data from the form
	function getData()
	{
	 $data = array();

	 $data[1] = $_POST['name'];
	 $data[2] = $_POST['tname'];
	 $data[3] = $_POST['email'];
	 $data[4] = $_POST['phone'];
	 $data[5] = $_POST['coreelectronics'];
	 $data[6] = $_POST['communication'];
	 $data[7] = $_POST['software'];
	 $data[8] = $_POST['branch'];
	 $data[9] = $_POST['universityrollno'];
	 $data[10] = $_POST['gender'];
	 return $data;


	}


	//insert data

 if(isset($_POST['insert'])){

	$info = getData();
	$insert_query="INSERT INTO `dpstable`(`name`,`tname`,`email`,`phone`,`coreelectronics`,`communication`,`software`,`branch`,`universityrollno`,`gender`)
	VALUES('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";

 try{

 	$insert_result=mysqli_query($conn,$insert_query);
 	if($insert_result)
 	{

 		if(mysqli_affected_rows($conn)>0){

 			echo("data inserted successfully");


 		}else{

 			echo("data are not inserted");


 		}
 		
 	}


 }catch(Exception $ex){
 	echo("error inserted"  .$ex ->getMessage());
 	
 }



	}


?>
    	
		<div class="background-image">
		</div>
    	<div class="container-fluid">
    	<div class="row col-md-offset-1">
    	
    	<div class="col-lg-5">

    		<form action="" method="post">
    		<h1>id no</h1>
    		<input type="number" class="form-control" name="id" placeholder="enter id no" value="<?php echo($id);?>" disabled />

    		<div class="form-group row">	

    		<div class="col-xs-6">
    			<h1>Student Name</h1>
    		<input type="text" class="form-control" name="name" placeholder="enter student name" value="<?php echo($name);?>" />
    		</div>
    		<div class="col-xs-6">
    			<h1>Allocated Teacher</h1>
    			<input type="text" class="form-control" name="tname" placeholder="enter teacher name" value="<?php echo($tname);?>" />
    		</div>

    	</div>

    	<h1>Email</h1>
    	<input type="email" class="form-control" name="email" placeholder="enter email" value="<?php echo($email);?>" />
 		<h1>Phone</h1>
    	<input type="tel" pattern="^\d{10}$" class="form-control" name="phone" placeholder="enter 10 digit phone no" value="<?php echo($phone);?>" />

    	<div class="form-group row">

    	<div class="col-xs-6">
    		<h1>Core-Electronics</h1>
    		<select name="coreelectronics" class="form-control" value="<?php echo($coreelectronics);?>">
    			<option value="workshop">Workshop</option>
    			<option value="project">Project</option>
    		</select>
    	</div>
    	<div class="col-xs-6">
    		<h1>Communication</h1>
    		<select name="communication" class="form-control" value="<?php echo($communication);?>">
    			<option value="workshop">Workshop</option>
    			<option value="Project">Project</option>
    		</select>

    	</div>
    	<div class="col-xs-6">
    		<h1>Software</h1>
    		<select name="software" class="form-control" value="<?php echo($software);?>">
    			<option value="Workshop">Workshop</option>
    			<option value="Project">Project</option>
    		</select>

    	</div>
    	</div>

    	<div class="form-group row">
 		<div class="col-xs-6">
 			<h1>Branch</h1>
 			<select name="branch" class="form-control" value="<?php echo($branch);?>">
    			<option value="ECE">ECE</option>
    			<option value="CSE">CSE</option>
    			<option value="EE">EE</option>
    			<option value="ME">ME</option>
    			<option value="CE">CE</option>
    			
    		</select>
    	</div>
    	<div class="col-xs-6">
    		<h1>Roll No</h1>
    	<input type="number" class="form-control" name="universityrollno" placeholder="enter university roll no" value="<?php echo($universityrollno);?>" />
    	</div>
    	</div>

    	<div class="form-group row">
        <div class="col-xs-6">
        	<h1>Gender</h1>
 			<select name="gender" class="form-control" value="<?php echo($gender);?>">
    			<option value="Male">male</option>
    			<option value="Female">female</option>
    			
    			
    		</select>
    	</div>
    	</div>
    	
    	
    	<input type="submit" class="btn btn-block btn-success" name="insert" value="Add">


    	
       </form>
    	</div>
    	<div class="col-lg-8">

    	</div>
    	</div>	
    	</div>





    </body>
    </html>