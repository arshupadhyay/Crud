<?php include("connection.php");
include("send.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php crud opn</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<div class="title">
				Registration form
			</div>
			<div class="form">


				<div class="input_field">
					<label>First Name</label>
					<input type="text" class ="input" name="fname" required>
				</div>


				<div class="input_field">
					<label>Last Name</label>
					<input type="text" class ="input" name="lname" required>
				</div>


				<div class="input_field">
					<label>Password</label>
					<input type="Password" class ="input" name="password" required>
				</div>


				<div class="input_field">
					<label>Confirm Password</label>
					<input type="Password" class ="input" name="conpassword" required>
				</div>

				<div class="input_field">
					<label>Gender</label>
					<div class="selectbox">
						<select name="gender" required>
							<option value="Not selected">Select</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>


				<div class="input_field">
					<label>Email</label>
					<input type="text" class ="input" name="email" required>
				</div>

				<div class="input_field">
					<label>Phone </label>
					<input type="text" class ="input" name="phone" required>
				</div>

				<div class="input_field">
					<label>Address </label>
					<textarea class="textarea" name="address" required></textarea>
				</div>

				<div class="input_field terms">
					<label class="check">
						<input type="checkbox" required>
						<span class="checkmark"></span>
					</label>
					<p> Agree to terms and conditions</p>
				</div>

				<div class="input_field">
					<input type="submit" value="Register" class="btn" name="register">
				</div>

			</div>
		</form>
	</div>	
</body>
</html>

<?php
error_reporting(0);
	if($_POST['register'])
	{
		$fname   = $_POST['fname'];
		$lname   = $_POST['lname'];
		$pwd     = $_POST['password'];
		$cpwd    = $_POST['conpassword'];
		$gender  = $_POST['gender'];
		$email   = $_POST['email'];
		$phone   = $_POST['phone'];
		$address = $_POST['address'];


		$query = "INSERT INTO form (fname,lname,password,cpassword,gender,email,phone,address) values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
			$data = mysqli_query($conn,$query);

		if($data)
		{
			//echo "Data Inserted into database";
		}
		else
		{
			echo "Failed";
		}
	}	
	
?>