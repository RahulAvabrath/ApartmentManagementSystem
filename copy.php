<?php

error_reporting(E_ALL);


//$answer=$_POST['answer'];
//$password=$_POST['password'];



$conn-new mysqli("locakhost","root","","apartment");



if($conn->connect_error)
{
	die("connectiion failed".$conn->connect_error);

}


$sql="UPDATE register SET password='123' where answer='kiccha'";


if($conn->query($sql)==TRUE)
{
	echo"Updated";
}

	else
	{
		echo"error".$conn->error;
	}


$conn->close();
?>
	}
}