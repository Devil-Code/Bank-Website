
<DOCTYPE html>

<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<div>
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
				$roomno	=	$conn->real_escape_string($_POST['room_no']);
				$area	=	$conn->real_escape_string($_POST['area']);
				$street	=	$conn->real_escape_string($_POST['street']);
				$tvc =		$conn->real_escape_string($_POST['tvc']);
				$st =		$conn->real_escape_string($_POST['st']);
				$aadhaar	=	$conn->real_escape_string($_POST['aadhaar']);
			//	$pan	=	$conn->real_escape_string($_POST['pan']);
				$occ	=	$conn->real_escape_string($_POST['occ']);
				$qua =		$conn->real_escape_string($_POST['qua']);

        $q = "INSERT INTO info VALUES(null,'$fname','$mname','$lname','$u_email','$u_mob','$gender','$room_no','$area','$street','$tvc','$st','$aadhaar','$pan','$occ','$qua')";
        $result = $conn->query($q);
        if($result)
        {
            echo" <script type='text/javascript'>alert('Your Data has beem Saved Successfully.')</script>";
					}

        else
        {
          echo "<script>window.open('error.html','_self')</script>";
        }

      }

    ?>

</div>
		<form action="regis.php" method="post" class="was-validated ">
			<div class="container">

				<div class="row">

				<div class="col-sm-4">

					<h1>Registration form</h1>
					<p>Fill up the form with correct values.</p>
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
					<hr class="mb-4">
					<br class="mb-4">
					<h2>Residential Address</h2>
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
							<hr class="mb-4">
										<h2>Other Details </h2>
										<hr class="mb-4">
										<div class="form-group">
											<label for="occ"><b>Occupation : </b></label>
											<input class="form-control"  type="text" name="occ" required>

										</div>

										<div class="form-group">
											<label for="qua"><b>Qualification : </b></label>
											<input class="form-control"  type="text"  name="qua"  required>

										</div>

										<div class="form-group">
											<label for="aadhaar"><b>Aadhaar No. : </b></label>
											<input class="form-control"  type="text" name="aadhaar" required>

										</div>

					<div class="form-group">
						<hr class="mb-3" >

						<input class="btn btn-primary" id="regis" type="submit" name="sub" value="Save and Proceed">-->
					<!--<a href="registr.php" class="btn btn-primary btn-lg active" role="button" name="sub" aria-pressed="true">Save</a>
						<a href="address.php" class="btn btn-primary btn-lg active" role="button" name="continue" aria-pressed="true">Next</a>
			-->		</div>

				</div>
				</div>

			</div>
		</form>
	</div>

</body>
</html>
