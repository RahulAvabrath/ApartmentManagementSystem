		<?php
error_reporting(E_ALL);


		$firstname=$_POST['firstname'];


		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT firstname, lastname, block, houseno from register , waterbill  where 'city'='kundapur";
		$result=$conn->query($sql);
		$query_run = mysqli_query($conn,$sql);
		
		


	//	if($result-> num_rows > 0 )
	//	{

	
			while($row=mysqli_fetch_array($query_run))
			{



	
/*		$result=$conn->query($sql);
		$query_run = mysqli_query($conn,$sql);
		


		if($result-> num_rows > 0 )
		{*/

	
		
				if('firstname' != $firstname)
				{

					?>

						<br>mailid  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="mailid" value="<?php echo( $row["mailid"]) ?>"> <br>


						<br>first NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["firstname"]) ?>"> <br>


						<br>answer  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="answer" value="<?php echo( $row["answer"]) ?>"> <br>


						<br>password  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["password"]) ?>"> <br>



						<br>amount &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="amount" value="<?php echo( $row["amount"]) ?>"> <br>


					<br>	<br>block &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="rrno" value="<?php echo( $row["rrno"]) ?>"> <br>




				<?php
				}


				else
					{
						echo "nope";
					}
						



}

$conn->close();//closing database connection


?>
