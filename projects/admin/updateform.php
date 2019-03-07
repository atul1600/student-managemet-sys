<?php 
session_start();

if (isset($_SESSION['uid'])) {
	echo " ";
}
else{
	header('location:../login.php');
}
?>
 <?php
include ('header.php');
include( 'title.php');
include ('../dbcon.php');

$sid = $_GET ["sid"];
$sql = " SELECT * FROM `student` WHERE `id` = '$sid'";
$run = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($run);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/styleforbg.css">

<body>
	<form action="updatedata.php" method="POST" enctype="multipart/form-data">
 	<table border="1"
 	 align="center" 
 	width="60%"  
 	style= "text-align: center ; 
 	font-size: 25px"; 
 	bgcolor="#cceeff" >
 		<tr>
 			<td>Roll no</td>
 			<td><input type="text" name="roll" value= <?php
 			echo $data["roll no"]; ?> </td>
 		</tr>
 		 
 		<tr>
 			<td>Name</td>
 			<td><input type="text" name="name" value= <?php
 			echo $data["name"]; ?> </td>
 		</tr>

 		<tr>
 			<td>city</td>
 			<td><input type="text" name="city" value= <?php
 			echo $data["city"]; ?> </td>
 		</tr>

 		<tr>
 			<td>contact no</td>
 			<td><input type="number" name="contact" value= <?php
 			echo $data["contact"]; ?> </td>
 		</tr>

 		<tr>
 			<td>standerd </td>
 			<td><input type="number" name="standerd" value= <?php
 			echo $data["standerd"]; ?> </td>
 		</tr>

 		<tr>
 			<td>image </td>
 			<td><input type="file" name="image" placeholder="browse the image "></td>
 		</tr>
 		<tr>
 			<td colspan="2" align="center">
 				<input type="hidden" name= "sid" value="<?php echo $data['id'];?>"/>
 				<button type="submit" name="submit" class="btn btn-primary"> submit</button>
 			</td>
 		</tr>
 	</table>
 	
 </form> 
</body>
 