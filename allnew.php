<!DOCTYPE html>
<html>
<head>
	<title>Register/Apartment </title>
	<link rel="stylesheet" type="text/css" href="registerC.css">
	
</head>

<body>
<header>
	


 	<div class="main">

 		<br><h2>   REGISTER HERE  </h2>
 		
 		<form action="retriveP.php" method="post">



 		<ul>


 			<!-- fname -->
 			<br><br>
 			<br>FIRST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input 	style="height: 50%;" type="text" name="firstname" value="<?php echo $row['firstname'] ?>"><br>


 			<!-- lname -->
 			<br>LAST NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname"><br>



 			<!-- phone -->
 			<br>PHONE NO.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="" name="phoneno"><br>
 			



 			<!-- birth date -->
			<br>BIRTH DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="date"><br>
				<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   (Date formate:  YYYY-MM-DD  )<br>
	




			<!-- mail id -->
 			<br>MAIL ID     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="mailid"><br>
 			



 			<!-- city -->
 			<br>CITY       &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp:&nbsp<input type="text" name="city"><br>


 			<!-- user name -->
 			<br>USER NAME      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="username"><br>



 			<!-- password -->
 			<br>PASSWORD          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<input type="password" name="password"><br><br>



 			<!-- s question -->
 									  ENTER YOUR NICK-NAME( incase you forgot password)		<br>						
 			<br>  ANSWER             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp<input type="text" name="answer"><br>





	</ul>


		<!-- Reset -->
 		<br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <input type="reset" value="Reset"  style="height: 30px; width:80px; " >
 		



 		<!-- Submit -->
 		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <input name="submit" value="Submit" type="submit"   style="height: 30px; width:80px; "><br>




 	</form>


 </div>







</header>


</body>
</html>
