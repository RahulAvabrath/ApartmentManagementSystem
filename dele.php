<!DOCTYPE html>
<html>
<head>
	<title>Register/Apartment </title>
	<link rel="stylesheet" type="text/css" href="personalC.css">
	
</head>

<body>
<header style="background-image: url(s3	.jpg);">
	

		<?php
error_reporting(E_ALL);


		$firstname=$_POST['firstname'];


		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT mailid, W.* from register , waterbill W  where firstname=W.firstname and 	firstname=$firstname";

		$result=$conn->query($sql);
		$query_run = mysqli_query($conn,$sql);
		


	//	if($result-> num_rows > 0 )
	//	{

	
			while($row=mysqli_fetch_array($query_run))
			{

		
				//if('firstname' == $firstname)
				//{

					?>
 	<div class="main">

 		<br><h2>   MY  INFORMATION  </h2>
 		
 		<form action="#" method="post">



 		<ul>
<br>mailid  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="mailid" value="<?php echo( $row["mailid"]) ?>"> <br>

						<br><br><br><br>FIRST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["firstname"]) ?>"> <br>





 			<!-- lname -->
 			<br>LAST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname"  value="<?php echo( $row["lastname"]) ?>"><br>





 			<!-- phone -->
 			<br>PHONE NO.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="" name="phoneno"  value="<?php echo( $row["phoneno"]) ?>"><br>
 			





 			<!-- birth date -->
			<br>BIRTH DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="date"  value="<?php echo( $row["dob"]) ?>"><br>
				<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   (Date formate:  YYYY-MM-DD  )<br>
	






			<!-- mail id -->
 			<br>MAIL ID     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="mailid"  value="<?php echo( $row["mailid"]) ?>"><br>
 			





 			<!-- city -->
 			<br>CITY       &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp:&nbsp<input type="text" name="city"  value="<?php echo( $row["city"]) ?>"><br>




 			<!-- user name -->
 			<br>USER NAME      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="username"  value="<?php echo( $row["username"]) ?>"><br>





 			<!-- password -->
 			<br>PASSWORD          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<input type="text" name="password"  value="<?php echo( $row["password"]) ?>"><br><br>





 			<!-- s question -->
 									   							
 			<br>  NICKNAME           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<input type="text" name="answer"  value="<?php echo( $row["answer"]) ?>"><br>





	</ul>

 	</form>


 </div>






 	<div class="btn">
	<u>
		<li-1><a href="myaccount.html">BACK</a></li-1>
	</u>

</div>
 			






<?php

}




$conn->close();//closing database connection


?>


</header>


</body>
</html>
