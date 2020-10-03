
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
      $block=$_POST['block'];
      $houseno=$_POST['houseno'];
      $firstname=$_POST['firstname'];
      $lname=$_POST['lname'];
      $phoneno=$_POST['phoneno'];
      $rrno=$_POST['rrno'];
      $prevreading=$_POST['prevreading'];
      $currentreading=$_POST['currentreading'];
      $wconsumption=$_POST['wconsumption'];
      $wamount=$_POST['wamount'];



      $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');

      if($conn->connect_error)
      {
      	die('Connection Failed:'-$conn->connnect_error);
      }




     elseif (empty($_POST['block']) || empty($_POST['houseno']) || empty($_POST['firstname']) || empty($_POST['lname']) || empty($_POST['phoneno']) || empty($_POST['rrno']) || empty($_POST['prevreading']) || empty($_POST['currentreading']) || empty($_POST['wconsumption']) || empty($_POST['wamount']) ) 
          {
               
                echo 'Enter all the atttributes!!';

               
           }




      else
      {
      	$stmt=$conn->prepare("insert into waterbill(block,houseno,firstname,lname,phoneno,rrno,prevreading,currentreading,wconsumption,wamount)values('".$block."', '". $houseno."', '".$firstname."', '".$lname."', '".$phoneno."', '".$rrno."', '".$prevreading."', '".$currentreading."', '".$wconsumption."' , '".$wamount."')");
      	$stmt->execute();

                echo '<script type="text/javascript">';
                echo'alert("Entered successfully!!");';
                echo 'window.location.href="dashboard.html";';
                echo'</script>';

      	$stmt->close();
      	$conn->close();
      }



 ?>
 </div>

<div class="back">

                  <ul>
                        <li><a href="wbill.html">HERE</a></li>
                  </ul>
</div>


</header>   
</form>
      
</body>
</html>

