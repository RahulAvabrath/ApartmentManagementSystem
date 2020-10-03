<?php

error_reporting(E_ALL);

	$firstname=$_POST['firstname'];
	$password=$_POST['password'];
	$answer=$_POST['answer'];


	$firstname=stripcslashes($firstname);
	$password=stripcslashes($password);
	$firstname=mysql_real_escape_string($firstname);
	$password=mysql_real_escape_string($password);

	mysql_connect("localhost","root","");
	 mysql_select_db("apartment");





//if(isset($_POST['submit']))
//{
	//$password=$_POST['password'];
	//$fname=$_POST['fname'];


$result=mysql_query("select * from register where firstname ='$firstname' and answer ='$answer'")
		or die("Failed to querry database".mysql_error());
//$result=mysql_query("select * from register where firstname ='$firstname' ")
		//or die("Failed to querry database".mysql_error());

		$row=mysql_fetch_array($result);

	 if ($row['firstname']==$firstname)
	 {

	$result=mysql_query("UPDATE 'register' SET password='$password' WHERE firstname=$firstname")
	or die("Failed to querry database".mysql_error());
	$row=mysql_fetch_array($query);

	//if($row)


//	{
		echo "good";
	}

	else
	{
		echo "Bad";
	}

//	}









?>