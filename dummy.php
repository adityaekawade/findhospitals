<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="keywords" content="js, css, metro, framework, windows 8, metro ui">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <title>Find Hospital</title>

    <style>
    </style>

</head>
<body class="metro">    
 <header class="bg-dark" data-load="header.html"></header>
<?php include('header2.php');?>


<div class="grid">
    <div class="row">
      <div class="span2"></div>
      <div class="span8">





<?php

$mysqli=mysqli_connect('localhost','iambinmn_ecomm2','ecomm2','iambinmn_ecomm2') or die("Database Error");
$area=$_GET["tag"];

$classification = $_GET['classification']; 
    $categories = $_GET['categories']; 

/* check variables being set */ 
  echo '<p><legend>Search Results:</legend></p>'; 
//echo 'Location: ' . $yoursafe_post_location . '<br />'; 
  
  echo '<p> <p><p><p>';
//echo 'Category: ' . $yoursafe_post_category. '<br />';  
// we dont get null values from post and get instead we get ""
    if($area=="" && $classification=="" && $categories=="")
      $i=1;
    if($area=="" && $classification=="" && $categories!="")
      $i=2;
    if($area=="" && $classification!="" && $categories=="")
      $i=3;
    if($area=="" && $classification!="" && $categories!="")
      $i=4;
    if($area!="" && $classification=="" && $categories=="")
      $i=5;
    if($area!="" && $classification=="" && $categories!="")
      $i=6;
    if($area!="" && $classification!="" && $categories=="")
      $i=7;
    if($area!="" && $classification!="" && $categories!="")
      $i=8;
    switch($i)
    { case 1:$r="select * from hospital where area like'%$area%' and classification='$classification' and categories='$categories' ORDER BY Rank ASC   ";break;
      case 2:$r="select * from hospital where categories='$categories' ORDER BY Rank ASC   ";break;
      case 3:$r="select * from hospital where classification='$classification'  ORDER BY Rank ASC   ";  break;
      case 4:$r="select * from hospital where classification='$classification' and categories='$categories' ORDER BY Rank ASC   "; break;
      case 5:$r="select * from hospital where area like '$area'  ORDER BY Rank ASC   "; break;
      case 6:$r="select * from hospital where area like'$area' and categories='$categories' ORDER BY Rank ASC   "; break;
      case 7:$r="select * from hospital where area like '$area' and classification='$classification'  ORDER BY Rank ASC   ";break;
      case 8:$r="select * from hospital where area like'$area' and classification='$classification' and categories='$categories' ORDER BY Rank ASC   "; break;
    }
   
   
$b=mysqli_query($mysqli,$r);
$count= mysqli_num_rows($b);

if(mysqli_num_rows($b)!=0)
{echo"<br>";
while($rows=mysqli_fetch_array($b)){
  $res=$rows["name"];
  $class=$rows["classification"];
  $addr=$rows["address"];
   $id=$rows['id'];
    $path=$rows['image'];
    $email=$rows['email'];
        $phone=$rows['phone'];
        $area=$rows['area'];

  //echo"<h1> <a href='show_product.php?id=$id' >$res</a></h1><br>$class<br>$addr<br>";
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$res</h2></a></p></td>
     </tr>
     <tr>
     <td width ='216' align ='left' valign='top'><p><p><a href='hospital.php?id=$id' ><img src='$path' width='150' height='150'/></a></td>
     <td width ='35'></td>
     <td width ='551' align='left' valign='top'><span class='icon-phone'> </span> &nbsp;Phone :   $phone <p> 
     <span class='icon-mail'> </span> &nbsp;Email :   $email<br> 
           <a href='area.php'>     <span class='icon-location-2'> </span> &nbsp;Area: </a> $area  </td>
           </tr>
           <hr>
           </table>




     ";
}

}
else{
  echo"<br>Result not found";
}

?>



</div>
      <div class="span2"></div>
   </div>
</div>