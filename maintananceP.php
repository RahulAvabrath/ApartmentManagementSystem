
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
     
      $housetype=$_POST['housetype'];
      $mamount=$_POST['mamount'];

      $firstname=$_POST['firstname'];
    



      
// database connection



      $conn=new mysqli('localhost','root','','apartment');


      if($conn->connect_error)
            {
                 die('Connection Failed:'-$conn->connnect_error);
            }





            elseif (empty($_POST['block']) || empty($_POST['houseno']) || empty($_POST['housetype']) || empty($_POST['mamount']) || empty($_POST['firstname']) ) 
          {
               
               echo "Please enter all attributes !!!!...";
               
           }



      else
      {
            $stmt=$conn->prepare("insert into maintanance(block,houseno,housetype,mamount,firstname )values('".$block."', '".$houseno."', '".$housetype."', '".$mamount."', '".$firstname."')");
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

