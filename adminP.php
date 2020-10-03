
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
	$adminname=$_POST['adminname'];
	$password=$_POST['password'];



	$adminname=stripcslashes($adminname);
	$password=stripcslashes($password);
	$adminname=mysql_real_escape_string($adminname);
	$password=mysql_real_escape_string($password);


	mysql_connect("localhost","root","");
	mysql_select_db("apartment");


	$result=mysql_query("select * from admin where adminname ='$adminname' and password ='$password'")
		or die("Failed to querry database".mysql_error());

		$row=mysql_fetch_array($result);





		// empty data
		if (empty($_POST['adminname']) || empty($_POST['password'])) 
		{
               
               echo "Please enter Both Admin name, Password !!!!...";
            
               
		 }



		 // Correct data
        elseif ($row['adminname']==$adminname && $row['password']==$password)
		{
			echo"Login success!!! welcome  "  .$row['firstname'];
			header('location: adminnext.php');
		}

			
		

		// incorrect data
		else
		{
			echo"Failed to login !!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		}



?>



</div>

<div class="back">

			<ul>
				<li><a href="adminH.html">HERE</a></li>
			</ul>
</div>


</header>	
</form>
	
</body>
</html>

