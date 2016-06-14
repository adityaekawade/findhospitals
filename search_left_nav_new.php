<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/global.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" charset="utf-8" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<script type="text/javascript">



</script>

</head>
	<body>
		<div class = "span2"></div>
		<div class = "span8">
						<?php
		require 'db1.php';
		/*$connect=mysql_connect("localhost","root","");
		mysql_select_db("sports");*/
$action=$_REQUEST['action'];
echo $action;
switch ($action)
{


case 'surgery':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where Surgery='surgery'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%1==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<h3><a href='show_product.php?id=$id' ><div class='book_title'>$name</h3></div>
									
										<img src='path' width='175' height='150'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
							<br>
					</td>";
				$i++;
			}
		}
		break;


case 'dadar':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where area='dadar'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;








case 'mahim':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where area='mahim'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;






//----------------------------------------------------------------------------------------------------------------------------------------------------//





		case 'government':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where classification='government'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;




	case 'private':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where classification='private'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;






	case 'trust':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where classification='trust'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;








//-------------------------------------------------------------------------------------------------------------------------------------//






			case 'categories':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where categories='multispeciality'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;




//-----------------------------------------------------------------------------------------------------------------//





			case 'surgical':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where surgical='surgical'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;


//------------------------------------------------------------------------------------------------------------------------------//




			case 'cariology':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where cardiology='cardiology'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;




//----------------------------------------------------------------------------------------------------------------//


			case 'oncology':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from hospital where oncology='oncology'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['name'];
				$path=$row['image'];

				$address=$row['address'];
				$phone=$row['phone'];
				$email=$row['website'];
			
				$email=$row['email'];
				$phone=$row['phone'];
				$id=$row['id'];
			
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
									
										<img src='path' width='100' height='100'/>
											</a>
										<ul class='details'>
											<li><b>email :-</b> $email</li>
											<li><b>phone :-</b> $phone</li>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;



//---------------------------------------------------------------------------------------------------------//

case 'computer':
$i=0;
		
		//mysql_select_db("sports");
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='computer' order by id DESC LIMIT 0 ,9 ") or die(mysql_error());
		$count=mysql_num_rows($result);
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
case 'Laptop':
	
$i=0;
		echo "in c2 case";
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop' and subcategory='LaptopGraphicCard' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'ComputerRam':
	
$i=0;
		echo "in RAMs case";
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='ComputerRam' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
case 'LaptopRam':
	echo "in laptopram case";
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop_Components' and subcategory='LaptopRam' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
		
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'InternalComputerHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='InternalComputerHardDisk'  order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'ExternalComputerHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='ExternalComputerHardDisk' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);

		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;






case 'onlycategory':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;















		case 'ComputerInternalHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='InternalHardDisk' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
	
		case 'LaptopExternalHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop_Components' and subcategory='LaptopExternalHardDisk' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);

		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'LaptopInternalHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop_Components' and subcategory='LaptopInternalHardDisk' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}

		break;
		
		case 'InternalDVD-RWnBlueRay':
		
	echo "in  InternalDVD-RWnBlueRay case";
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='InternalDVD-RW&BLUERAY' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		

		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
			case 'ExternalDVD-RWnBlueRay':
	echo "in  ExternalDVD-RWnBlueRay case";
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='ExternalDVD-RW&BLUERAY' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		

		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'Monitors':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='Monitors' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		BREAK;
		
		case 'ComputerGraphicCard':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='ComputerGraphicCard' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
		
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'LaptopGraphicCard':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop_Components' and subcategory='LaptopGraphicCard' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;
		case 'UPS':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components' and subcategory='UPS' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;



case 'onlycategory':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Computer_Components'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		break;






		case 'LaptopHardDisk':
	
$i=0;
		
		//mysql_select_db("sports");
		
		$result=mysql_query("select * from product where category='Laptop' and subcategory='LaptopHardDisk' order by id DESC LIMIT 0 ,3") or die(mysql_error());
		$count=mysql_num_rows($result);
		
	
		
		if($count!=0)
		{
			while($row=mysql_fetch_assoc($result))
			{
				$name=$row['productname'];
				$path=$row['image'];
				$price=$row['price'];
				$id=$row['id'];
				$warranty=$row['warranty'];
				$discount=$row['discount'];
	if($i%3==0)
					echo "<tr>";	
									
				echo "<td width='33.33%' valign='top'>
							<div class='details'>
										<a href='show_product.php?id=$id' ><div class='book_title'>$name</div>
										<img src='$path' width='100' height='100'/>
											</a>
										<ul class='details'>
										
											<li><b>Product Name :-</b> $name</li>
										
											<li><b>Price :-</b> $price</li>
												<li><b>Warranty :-</b> $warranty</li>
													<li><b>Discount :-</b> $discount <b> %</li>
											
											<br />	<a href='add_to_cart.php?p_id=$id' class='add_to_cart_button'>Add to cart</a>
										</ul>
										</div>
									
							</div>
					</td>";
				$i++;
			}
		}
		
		
		}
		?>
	</div>
	<div class = "span2"></div>
</body>