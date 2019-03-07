<?php

 include ('../dbcon.php');
 $id = $_REQUEST['sid'];

$querry = 
"DELETE FROM `student` WHERE `id`='$id' ";

$run= mysqli_query($con,$querry);

if ($run == true) {
	?>
	<script type="text/javascript">
		alert("data deleted");
		  window.open('deletestudent.php','_self')
	</script>
	<?php
	


	
}
else{
	echo "data insertion failed";
}

?>
