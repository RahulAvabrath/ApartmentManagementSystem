
<!-- design and buttons -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admPHPc.css"> <!-- this page is linked with admin page's css file -->
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
	$username=$_POST['username'];
	$password=$_POST['password'];



	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);


	mysql_connect("localhost","root","");
	mysql_select_db("apartment");


	$result=mysql_query("select * from register where username ='$username' and password ='$password'")
		or die("Failed to querry database".mysql_error());
 
		$row=mysql_fetch_array($result);





		// empty data
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
               
               echo "Please enter Both Username, Password !!!!...";
            
               
		 }



		 // Correct data
        elseif ($row['username']==$username && $row['password']==$password)
		{
                 echo '<script type="text/javascript">';
                echo'alert("Welcome !! ");';
                
                echo 'window.location.href="afterlogin.html";';
                echo'</script>';


			//header('location: dashboard.html');
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
				<li><a href="login.html">HERE</a></li>
			</ul>
</div>


</header>	
</form>
	
</body>
</html>

