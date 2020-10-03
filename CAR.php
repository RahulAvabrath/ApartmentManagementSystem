

<!DOCTYPE html>
<html>
<head>
	<title>PRINT </title>
	<link rel="stylesheet" type="text/css" href="personalC.css">
	
</head>

<body>
<header style="background-image: url(s3	.jpg);">
	

		<?php
error_reporting(E_ALL);

$firstname=$_POST['firstname'];


		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT groupsetup.block  ,groupsetup.houseno, groupsetup.housetype, groupsetup.electricitybackup ,
					 upayment.bamount, upayment.bname, upayment.accountid, upayment.pmode, upayment.tdate,
					 housedetails.phonenumber, housedetails.firstname, housedetails.lname,
					 electricity.econsumption, electricity.eamount,waterbill.wconsumption,waterbill.wamount
				from groupsetup, upayment, housedetails,electricity,waterbill
				where groupsetup.firstname=upayment.firstname and
					groupsetup.firstname=housedetails.firstname and
					groupsetup.firstname=electricity.firstname and
					groupsetup.firstname=waterbill.firstname and
					groupsetup.firstname='$firstname' ";
					
		$result=$conn->query($sql);
		$query_run = mysqli_query($conn,$sql);




		
while($row=mysqli_fetch_array($query_run))
			{



				if(empty($_POST['firstname']))
				{
					 echo '<script type="text/javascript">';
                echo'alert("enter all attributes!!");';
                echo 'window.location.href="dashboard.html";';
                echo'</script>';
				}

				elseif($firstname!='firstname')
				{

								?>
 	<div class="main" style="left: 70%;">

 		<br><h2 >   GANAPATHI APARTMENT </h2>
 		<br>-----------------------------------------------------------------------------------
 		
 		<form action="#" method="post">



 		<ul>

 <!-- table 3 -->

 				

 				FIRSTNAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["firstname"]) ?></span><br>


 				<br>LASTNAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["lname"]) ?></span><br>


 				<br>PHONE NUMBER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["phonenumber"]) ?></span><br>






<!--TABLE 1-->
    			
    			<br>BLOCK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span ><?php echo( $row["block"]) ?></span> <br>



 				<br>HOUSENO &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["houseno"]) ?></span><br>




 				<br>HOUSETYPE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["housetype"]) ?></span><br>



 				<br>E.BACKUP  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["electricitybackup"]) ?></span><br>









<!-- table 2 -->
 				<br>PAYMENT AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["bamount"]) ?></span><br>


 				<br>BANK NAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp<span><?php echo( $row["bname"]) ?></span><br>

 				<br>ACCOUNT ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp<span><?php echo( $row["accountid"]) ?></span><br>


 				<br>PAYMENT MODE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["pmode"]) ?></span><br>


 				<br>TRANSAC.DATE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp<span><?php echo( $row["tdate"]) ?></span><br>








<!-- table 4 -->

 				<br>ELE-CONSUMPTION &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["econsumption"]) ?>&nbsp&nbspWATT</span><br>


 				<br>ELE-AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp<span>Rs.<?php echo( $row["eamount"]) ?></span><br>



<!--  table -->

				<br>WAT-CONSUMPTION &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span><?php echo( $row["wconsumption"]) ?>&nbsp Litre</span><br>

				<br>WAT-AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<span>Rs.<?php echo( $row["wamount"]) ?></span><br>






 		












	</ul>

 	</form>


 </div>

<button onclick="window.print();"
style="
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  position: absolute;
  top: 90%;
  left: 66.4%;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;"
>DOWNLOAD</button>





 	<div class="btn">
	<u>
		<li-1><a href="dashboard.html">BACK</a></li-1>
	</u>

</div>
 			






<?php

}

elseif($firstname=='firstname'){
	 echo '<script type="text/javascript">';
                echo'alert("error!!");';
                echo 'window.location.href="dashboard.html";';
                echo'</script>';
}

else
{
	echo "nope";
}
}





$conn->close();//closing database connection


?>


</header>
<script language="javascript" type="text/javascript">
function printDiv(dataPrint) {
//Get the HTML of div
var divElements = document.getElementById(dataPrint).innerHTML;
//Get the HTML of whole page
var oldPage = document.body.innerHTML;
//Reset the page's HTML with div's HTML only
document.body.innerHTML =
"<html><head><title></title></head><body>" +
divElements + "</body>";
//Print Page
window.print();
//Restore orignal HTML
document.body.innerHTML = oldPage;
}
</script>

</body>
</html>
