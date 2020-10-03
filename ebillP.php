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
      $block=$_POST['block'];
      $houseno=$_POST['houseno'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $phoneno=$_POST['phoneno'];
      $rrno=$_POST['rrno'];
      $prevreading=$_POST['prevreading'];
      $currentreading=$_POST['currentreading'];
      $econsumption=$_POST['econsumption'];
      $eamount=$_POST['eamount'];
      
      



      $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');


      if($conn->connect_error)
      {
            die('Connection Failed:'-$conn->connnect_error);
      }


      elseif (empty($_POST['block']) || empty($_POST['houseno'])  || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['phoneno']) || empty($_POST['rrno']) || empty($_POST['prevreading']) || empty($_POST['currentreading']) || empty($_POST['econsumption']) || empty($_POST['eamount'])  ) 
     {
               
                echo "Please enter all attributes !!!!...";
            
               
      }



      else
      {
            $stmt=$conn->prepare("insert into electricity (block,fname,lname,phoneno,rrno,prevreading,ecurrentreading,econsumption)values('".$block."', '".$houseno."', '".$fname."', '".$lname."', '".$phoneno."', '".$rrno."', '".$prevreading."', '".$currentreading."', '".$econsumption."' , '".$eamount."')");

            $stmt->execute();


            echo "good";
            header("location:registernext.html");


            $stmt->close();
            $conn->close();
      }




?>




</div>

  </header>   

</body>
</html>