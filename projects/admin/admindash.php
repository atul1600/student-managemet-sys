<?php

session_start();
	if(isset($_SESSION['uid'])){
		
		echo "";
	}
	else{
		header("location:../login.php");
	}


?> 

<?php
include('header.php');
?>

<?php
include( 'title.php');

?>
<body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/styleforbg.css">
	<link rel="stylesheet" type="text/css" href="../css/stylefordash.css">
<div class="dashboard">
	<table align="center" >
		<tr>
			<td><a href="addstudent.php">insert student</a></td>
		</tr>
		<tr>
			<td><a href="deletestudent.php">delete student</a></td>
		</tr>
		<tr>
			<td><a href="updatestudent.php">update student</a></td>
		</tr>
	</table>

</div>
</body>