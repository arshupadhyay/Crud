<?php
session_start();
?>


<html>
	<head>
		<title>Display</title>
		<style>
			body{
				background: grey;
				font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;;
			}
			table{
				background-color: white;
			}

			h2{
				color: white;
			}
		</style>
	</head>
</html>




<?php
include("connection.php");
//error_reporting(0);

$userprofile = $_SESSION['user_name'];

if($userprofile == true){

}
else{
	?><meta http-equiv = "refresh" content = "0; url = http://localhost/crud/login.php"/><?php
}
$query = "SELECT * FROM FORM";	
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
//echo $total;


if($total != 0)
{
	//echo "Records:True";
	?>
	<h2 align="center">Display all records</h2>
	<table border="1" cellspacing="7" width="100%" align="center">
		<tr>
		<th width="5%">Id</th>
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="20%">Email</th>
		<th width="10%">Phone</th>
		<th width="24%">Address</th>
		<th width="15%">Operations</th>
		</tr>	
	


	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "
			<tr>
		<td>"."$result[Id]"."</td>
		<td>"."$result[fname]"."</td>
		<td>"."$result[lname]"."</td>
		<td>"."$result[gender]"."</td>
		<td>"."$result[email]"."</td>
		<td>"."$result[phone]"."</td>
		<td>"."$result[address]"."</td>
		<td><a href='update_design.php?id=$result[Id]'>Update</a>
		<a href='delete.php?id=$result[Id]' onclick='return checkdelete()'>Delete</a>
		</td>
		</tr>
		    ";
	}
}
else
{
	echo "Table empty";
}
?>
</table>

<a href = "logout.php"><input type = "submit" name = "" value = "logout"></a>


<script>
	function checkdelete()
	{
		return Confirm('Sure? You want to delete  ');
	}
</script>