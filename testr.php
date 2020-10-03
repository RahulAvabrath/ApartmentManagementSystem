		<?php
error_reporting(E_ALL);


	//	$firstname=$_POST['firstname'];


		$mysqli=new mysqli("localhost","root","","apartment");



		$result=$mysqli->query("SELECT register.* as register, waterbill.* as waterbill FROM register,waterbill");
		//$row=($result);



while($rows = $result ->fetch_array())
{

		$register = $rows['register'];
		$waterbill = $rows['waterbill'];




		echo "<p> Register: $register <br/> Waterbill:$waterbill</p>";


}



		?>




