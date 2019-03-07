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
 ?>

 <?php
include( 'title.php');

?>
<link rel="stylesheet" type="text/css" href="../css/styleforbg.css">


<body>
	<div class="container">
		<div class="row">


		</div>
		
	</div>
	<form action="addstudent.php" method="POST" enctype="multipart/form-data">
 	<table border="1" 
 	align="center" 
 	width="60%"  
 	style= "text-align: center ; font-size: 25px";
 	bgcolor="#cceeff" >
 		<tr>
 			<td>Roll no</td>
 			<td align="left"><input type="text" name="roll" placeholder="enter the roll number"></td>
 		</tr>
 		 
 		<tr>
 			<td>Name</td>
 			<td align="left"><input type="text" name="name" placeholder="enter the roll name"></td>
 		</tr>

 		<tr>
 			<td>city</td>
 			<td align="left"><input type="text" name="city" placeholder="enter the city "></td>
 		</tr>

 		<tr>
 			<td>contact no</td>
 			<td align="left"><input type="number" name="contact" placeholder="enter the contact number"></td>
 		</tr>

 		<tr>
 			<td>standerd </td>
 			<td align="left"><input type="number" name="standerd" placeholder="enter the standerd "></td>
 		</tr>

 		<tr>
 			<td>image </td>
 			<td  align="left"><input type="file" name="image" placeholder="browse the image "></td>
 		</tr>
 		<tr>
 			<td colspan="6" align="center"><input type="submit" name="submit" value="submit"></td>
 		</tr>
 	</table>
 	
 </form>
</body>
 

 <?php
if (isset($_POST['submit'])) {

 include ('../dbcon.php');
 $rollno = $_POST["roll"];
 $name= $_POST["name"];
 $city= $_POST["city"];
 $contactno= $_POST["contact"];
 $standered= $_POST["standerd"];
 $image= $_FILES["image"]["name"];
$tempname= $_FILES['image']['tmp_name'];

move_uploaded_file($tempname, "../dataimg/$image");


$querry = "INSERT INTO `student`(`id`, `roll no`, `name`, `city`, `contact`, `standerd`,`image`) VALUES ( Null,'$rollno','$name','$city','$contactno','$standered','$image')";

$run= mysqli_query($con,$querry);

if ($run == true) {
	echo "data inserted";
	
}
else{
	echo "data insertion failed";
}
}
 ?>
 








