
<DOCTYPE html>

<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	

</head>
<body>
	<div>
		<?php

		include("config.php");



			if(isset($_POST['sub1']))
			{
				$roomno	=	$conn->real_escape_string($_POST['room_no']);
				$area	=	$conn->real_escape_string($_POST['area']);
				$street	=	$conn->real_escape_string($_POST['street']);
				$tvc =		$conn->real_escape_string($_POST['tvc']);
				$st =		$conn->real_escape_string($_POST['st']);
				
				
				$q = "INSERT INTO address VALUES(null,'$room_no','$area','$street','$tvc','$st')";
				$result = $conn->query($q);
				if($result)
				{
					echo"window.open('other.php','_self')";
				}

				else
				{
					echo "<script>window.open('error.html','_self')</script>";
				}
				
			}

		?>
	</div>
	<div>
		<form action="address.php" method="post" class="was-validated ">
			<div class="container">

				<div class="row">

				<div class="col-sm-4">	
				
					<h1>Residential Address</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-4">

					<div class="form-group">
						<label for="room_no"><b>Flat No. and Building Name : </b></label>
						<input class="form-control"  type="text" name="room_no" required>
						
					</div>

					<div class="form-group">
						<label for="street"><b>Street : </b></label>
						<input class="form-control"  type="text" name="street" required>
						
					</div>	

					<div class="form-group">
						<label for="area"><b>Area Locality : </b></label>
						<input class="form-control"  type="text" name="area" required>
						
					</div>

					<div class="form-group">
						<label for="tvc"><b>Village/Town/City : </b></label>
						<input class="form-control"  type="text"  name="tvc" pattern="[A-Za-z]+" required>
				
					</div>

					<div class="form-group">
						<label for="st"><b>State : </b></label>
						<input class="form-control"  type="text" name="st" pattern="[A-Za-z]+" required="required" >
						
					</div>	

					
					<div class="form-group">
						<hr class="mb-3" >
						
						<input class="btn btn-primary" id="regis" type="submit" name="sub1" value="save and prooceed">
						

					</div>
			
				</div>
				</div>

			</div>
		</form> 
	</div>
	
</body>
</html>
