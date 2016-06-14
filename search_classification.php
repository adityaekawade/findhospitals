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

    <title>Classification result</title>

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

case 'Charitable Trust':

        $result=mysql_query("select * from hospital where classification='Charitable Trust'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
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
    
case 'Corporate':
       
        $result=mysql_query("select * from hospital where classification='Corporate'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
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
    
case 'Government':

        $result=mysql_query("select * from hospital where classification='Government'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
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
    
case 'Private':
      
        $result=mysql_query("select * from hospital where classification='Private'   order by id DESC LIMIT 0 ,3") or die(mysql_error());
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