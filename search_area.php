<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Healthcare Options: Find Hospital">
    <meta name="description" content="Find hospitals">
    <meta name="keywords" content="hospital, specialities, area">

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

    <title>Area result</title>

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
        require 'db1.php';
      
$action=$_REQUEST['action'];
echo $action;
switch ($action)
{

case 'Malad West':
        
        $result=mysql_query("select * from hospital where area='Malad West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;
    
case 'Andheri West':
        
        $result=mysql_query("select * from hospital where area='Andheri West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Borivali West':
        
        $result=mysql_query("select * from hospital where area='Borivali West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kandivali West':
        
        $result=mysql_query("select * from hospital where area='Kandivali West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Andheri East':
        
        $result=mysql_query("select * from hospital where area='Andheri East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Malad East':
        
        $result=mysql_query("select * from hospital where area='Malad East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'VileParle West':
        
        $result=mysql_query("select * from hospital where area='VileParle West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kandivali East':
        
        $result=mysql_query("select * from hospital where area='Kandivali East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Bandra West':
        
        $result=mysql_query("select * from hospital where area='Bandra West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Goregaon West':
        
        $result=mysql_query("select * from hospital where area='Goregaon West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Santacruz West':
        
        $result=mysql_query("select * from hospital where area='Santacruz West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Dadar West':
        
        $result=mysql_query("select * from hospital where area='Dadar West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Khar West':
        
        $result=mysql_query("select * from hospital where area='Khar West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Vile Parle East':
        
        $result=mysql_query("select * from hospital where area='Vile Parle East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Santacruz East':
        
        $result=mysql_query("select * from hospital where area='Santacruz East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Borivali East':
        
        $result=mysql_query("select * from hospital where area='Borivali East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Goregaon East':
        
        $result=mysql_query("select * from hospital where area='Goregaon East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Jogeshwari East':
        
        $result=mysql_query("select * from hospital where area='Jogeshwari East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Malad West':
        
        $result=mysql_query("select * from hospital where area='Malad West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Dahisar':
        
        $result=mysql_query("select * from hospital where area='Dahisar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Jogeshwari West':
        
        $result=mysql_query("select * from hospital where area='Jogeshwari West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Bandra East':
        
        $result=mysql_query("select * from hospital where area='Bandra East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Khar East':
        
        $result=mysql_query("select * from hospital where area='Khar East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Thane West':
        
        $result=mysql_query("select * from hospital where area='Thane West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Dombivli':
        
        $result=mysql_query("select * from hospital where area='Dombivli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Malad West':
        
        $result=mysql_query("select * from hospital where area='Malad West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mira Road':
        
        $result=mysql_query("select * from hospital where area='Mira Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Vasai':
        
        $result=mysql_query("select * from hospital where area='Vasai'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kalyan':
        
        $result=mysql_query("select * from hospital where area='Kalyan'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Bhayandar':
        
        $result=mysql_query("select * from hospital where area='Bhayandar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Ulhasnagar':
        
        $result=mysql_query("select * from hospital where area='Ulhasnagar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kalwa':
        
        $result=mysql_query("select * from hospital where area='Kalwa'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mumbra':
        
        $result=mysql_query("select * from hospital where area='Mumbra'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Virar':
        
        $result=mysql_query("select * from hospital where area='Virar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Ambernath':
        
        $result=mysql_query("select * from hospital where area='Ambernath'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Thane East':
        
        $result=mysql_query("select * from hospital where area='Thane East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Badlapur':
        
        $result=mysql_query("select * from hospital where area='Badlapur'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Bhiwandi':
        
        $result=mysql_query("select * from hospital where area='Bhiwandi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Palghar':
        
        $result=mysql_query("select * from hospital where area='Palghar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mulund West':
        
        $result=mysql_query("select * from hospital where area='Mulund West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Ghatkopar West':
        
        $result=mysql_query("select * from hospital where area='Ghatkopar West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Chembur':
        
        $result=mysql_query("select * from hospital where area='Chembur'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Ghatkopar East':
        
        $result=mysql_query("select * from hospital where area='Ghatkopar East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Bhandup West':
        
        $result=mysql_query("select * from hospital where area='Bhandup West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kurla West':
        
        $result=mysql_query("select * from hospital where area='Kurla West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Vikhroli East':
        
        $result=mysql_query("select * from hospital where area='Vikhroli East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Mulund East':
        
        $result=mysql_query("select * from hospital where area='Mulund East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Powai':
        
        $result=mysql_query("select * from hospital where area='Powai'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Govandi':
        
        $result=mysql_query("select * from hospital where area='Govandi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;  
    
case 'Kanjurmarg':
        
        $result=mysql_query("select * from hospital where area='Kanjurmarg'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;
    
case 'Kurla East':
        
        $result=mysql_query("select * from hospital where area='Kurla East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Vikhroli West':
        
        $result=mysql_query("select * from hospital where area='Vikhroli West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Chunabhatti':
        
        $result=mysql_query("select * from hospital where area='Chunabhatti'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Guru Tegh Bahadur Nagar':
        
        $result=mysql_query("select * from hospital where area='Guru Tegh Bahadur Nagar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mahim':
        
        $result=mysql_query("select * from hospital where area='Mahim'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Sion':
        
        $result=mysql_query("select * from hospital where area='Sion'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Dadar East':
        
        $result=mysql_query("select * from hospital where area='Dadar East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Matunga':
        
        $result=mysql_query("select * from hospital where area='Matunga'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Byculla':
        
        $result=mysql_query("select * from hospital where area='Byculla'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Wadala':
        
        $result=mysql_query("select * from hospital where area='Wadala'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Lalbaug':
        
        $result=mysql_query("select * from hospital where area='Lalbaug'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Trombay':
        
        $result=mysql_query("select * from hospital where area='Trombay'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Chinchpokli':
        
        $result=mysql_query("select * from hospital where area='Chinchpokli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Sewri':
        
        $result=mysql_query("select * from hospital where area='Sewri'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Charni Road':
        
        $result=mysql_query("select * from hospital where area='Charni Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Grant Road':
        
        $result=mysql_query("select * from hospital where area='Grant Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Worli':
        
        $result=mysql_query("select * from hospital where area='Worli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Kemps Corner':
        
        $result=mysql_query("select * from hospital where area='Kemps Corner'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Colaba':
        
        $result=mysql_query("select * from hospital where area='Colaba'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Girgaon':
        
        $result=mysql_query("select * from hospital where area='Girgaon'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Parel':
        
        $result=mysql_query("select * from hospital where area='Parel'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mazgaon':
        
        $result=mysql_query("select * from hospital where area='Mazgaon'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mumbai Central':
        
        $result=mysql_query("select * from hospital where area='Mumbai Central'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Tardeo':
        
        $result=mysql_query("select * from hospital where area='Tardeo'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Churchgate':
        
        $result=mysql_query("select * from hospital where area='Churchgate'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Prabhadevi':
        
        $result=mysql_query("select * from hospital where area='Prabhadevi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Fort':
        
        $result=mysql_query("select * from hospital where area='Fort'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Masjid Bunder':
        
        $result=mysql_query("select * from hospital where area='Masjid Bunder'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Nariman Point':
        
        $result=mysql_query("select * from hospital where area='Nariman Point'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Cuffe Parade':
        
        $result=mysql_query("select * from hospital where area='Cuffe Parade'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Malabar Hill':
        
        $result=mysql_query("select * from hospital where area='Malabar Hill'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kalbadevi':
        
        $result=mysql_query("select * from hospital where area='Kalbadevi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Peddar Road':
        
        $result=mysql_query("select * from hospital where area='Peddar Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Peddar Road':
        
        $result=mysql_query("select * from hospital where area='Peddar Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Marine Lines':
        
        $result=mysql_query("select * from hospital where area='Marine Lines'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Sandhurst Road':
        
        $result=mysql_query("select * from hospital where area='Sandhurst Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Lower Parel':
        
        $result=mysql_query("select * from hospital where area='Lower Parel'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Walkeshwar':
        
        $result=mysql_query("select * from hospital where area='Walkeshwar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mahalaxmi':
        
        $result=mysql_query("select * from hospital where area='Mahalaxmi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'August Kranti Marg':
        
        $result=mysql_query("select * from hospital where area='August Kranti Marg'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Bhuleshwar':
        
        $result=mysql_query("select * from hospital where area='Bhuleshwar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Chhatrapati Shivaji Terminus (VT)':
        
        $result=mysql_query("select * from hospital where area='Chhatrapati Shivaji Terminus (VT)'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Cumballa Hill':
        
        $result=mysql_query("select * from hospital where area='Cumballa Hill'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Warden Road':
        
        $result=mysql_query("select * from hospital where area='Warden Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Breach Candy':
        
        $result=mysql_query("select * from hospital where area='Breach Candy'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;


case 'Crawford Market':
        
        $result=mysql_query("select * from hospital where area='Crawford Market'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Gowalia Tank':
        
        $result=mysql_query("select * from hospital where area='Gowalia Tank'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Mohammed Ali Road':
        
        $result=mysql_query("select * from hospital where area='Mohammed Ali Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;  
    
case 'Marine Drive':
        
        $result=mysql_query("select * from hospital where area='Marine Drive'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;
    
case 'Napean Sea Road':
        
        $result=mysql_query("select * from hospital where area='Napean Sea Road'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Vashi':
        
        $result=mysql_query("select * from hospital where area='Vashi'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Panvel':
        
        $result=mysql_query("select * from hospital where area='Panvel'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Nerul':
        
        $result=mysql_query("select * from hospital where area='Nerul'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'New Panvel':
        
        $result=mysql_query("select * from hospital where area='New Panvel'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kopar Khairane':
        
        $result=mysql_query("select * from hospital where area='Kopar Khairane'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Airoli':
        
        $result=mysql_query("select * from hospital where area='Airoli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kharghar':
        
        $result=mysql_query("select * from hospital where area='Kharghar'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Nerul East':
        
        $result=mysql_query("select * from hospital where area='Nerul East'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'CBD Belapur':
        
        $result=mysql_query("select * from hospital where area='CBD Belapur'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Kalamboli':
        
        $result=mysql_query("select * from hospital where area='Kalamboli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Nerul West':
        
        $result=mysql_query("select * from hospital where area='Nerul West'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Uran':
        
        $result=mysql_query("select * from hospital where area='Uran'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Sanpada':
        
        $result=mysql_query("select * from hospital where area='Sanpada'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Ghansoli':
        
        $result=mysql_query("select * from hospital where area='Ghansoli'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Rabale':
        
        $result=mysql_query("select * from hospital where area='Rabale'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

case 'Turbhe':
        
        $result=mysql_query("select * from hospital where area='Turbhe'   order by id DESC    ") or die(mysql_error());
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
                     $area=$row['area'];
            
   echo "<table width='800' height='225' border='0'>
     <tr>
     <td height ='50' colspan='3'> <p class='text-info'><a href='hospital.php?id=$id' ><h2>$name</h2></a></p></td>
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

    break;

  
    }
  ?>



</div>
      <div class="span2"></div>
   </div>
</div>

 <?php include('footer.php');?>
