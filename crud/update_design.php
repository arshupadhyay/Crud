<?php include("connection.php"); 
//error_reporting(0);
session_start();

$id= $_GET['id'];
$userprofile = $_SESSION['user_name'];
if($userprofile == true){

}
else{
	?><meta http-equiv = "refresh" content = "0; url = http://localhost/crud/login.php"/><?php
}
$query = "SELECT * FROM FORM where id = '$id'";	
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Updated details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<div class="title">
				Update Details
			</div>
			<div class="form">


				<div class="input_field">
					<label>First Name</label>
					<input type="text" value="<?php echo $result['fname']; ?>" class ="input" name="fname" required>
				</div>


				<div class="input_field">
					<label>Last Name</label>
					<input type="text" value="<?php echo $result['lname']; ?>" class ="input" name="lname" required>
				</div>


				<div class="input_field">
					<label>Password</label>
					<input type="Password" value="<?php echo $result['password']; ?>" class ="input" name="password" required>
				</div>


				<div class="input_field">
					<label>Confirm Password</label>
					<input type="Password" value="<?php echo $result['cpassword']; ?>" class ="input" name="conpassword" required>
				</div>

				<div class="input_field">
					<label>Gender</label>
					<div class="selectbox">
						<select name="gender" required>
							<option value="Not selected">Select</option>
							<option value="male"
								<?php
									if($result['gender'] == 'male'){
										echo "selected";
									}
								?>
							>Male</option>
							<option value="female"
								<?php
									if($result['gender'] == 'female'){
										echo "selected";
									}
								?>
							>Female</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>


				<div class="input_field">
					<label>Email</label>
					<input type="text" value="<?php echo $result['email']; ?>" class ="input" name="email" required>
				</div>

				<div class="input_field">
					<label>Phone </label>
					<input type="text" value="<?php echo $result['phone']; ?>"class ="input" name="phone" required>
				</div>

				<div class="input_field">
					<label>Address </label>
					<textarea class="textarea" name="address" required><?php echo $result['address'];?></textarea>
				</div>

				<div class="input_field terms">
					<label class="check">
						<input type="checkbox" required>
						<span class="checkmark"></span>
					</label>
					<p> Agree to terms and conditions</p>
				</div>

				<div class="input_field">
					<input type="submit" value="Update" class="btn" name="update">
				</div>

			</div>
		</form>
	</div>
</body>
</html>

<?php
error_reporting(0);
	if($_POST['update'])
	{
		$fname   = $_POST['fname'];
		$lname   = $_POST['lname'];
		$pwd     = $_POST['password'];
		$cpwd    = $_POST['conpassword'];
		$gender  = $_POST['gender'];
		$email   = $_POST['email'];
		$phone   = $_POST['phone'];
		$address = $_POST['address'];

		$query = "Update form set fname = '$fname',lname= '$lname',password = '$pwd',cpassword = '$cpwd',gender = '$gender',email = '$email',phone = '$phone',address = '$address' where id = '$id'";

		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<script>alert('Record update')</script>";
			?>

			<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>
			<?php
		}
		else
		{
			echo "Failed";
		}
	}	
	
?>