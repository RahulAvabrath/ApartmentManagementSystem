
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
      $houseno=$_POST['housenumber'];
      $phonenumber=$_POST['phonenumber'];
     
      $blocknumber=$_POST['blocknumber'];
      $rstatus=$_POST['rstatus'];
      $firstname=$_POST['firstname'];
      $lname=$_POST['lname'];
    
      



      
// database connection



      $conn=new mysqli('localhost','root','','apartment');


      if($conn->connect_error)
            {
      	     die('Connection Failed:'-$conn->connnect_error);
            }





            elseif (empty($_POST['housenumber']) || empty($_POST['phonenumber']) || empty($_POST['blocknumber']) || empty($_POST['rstatus']) || empty($_POST['firstname']) || empty($_POST['lname'])) 
          {
               
               echo "Please enter all attributes !!!!...";
               
           }



      else
      {
      	$stmt=$conn->prepare("insert into housedetails(houseno,phonenumber,blocknumber,rstatus,firstname,lname)values('".$houseno."', '".$phonenumber."', '".$blocknumber."', '".$rstatus."', '".$firstname."', '".$lname."')");
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
                        <li><a href="housedetails.html">HERE</a></li>
                  </ul>
</div>


</header>   
</form>
      
</body>
</html>

