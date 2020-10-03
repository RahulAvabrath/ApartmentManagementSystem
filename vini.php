
<!-- design and buttons -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admPHPc.css">
	<title></title>
</head>
<body>


	<form >
		
	<header>




		<h1>Press &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp to continue</h1>









<div class="main">




<!-- related to database -->
<?php
error_reporting(E_ALL);
     $answer=$_POST['answer']; //error
      $password=$_POST['password'];






$conn= new mysqli("localhost","root","","apartment");


if($conn->connect_error)
{
		die("connection failed".$conn->connect_error);
}






$sql="UPDATE register SET password ='$password' where answer ='$answer'";

//$row=mysql_fetch_array($sql);
		//or die("Failed to querry database".mysqli_error());

		//	$row=mysqli_fetch_array($sql,$conn);






		// empty data
	if (empty($_POST['answer']) || empty($_POST['password'])) 
		{
               
             echo "Please enter Both Answer, Password !!!...";
            
               
		 }

		


		 	//correct data
	/*	if(!empty($_POST['answer']) || !empty($_POST['password']))*/

		//if($conn->query($sql)==TRUE)

		if($answer=$_POST['answer'])	
		{
			if($conn->query($sql)==TRUE)
			{
			 echo "Updated successfully";
			}
		}


	//	else
		{
	//		echo "error".$conn->error;;
		}
	


		






$conn->close();


?>



</div>

<div class="back">

			<ul>
				<li><a href="update.html">HERE</a></li>
			</ul>
</div>


</header>	
</form>
	
</body>
</html>
