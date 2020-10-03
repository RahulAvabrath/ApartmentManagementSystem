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


		$answer=$_POST['answer'];


		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT * FROM register where answer='$answer'";

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


				<!-- <br><br><br><br>FIRST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["firstname"]) ?>"readonly> <br> -->
    			
    			<br><br><br><br>FIRST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span ><?php echo( $row["firstname"]) ?></span> <br>




 			<!-- lname -->
 			<br>LAST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["lastname"]) ?></span><br>





 			<!-- phone -->
 			<br>PHONE NO.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["phoneno"]) ?></span><br>
 			





 			<!-- birth date -->
			<br>BIRTH DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["dob"]) ?></span><br>
				 
	






			<!-- mail id -->
 			<br>MAIL ID     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["mailid"]) ?></span><br>
 			





 			<!-- city -->
 			<br>CITY       &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp:&nbsp<span><?php echo( $row["city"]) ?></span><br>




 			<!-- user name -->
 			<br>USER NAME      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["username"]) ?></span><br>





 			<!-- password -->
 			<br>PASSWORD          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<span><?php echo( $row["password"]) ?></span><br>





 			<!-- s question -->
 									   							
 			<br>  NICKNAME           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<span><?php echo( $row["answer"]) ?></span><br>





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
