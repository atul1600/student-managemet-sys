<?php

 include ('../dbcon.php');
 $rollno = $_POST["roll"];
 $name= $_POST["name"];
 $city= $_POST["city"];
 $contactno= $_POST["contact"];
 $id = $_POST["sid"];
 $standered= $_POST["standerd"];
 $image= $_FILES["image"]["name"];
$tempname= $_FILES['image']['tmp_name'];

move_uploaded_file($tempname, "../dataimg/$image");


$querry = "UPDATE `student` SET `roll no` = '$rollno', `name` = '$name', `city` = '$city', `contact` = '$contactno', `standerd` = '$standered' WHERE `id` = '$id'";

$run= mysqli_query($con,$querry);

if ($run == true) {
	?>
	<script type="text/javascript">
		alert("data");
		  window.open('updateform.php?sid = <?php echo $id; ?>','_self')
	</script>
	<?php
	


	
}
else{
	echo "data insertion failed";
}

?>
