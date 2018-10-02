<!DOCTYPE html>
<html>
<head>
	<title> Player Form </title>
</head>
<body>

	<form method="post" >
		<table align="center">
			<h1 align="center"> Player Registration </h1>
		<tr>
			<td>
				Player Id
				<input type="text" name="p_id" required>
			</td>
		</tr>

		<tr>
			<td>
		First Name
		<input type="text" name="fname">
		</td>
		</tr>
		<tr>
			<td>
		Middle Name
		<input type="text" name="mname">
		</td>
		</tr>
		<tr>
			<td>
		Last Name
		<input type="text" name="lname">
		</td>
		</tr>

		<tr>
			<td>
				Age
				<input type="number" name="age">
			</td>
		</tr>
		<tr>
			<td>
		Father Name
		<input type="text" name="Faname">
		</td>
		</tr>
		<tr>
			<td>
		Mother Name
		<input type="text" name="Moname">
		</td>
		</tr>

		<tr>
			<td align="center">
				<h5> Address </h5>
			</td>
		</tr>

		<tr>
			<td>
			House Name
			<input type="text" name="house_no">	
			</td>
		</tr>

		<tr>
			<td>
			Location
			<input type="text" name="location">	
			</td>
		</tr>

		<tr>
			<td>
			Village/Street
			<input type="text" name="village">	
			</td>
		</tr>

		<tr>
			<td>
			Thana
			<input type="text" name="thana">	
			</td>
		</tr>

		<tr>
			<td>
			District
			<input type="text" name="district">	
			</td>
		</tr>

		<tr>
			<td>
			Post Code
			<input type="number" name="post_code">	
			</td>
		</tr>

		<tr>
			<td><h5 align="center"> Education </h5></td>
		</tr>
		
		<tr>
			<td>
				Name of Degree
				<input type="text" name="n_d">
			</td>
		</tr>

		<tr>
			<td>
				Institute
				<input type="text" name="ins">
			</td>
		</tr>
		<tr>
			<td>
				Board/University
				<input type="text" name="board">
			</td>
		</tr>
		<tr>
			<td>
				Year
				<input type="Year" name="year">
			</td>
		</tr>
		<tr>
			<td>
				Result
				<input type="text" name="result1">
			</td>
		</tr>
		<div>
			<tr>
			<td><h5 align="center"> Membership </h5></td>
		</tr>
			<tr>
				<td>
	 <input type="radio" name="choice" value="ICCB"> ICCB
		<input type="radio" name="choice" value="BCCB"> BCCB
	<input type="radio" name="choice" value="ACCB"> ACCB
	 </div>
	</td>
	</tr>

		<tr><td align="center">
		<input type="submit" name="Submit" value="submit" >
		</td></tr>

		</table>
	</form>

<?php
 include_once("config1.php");
	if (isset($_POST['Submit'])) {
	# code...
	$p_id = $_POST['p_id'];	
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname =$_POST['lname'];
	$age = $_POST['age'];
	$Faname = $_POST['Faname'];
	$Moname = $_POST['Moname'];

	//////////////////////
	$house_no = $_POST['house_no']; 
	$location = $_POST['location'];
	$village = $_POST['village'];
	$thana = $_POST['thana'];
	$district = $_POST['district'];
	$post_code = $_POST['post_code'];
	/////////////////////

	$n_d = $_POST['n_d'];
	$ins = $_POST['ins'];
	$board = $_POST['board'];
	$year = $_POST['year'];
	$result1 = $_POST['result1'];

	//////////////////////
	$Membership=$_POST['choice'];


	//////////////////////////////////////////
	$result = "INSERT INTO infobasic(p_id,fname,mname,lname,age,father_Name,mother_Name,mship)
				VALUES('$p_id','$fname','$mname','$lname','$age','$Faname','$Moname','$Membership')";

	$result =mysqli_query($conn,$result);
	//put the query values in form
	
	$address = "INSERT INTO address(p_id,house_no,location,village,thana,district,post_code)
				VALUES('$p_id','$house_no','$location','$village','$thana','$district','$post_code')";

	$address = mysqli_query($conn,$address);

	////////////////////////////////////////////
	$education = "INSERT INTO edu(p_id,n_d,ins,board,year,result1)
				 VALUES('$p_id','$n_d','$ins','$board','$year','$result1')";

	$education = mysqli_query($conn,$education);			 

	// echo "<h1 align='center'> Information Added </h1>";			
}

 ?>

</body>
</html>