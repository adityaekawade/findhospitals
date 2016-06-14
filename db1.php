<?php
//$mysql_hostname = "mysql15.000webhost.com";
$mysql_hostname = "localhost";
//$mysql_user = "a4971331_comp";
$mysql_user = "iambinmn_ecomm2";
$mysql_password = "ecomm2";
$mysql_database = "iambinmn_ecomm2";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>


