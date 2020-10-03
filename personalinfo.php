<?php
error_reporting(E_ALL);


		$password=$_POST['password'];


		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT firstname,lastname,phoneno,dob,mailid,city,username,password,answer from register where password='password'";
		//$sql="SELECT * from waterbill where firstname='$firstname'";
		$result=$conn->query($sql);




		if($result-> num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{


				if($_POST['password'] != $password)
				{

					//$result="SELECT name FROM register "
					?>
						<br>first NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["firstname"]) ?>"> <br>


						<br>city  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["dob"]) ?>"> <br>


						<br>password  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="lastname" value="<?php echo( $row["password"]) ?>"> <br>


						<!--<br>block &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="bloxk" value="<?php echo( $row["block"]) ?>"> <br>-->




				<?php
					}
					else{
						echo "nope";
					}
					




}}
$conn->close();//closing database connection


?>
