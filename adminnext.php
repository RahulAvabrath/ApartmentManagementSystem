<!DOCTYPE html>
<html>
<head >
	<link rel="stylesheet" type="text/css" href="adminnextC.css">
	<title></title>
</head>
<body style="background: #F6B46F;">


	<!-- back button -->
	<div class="btn">
			<a href="adminH.html"><button style="height: 30px; width: 70px;">Back</button></a>
	</div>



<div class="main">
	<h1 style="background-color: #000; color: #fff;"width="100%" align="center" >User  Data </h1>
	<table border="1", width="100%" ,top="20%"s>
		<thead>
		<tr bgcolor="#000">
			<th><font color="#fff">Firstname</th>
			<th><font color="#fff">Lastname</th>
			<th><font color="#fff">Phoneno</th>
			<th><font color="#fff">Dob</th>
			<th><font color="#fff">Mailid</th>
			<th><font color="#fff">City</th>
			<th><font color="#fff">Username</th>
			<th><font color="#fff">Password</th>
			<th><font color="#fff">Answer</th>
		</tr>
		</thead>
<?php
		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT firstname,lastname,phoneno,dob,mailid,city,username,password,answer from register";
		$result=$conn->query($sql);
		if($result-> num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				// echo "<br> ";
				
				echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["phoneno"]."</td><td>".$row["dob"]."</td><td>".$row["mailid"]."</td><td>".$row["city"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>" .$row["answer"]."</td></tr>";
			}

			echo "</table>";
		}


		else
		{
			echo "0 results";
		}

?>

	</table>
</div><br><br>
<?php 
error_reporting(E_ALL);
$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}

if(isset($_POST['submit']))
{  
    $wcost=$_POST['wcost'];
    $sql=mysqli_query($conn,"UPDATE `w_cost` SET `wa_cost` = '$wcost' WHERE `w_cost`.`id` = 114 ");
    if($sql>0) 
    {
        header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/adminnext.php");
    }
	$ecost=$_POST['ecost'];
    $sql=mysqli_query($conn,"UPDATE `e_cost` SET `el_cost` = '$ecost' WHERE `e_cost`.`id` = 114  ");
    if($sql>0) 
    {
        header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/adminnext.php");
    }
    }   
?>

<form action="adminnext.php" method="post">
        <p align="center" style="font-size: 28px;">
        	<br><br><br>
        	   Enter the amount<br><br>
         For 1 Unit :<input class="form-control" id="wcost" name="wcost" placeholder="Water cost" type="text" required><br><br>
         For 1 liter :<input class="form-control" id="ecost" name="ecost" placeholder="Electricity cost  " type="text" required>  <br><br>
          <input type="submit" name="submit" value="Submit " style="width: 8%; height: 30px;">
        </p>
 </form>

</body>
</html>