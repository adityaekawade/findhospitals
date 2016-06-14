<?php
	$q=$_GET['q'];
	$mysqli=mysqli_connect('localhost','iambinmn_ecomm2','ecomm2','iambinmn_ecomm2') or die("Database Error");
	$my_data=mysqli_real_escape_string($mysqli,$q);
	$sql="SELECT area FROM locality WHERE area LIKE '%$my_data%' ORDER BY area";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['area']."\n";
		}
	}
?>