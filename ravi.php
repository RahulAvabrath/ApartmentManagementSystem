
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
//error_reporting(E_ALL);
      $answer=$_POST['answer'];
       $password=$_POST['password'];






$conn=new mysqli("localhost","root","","apartment");


if($conn->connect_error)
{
		die("connection failed".$conn->connect_error);
}
$query="SELECT `userid`, `firstname`, `lastname`, `phoneno`, `dob`, `mailid`, `city`, `username`, `password` FROM `register` where 'answer'='$answer'";
$n1=$conn->query($query);
if (empty($_POST['answer']) || empty($_POST['password'])) 
		{
               
              echo "Please enter Both Answer, Password !!!...";
            
               
		 }
//elseif ($n2['answer']!=$answer) {
//		 	echo 'error';
//}

else{
$sql="UPDATE register SET password ='$password' where answer ='$answer'" ;
		     $conn->query($sql);
				echo'Record updated successfully';
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
