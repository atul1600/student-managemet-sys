<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<?php

function showdetails($standered,$rollno)
{
	
	include('dbcon.php');
$sql = "SELECT * FROM `student` WHERE `roll no`='$rollno' AND `standerd` = '$standered'";

$run = mysqli_query($con,$sql);

if (mysqli_num_rows($run)>0) {

	$data = mysqli_fetch_assoc($run);
	?>


	<table border="1" align="center" width="80%"  style= "text-align: center ; font-size: 25px"; bgcolor="#53E0BC" >
 		<tr>
 			<th>Roll no</th>
 			<td><?php echo $data["roll no"]; ?></td>
 		</tr>
 		 
 		<tr>
 			<td>Name</td>
 			<td><?php echo $data["name"]; ?></td>
 		</tr>

 		<tr>
 			<td>city</td>
 			<td><?php echo $data["city"]; ?></td>
 		</tr>

 		<tr>
 			<td>contact no</td>
 			<td><?php echo $data["contact"]; ?></td>
 		</tr>

 		<tr>
 			<td>standerd </td>
 			<td><?php echo $data["standerd"]; ?></td>
 		</tr>

 		<tr>
 			<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>"> </td>
 			
 		</tr>
 		
 	</table>
 	
 <?php
	
}else{
	echo "no records found";
}

}
?>