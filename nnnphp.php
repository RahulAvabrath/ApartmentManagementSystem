<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forgetnextC.css">
	<title></title>
</head>
<body>
	<header>
		

		<div class="msg">
			<br><br>
			<h1>&nbsp Answer Matched Successfully!!</h1>
			

<?php
		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT answer from register where firstname";
		$result=$conn->query($sql);




		if($result-> num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				echo "<br> ";
				
				echo"Login success!!! welcome  "  .$row['answer'];

			}

			
		}


		



$conn->close();//closing database connection
?>



		</div>	



		


		<div class="btn">
			<a href="login.html">  <button style="height: 35px; width: 100px;">Continue</button></a>
			

		</div>



	</header>

</body>
</html>