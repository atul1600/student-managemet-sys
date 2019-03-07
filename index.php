 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/styleforindex.css">
 </head>
 <body>
 	<div class="container">
 

 <h5 align="right"><a href="login.php">Admin page</a></h5>

<h1 align="center">Welcome to student management system</h1>
<br><br>
<form method="post" action="index.php">
	<table style="width: 50%" align="center" class="border border-info">
	<tr>
		<td colspan="6" align="center"><h3>student information</h3></td>
	</tr>
	<tr>
		<td colspan="2" align="right" >choose standard</td>
		<td>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4st</option>

				
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right" > Roll no</td>
		<td><input type="text" name="rollno" required="required"></td>
	</tr>
	<tr>
		<td colspan="5" align="center"><button class="btn btn-dark" type="submit" name="submit">show details</button></td>

	</tr>
</table>

</form>		
 	</div>
 




 </body>
 </html>
 <?php
 if (isset($_POST['submit'])) {
 	echo "string";

 	$standered= $_POST["std"];
	$rollno = $_POST["rollno"];

	include('dbcon.php');
	include('function.php');

	showdetails($standered,$rollno);

}else{
	echo "No data found/ or entered";
}

?>















