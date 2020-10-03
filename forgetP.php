<!-- design and buttons -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forgetPHPc.css">
	<title></title>
</head>
<body>
	<form >
		
	<header>

		<h1>Press &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp to continue</h1>




<div class="back">

			<ul>
				<li-1> <a href="login.html" >HERE</a> </li-1>
			</ul>
</div>





<div class="main">
			


<!-- related to database -->
<?php
error_reporting(E_ALL);
	$firstname=$_POST['firstname'];
	$answer=$_POST['answer'];



	$firstname=stripcslashes($firstname);
	$answer=stripcslashes($answer);
	$firstname=mysql_real_escape_string($firstname);
	$answer=mysql_real_escape_string($answer);


	mysql_connect("localhost","root","");
	mysql_select_db("apartment");


	$result=mysql_query("select * from register where firstname ='$firstname' and answer ='$answer'")
		or die("Failed to querry database".mysql_error());

		$row=mysql_fetch_array($result);

		



		//if empty data column
		if (empty($_POST['firstname']) || empty($_POST['answer'])) 
		{
               
               echo "Please enter firstname, answer !!!!...";

               
         }





         // if correct data are entered
        elseif ($row['firstname']==$firstname && $row['answer']==$answer)
		{
				



				echo "Hello ".$row['firstname'];

				// querry for display passoword
				$result=mysql_query("select password from register where firstname ='$firstname' and answer ='$answer'")
				or die("Failed to querry database".mysql_error());

				$row=mysql_fetch_array($result);

					 // if correct data are entered
        		
				


				// print password
				echo "<br>	";
				echo"Your password is -  ''"  .$row['password'];
				echo "''	.";
				echo "<br>";
				echo "Please remember your password for login";

			
		}	

			
		






			// echo"your password is  "  .$row['answer'];
			// header('location: nnnphp.php');
		



			
		

		// if incorrect data are entered
		else
		{
			echo"Failed to login !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
		}



?>




</div>

</header>	
</form>

</body>
</html>

