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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/styleforbg.css">

<body>
<form action="deletestudent.php" method="post" enctype="multipart/form-data">
<table align="center">
		<tr><th>Enter standerd</th>
			<td>
 				<input type="number" name="standerd" pattern="enter standerd">
			</td>
		</tr>
		<tr><th>Enter the name</th>
			<td>
				<input type="text" name="name" placeholder="enter the name of student">
				
			</td>
		</tr>
		<tr>
			<td colspan="6" align="center">
			<button type="submit" name="search" class="btn btn-danger"> search</button>

			</td>
		</tr>


</table>
</form>
<form enctype="multipart/form-data"> 

<table align="center" border="2" width="80%">
	<tr>
		<th>no</th>
		<th>name</th>
		<th>city</th>
		<th>Roll no</th>
		<th>Delete</th>
	</tr>

<?php

if (isset($_POST["search"])) {
	include("../dbcon.php");
	$name= $_POST["name"];
	$standerd= $_POST["standerd"];
	$sql ="SELECT * FROM `student` WHERE `standerd` = '$standerd' AND `name` LIKE '%$name%'";
	$run = mysqli_query($con,$sql);

		if (mysqli_num_rows($run)<1) {
			echo "<tr><td colspan='5'>No records found</td></tr>";
		}
		else
		{
		$count =0;
	  	 while($data=mysqli_fetch_assoc($run))
	  	 {
		$count++;
				?>
 			<tr>
 		<td><?php echo $count; ?></td>
 		<td><?php echo $name; ?></td>
<!--  		<td><img src="../dataimg/<?php $data['image']; ?>" style="height:20px"></td>
 --> 		
  		<td><?php echo $data["city"]; ?></td>
 		<td><?php echo $data['roll no']; ?> </td>
 		<td ><a href="deleteform.php?sid=<?php echo $data["id"];?>">  delete</a></td>
 			</tr>
 			<?php  
 		}
	
 }
}

?>
</table>
</form>	
</body>
