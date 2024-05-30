
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
				$aadhaar	=	$conn->real_escape_string($_POST['aadhaar']);
				$pan	=	$conn->real_escape_string($_POST['pan']);
				$occ	=	$conn->real_escape_string($_POST['occ']);
				$qua =		$conn->real_escape_string($_POST['qua']);
			//	$st =		$conn->real_escape_string($_POST['st']);
				
				
				$q = "INSERT INTO address VALUES(null,'$aadhaar','$pan','$occ','$qua')";
				$result = $conn->query($q);
				if($result)
				{
					echo" <script type='text/javascript'>alert('Your Data has beem Saved.')</script>";
					
				}

				else
				{
					echo "error";
				}
				
			}

		?>
	</div>
	<div>
		<form action="" method="post" class="was-validated ">
			<div class="container">

				<div class="row">

				<div class="col-sm-4">	
				
					<h1>Other information</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-4">

					<div class="form-group">
						<label for="aadhaar"><b>Aadhaar No. : </b></label>
						<input class="form-control"  type="text" name="aadhaar" required>
						
					</div>

					<div class="form-group">
						<label for="pan"><b>Pan ID : </b></label>
						<input class="form-control"  type="text" name="pan">
						
					</div>	

					<div class="form-group">
						<label for="occ"><b>Occupation : </b></label>
						<input class="form-control"  type="text" name="occ" required>
						
					</div>

					<div class="form-group">
						<label for="qua"><b>Qualification : </b></label>
						<input class="form-control"  type="text"  name="qua"  required>
				
					</div>

					

					
					<div class="form-group">
						<hr class="mb-3" >
						
						<input class="btn btn-primary" id="regis" type="submit" name="sub1" value="Save">
					

					</div>
			
				</div>
				</div>

			</div>
		</form> 
	</div>
	
</body>
</html>
