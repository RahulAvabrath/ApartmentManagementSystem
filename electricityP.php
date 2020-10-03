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
      $consumption=$_POST['consumption'];
      $amount=$_POST['amount'];
    
      



      
// database connection



      $conn=new mysqli('localhost','root','','apartment');
      if($conn->connect_error){
            die('Connection Failed:'-$conn->connnect_error);
      }
      else
      {
            $stmt=$conn->prepare("insert into electricity (block,houseno,fname,lname,phoneno,blocknumber,rrno,prevreading,currentreading,consumption, amount)values('".$block."','".$houseno."', '".$fname."','".$lname."''".$phoneno."', '".$rrno."', '".$prevreading."', '".$currentreading."', '".$consumption."','".$amount."')");
            $stmt->execute();

            echo "registration successfully";

            $stmt->close();
            $conn->close();
      }






?>