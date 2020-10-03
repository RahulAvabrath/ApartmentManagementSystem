
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
      $answer=$_POST['answer'];
      $password=$_POST['password'];
      //$houseno=$_POST['houseno'];
 

     // $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');


    if($conn->connect_error)
      {
      	die('Connection Failed:'-$conn->connnect_error);
      }


$stmt="UPDATE `register` SET `password`=$'password' WHERE 'answer'=='answer'";



     if (empty($_POST['answer']) || empty($_POST['password']) )
     {
               
                echo 'Enter all the atttributes!!';

               
           }




      elseif('answer'==$answer)
      {
          echo "Updated successfully";
      }


else{
  echo "error";
}


       
        $conn->close();

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

