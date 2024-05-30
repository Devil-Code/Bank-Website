
<DOCTYPE html>

<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<style>
		.bg{ 
	background: url('../img/bgnd.png') no-repeat;
	 width : 100%
	}


	</style>

</head>
<body>
	<div>
		<?php

		include("config.php");



			if(isset($_POST['sub']))
			{
				$fname	=	$conn->real_escape_string($_POST['f_name']);
				$mname	=	$conn->real_escape_string($_POST['m_name']);
				$lname	=	$conn->real_escape_string($_POST['l_name']);
				$u_email =	$conn->real_escape_string($_POST['email']);
				$u_mob =	$conn->real_escape_string($_POST['mob']);
				$gender =	$conn->real_escape_string($_POST['optradio']);
				
				$q = "INSERT INTO personal VALUES(null,'$fname','$mname','$lname','$u_email','$u_mob','$gender')";
				$result = $conn->query($q);
				if($result)
				{
						echo" <script type='text/javascript'>alert('Your Data has beem Saved.')</script>";
						//echo"window.open('address.php','_self')";
				}

				else
				{
					echo "<script>window.open('error.html','_self')</script>";
				}
				echo"window.open('address.php','_self')";
			}

		?>
	</div>
	<div >
		<form action="registr.php" method="post" class="was-validated justify-content-center">
			<div class="container">

				<div class="row">

				<div class="col-sm-4">	
				
					<h1>Registration</h1>
					<p>Fill up the form with correct values</p>
					<hr class="mb-4">

					<div class="form-group">
						<label for="f_name"><b>First Name : </b></label>
						<input class="form-control" id="fname" type="text" name="f_name" pattern="[A-Za-z]+" required>
						
					</div>

					<div class="form-group">
						<label for="m_name"><b>Middle Name : </b></label>
						<input class="form-control" id="nname" type="text" name="m_name" pattern="[A-Za-z]+" required>
						
					</div>	

					<div class="form-group">
						<label for="l_name"><b>Last Name : </b></label>
						<input class="form-control" id="lname" type="text" name="l_name" pattern="[A-Za-z]+" required>
						
					</div>

					<div class="form-group">
						<label for="email"><b>Email : </b></label>
						<input class="form-control" id="email" type="email"  name="email" required>
				
					</div>

					<div class="form-group">
						<label for="mob"><b>Mobile Number : </b></label>
						<input class="form-control" id="mob" type="tel" name="mob"  maxlength="10" pattern="^\d{10}$" required="required" >
						
						<!--<input id="phonenum" type="tel" pattern="^\d{4}-\d{3}-\d{4}$" required   data-validation="number" data-validation-allowing="negative,number" input name="color" data-validation="number" datavalidation-ignore="$"-->
					</div>	

					<div class="form-group">
						<label for="optradio"><b>Gender : </b></label>
					
						<label><input  type="radio" value="Female" name="optradio"> Female </label>
						
						<label><input type="radio" value="Male" name="optradio"> Male</label>
					</div>	
					
					<div class="form-group">
						<hr class="mb-3" >
						
						<input class="btn btn-primary" id="regis" type="submit" name="sub" value="Save and Proceed">
						

					</div>
			
				</div>
				</div>

			</div>
		</form> 
	</div>
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://cdn.jsdeliver.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(function()){
			$('#regis').click(function(){
				var valid = this.form.checkValidity();
				if(valid){
					alert('Valid');
				}
				else{
					alert('Enter the valid format');
				}
			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var mname = $('#mname').val();
			var email = $('#email').val();
			var mobile = $('#mob').val();


			}
		}
	</script> -->
</body>
</html>
