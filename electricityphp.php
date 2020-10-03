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

    $conn=mysqli_connect("localhost","root","","apartment");
    if($conn->connect_error)
    {
      die("Connection failed:".$conn->connect_error);
    }
    $sql="SELECT id,el_cost from e_cost";
    $result=$conn->query($sql);
    if($result-> num_rows > 0)
    {
      while($row=$result->fetch_assoc())
      {
        $a=$row["el_cost"];
      }
    }



      $block=$_POST['block'];
      $houseno=$_POST['houseno'];
      $firstname=$_POST['firstname'];
      $lname=$_POST['lname'];
      $phoneno=$_POST['phoneno'];
      $rrno=$_POST['rrno'];
      $prevreading=$_POST['prevreading'];
      $currentreading=$_POST['currentreading'];
      $econsumption=$currentreading-$prevreading;
      $eamount=$econsumption * $a;



// database connection



      $conn=new mysqli('localhost','root','','apartment');

      if($conn->connect_error)
      {
        die('Connection Failed:'-$conn->connnect_error);
      }




     elseif (empty($_POST['block']) || empty($_POST['houseno']) || empty($_POST['firstname']) || empty($_POST['lname']) || empty($_POST['phoneno']) || empty($_POST['rrno']) || empty($_POST['prevreading']) || empty($_POST['currentreading'])) 
          {
               
                echo 'Enter all the atttributes!!';

               
           }




      else
      {
        $stmt=$conn->prepare("insert into electricity(block,houseno,firstname,lname,phoneno,rrno,prevreading,currentreading,econsumption,eamount)values('".$block."', '". $houseno."', '".$firstname."', '".$lname."', '".$phoneno."', '".$rrno."', '".$prevreading."', '".$currentreading."', '".$econsumption."' , '".$eamount."')");
        $stmt->execute();
        
        echo "<script type='text/javascript'>alert('Electricity consumed =  $econsumption units        Electricity bill amount is Rs.$eamount');</script>";
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
                        <li><a href="electricityh.html">HERE</a></li>
                  </ul>
</div>


</header>   
</form>
      
</body>
</html>