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

    <title>Specialities result</title>

    <style>
    </style>

</head>
<body class="metro">    
<table width="1095" height="82" >
 
  <tr>
    <td width="80" height="50">&nbsp;</td>
    <td><img src="logo4.png" alt="logo" /></td>
    <td>&nbsp;</td>
    <td><nav class="horizontal-menu compact" align="right">

    <ul>
        <li><a href="#">Biomedical</a></li>
        <li><a href="#">Healthcare Options</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
</nav>
</td>
  </tr>
</table>









<nav class="navigation-bar blues ">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="#"><strong> Healthcare Options ></strong></a>
           
        </div>
 

        <a class="element brand" href="#"><span class="icon-printer"> </span> &nbsp;Find Hospital </a>
        <span class="element-divider"></span>
 <div class="element input-element">
            <form>
                <div class="input-control text">
                    <input type="text" style="width: 300px;" placeholder="Search hospital...">
                    <button class="btn-search"></button>
                </div>
            </form>
        </div>
        
    </nav>
</nav>       


<div class="grid">
    <div class="row">
      <div class="span2"></div>
      <div class="span8">
        <nav class="horizontal-menu compact">
  <ul>
        <li><a href="#"><span style='color: #0066CC;'>Browse by :</span></a></li>
        <span class="element-divider"></span>

        <li><a href="#">Nearest</a></li>
        <li><a href="#">Area</a></li>
        <li><a href="#">Specialities</a></li>
                <li><a href="#">Classification</a></li>

        

    </ul>
</nav>
      </div>
<div class="span2"></div>
</div>
</div>      



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


case 'surgery':
    

        
       
        
        $result=mysql_query("select * from hospital where Surgery='surgery'   order by id DESC LIMIT 0 ,4") or die(mysql_error());
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

case 'Accident':
    

        
       
        
        $result=mysql_query("select * from hospital where Accident='Accident'   order by id DESC  ") or die(mysql_error());
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
case 'Cancer':
    

        
       
        
        $result=mysql_query("select * from hospital where Cancer='Cancer'   order by id DESC  ") or die(mysql_error());
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





case 'Cardiology':
    

        
       
        
        $result=mysql_query("select * from hospital where Cardiology='Cardiology'   order by id DESC  ") or die(mysql_error());
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




 case 'Casualty':
    

        
       
        
        $result=mysql_query("select * from hospital where Casualty='Casualty'   order by id DESC  ") or die(mysql_error());
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
    




 case 'Cathlab':
    

        
       
        
        $result=mysql_query("select * from hospital where Cathlab='Cathlab'   order by id DESC  ") or die(mysql_error());
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
    



  case 'Cosmetic':
    

        
       
        
        $result=mysql_query("select * from hospital where Cosmetic='Cosmetic'   order by id DESC  ") or die(mysql_error());
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
    




 case 'Dental':
    

        
       
        
        $result=mysql_query("select * from hospital where Dental='Dental'   order by id DESC  ") or die(mysql_error());
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
    









  case 'Dialysis':
    

        
       
        
        $result=mysql_query("select * from hospital where Dialysis='Dialysis'   order by id DESC  ") or die(mysql_error());
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
    






   case 'ent':
    

        
       
        
        $result=mysql_query("select * from hospital where ent='ent'   order by id DESC  ") or die(mysql_error());
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
    







  case 'eye':
    

        
       
        
        $result=mysql_query("select * from hospital where eye='eye'   order by id DESC  ") or die(mysql_error());
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
    









 case 'HDU':
    

        
       
        
        $result=mysql_query("select * from hospital where HDU='HDU'   order by id DESC  ") or die(mysql_error());
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











 case 'HIV':
    

        
       
        
        $result=mysql_query("select * from hospital where HIV='HIV'   order by id DESC  ") or die(mysql_error());
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
    












 case 'iccu':
    

        
       
        
        $result=mysql_query("select * from hospital where iccu='iccu'   order by id DESC  ") or die(mysql_error());
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






 case 'ICU':
    

        
       
        
        $result=mysql_query("select * from hospital where ICU='ICU'   order by id DESC  ") or die(mysql_error());
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








 case 'laparoscopic':
    

        
       
        
        $result=mysql_query("select * from hospital where laparoscopic='laparoscopic'   order by id DESC  ") or die(mysql_error());
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



















 case 'maternity':
    

        
       
        
        $result=mysql_query("select * from hospital where maternity='maternity'   order by id DESC  ") or die(mysql_error());
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
















 case 'MICU':
    

        
       
        
        $result=mysql_query("select * from hospital where MICU='MICU'   order by id DESC  ") or die(mysql_error());
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























 case 'Neurology':
    

        
       
        
        $result=mysql_query("select * from hospital where Neurology='Neurology'   order by id DESC  ") or die(mysql_error());
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























 case 'nicu':
    

        
       
        
        $result=mysql_query("select * from hospital where nicu='nicu'   order by id DESC  ") or die(mysql_error());
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





























 case 'Obstetrics':
    

        
       
        
        $result=mysql_query("select * from hospital where Obstetrics='Obstetrics'   order by id DESC  ") or die(mysql_error());
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

























 case 'Onchology':
    

        
       
        
        $result=mysql_query("select * from hospital where Onchology='Oncology'   order by id DESC  ") or die(mysql_error());
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





























 case 'Orthopedic':
    

        
       
        
        $result=mysql_query("select * from hospital where Orthopedic='Orthopedic'   order by id DESC  ") or die(mysql_error());
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







































 case 'Paediatric':
    

        
       
        
        $result=mysql_query("select * from hospital where Paediatric='Paediatric'   order by id DESC  ") or die(mysql_error());
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



















 case 'Pathalogy':
    

        
       
        
        $result=mysql_query("select * from hospital where Pathalogy='Pathalogy'   order by id DESC  ") or die(mysql_error());
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







 case 'Physiotherapy':
    

        
       
        
        $result=mysql_query("select * from hospital where Physiotherapy='Physiotherapy'   order by id DESC  ") or die(mysql_error());
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









 case 'Psyachiatric':
    

        
       
        
        $result=mysql_query("select * from hospital where Psyachiatric='Psyachiatric'   order by id DESC  ") or die(mysql_error());
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










 case 'Radiology':
    

        
       
        
        $result=mysql_query("select * from hospital where Radiology='Radiology'   order by id DESC  ") or die(mysql_error());
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










 case 'SICU':
    

        
       
        
        $result=mysql_query("select * from hospital where SICU='SICU'   order by id DESC  ") or die(mysql_error());
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









 case 'skin':
    

        
       
        
        $result=mysql_query("select * from hospital where skin='skin'   order by id DESC  ") or die(mysql_error());
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







 case 'Endoscopy':
    

        
       
        
        $result=mysql_query("select * from hospital where Endoscopy='Endoscopy'   order by id DESC ") or die(mysql_error());
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








 case 'Urology':
    

        
       
        
        $result=mysql_query("select * from hospital where Urology='Urology'   order by id DESC  ") or die(mysql_error());
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
