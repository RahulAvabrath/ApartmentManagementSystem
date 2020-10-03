<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="registerPHPc.css">
      <title></title>
</head>
<body>

   <header>
         







 



<div class="main">


<?php 
error_reporting(E_ALL);
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $phoneno=$_POST['phoneno'];
      $date=$_POST['date'];
      $mailid=$_POST['mailid'];
      $city=$_POST['city'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $answer=$_POST['answer'];
      



      $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');


      if($conn->connect_error)
         {
            	die('Connection Failed:'-$conn->connnect_error);
         }


      elseif (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['phoneno']) || empty($_POST['date']) || empty($_POST['mailid']) || empty($_POST['city']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['answer']) ) 
          {
               
                echo '<script type="text/javascript">';
                echo'alert("Enter all attributes");';
                echo 'window.location.href="register.html";';
                echo'</script>';
            
               
           }



      else
          {
      	       $stmt=$conn->prepare("insert into register(firstname,lastname,phoneno,dob,mailid,city,username,password,answer)values('".$firstname."', '".$lastname."', '".$phoneno."', '".$date."', '".$mailid."', '".$city."', '".$username."', '".$password."', '".$answer."')");
            	 $stmt->execute();

      	
                       header("location:registernext.html");


              	$stmt->close();
            	  $conn->close();
            }




?>




</div>

  </header>   

</body>
</html>