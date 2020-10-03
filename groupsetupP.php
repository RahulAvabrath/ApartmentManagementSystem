
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
      $floorno=$_POST['floorno'];
      $housetype=$_POST['housetype'];
      $parkingtype=$_POST['parkingtype'];
      $electricitybackup=$_POST['electricitybackup'];
      $furnishedstate=$_POST['furnishedstate'];
      $intercomno=$_POST['intercomno'];
      $firstname=$_POST['firstname'];
     



      $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');



      if($conn->connect_error)
      {
      	die('Connection Failed:'-$conn->connnect_error);
      }




      elseif ( empty($_POST['block']) || empty($_POST['houseno']) || empty($_POST['floorno']) || empty($_POST['housetype']) || empty($_POST['parkingtype']) || empty($_POST['electricitybackup']) || empty($_POST['furnishedstate']) || empty($_POST['intercomno']) || empty($_POST['firstname']) ) 
             {
               
                    echo "Please enter all attributes !!!!...";      
               
             }





      else
      {
      	$stmt=$conn->prepare("insert into groupsetup(block,houseno,floorno,housetype,parkingtype,electricitybackup,furnishedstate,intercomno,firstname)values('".$block."', '". $houseno."', '".$floorno."', '".$housetype."', '".$parkingtype."', '".$electricitybackup."', '".$furnishedstate."', '".$intercomno."', '".$firstname."')");
      	$stmt->execute();

                echo '<script type="text/javascript">';
                echo'alert("Details entered successfully!!");';
                echo 'window.location.href="dashboard.html";';
                echo'</script>';

      	$stmt->close();
      	$conn->close();
      }




 ?>

 </div>

<div class="back">

                  <ul>
                        <li><a href="groupsetup.html">HERE</a></li>
                  </ul>
</div>


</header>   
</form>
      
</body>
</html>

