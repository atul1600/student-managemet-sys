<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:admin/admindash.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title >Login form</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styleforbg.css">

<body>
<h1 align="center">Log in form</h1>
<form action="login.php" method="POST">

	<table align="center"
	style="margin-top: 20px; font-size: 20px; color: #2C3335">
		<tr>
			<td>Username</td>
			<td><input type="text" name="name" required="required"></td><
		</tr>
		<tr>
			<td><br></td>
			<td><br></td>
		</tr>
		
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button type="submit" name="submit" class="btn btn-success" style="margin-top: 15px"> LogIn</button>
			</td>
		</tr>
	</table>
	
</form>
</body>
</html>
<?php

include ('dbcon.php');

if (isset($_POST['submit'])) {

	$username = $_POST['name'];
	$password = $_POST['password'];
	$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);

	if ($row < 1) {
		?>
	<script>
		alert("username and password does nor match" );
		window.open('login.php','_self');
	</script>
		<?php
	}
	else{
	$data = mysqli_fetch_assoc($run);
	$id = $data['id']; 

	
	$_SESSION['uid'] = $id;
	header('location:admin/admindash.php');








}
}




?>




















