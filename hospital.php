<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Biomedical web solutions">
    <meta name="description" content="biomedical web solutions by iambiomed">

    <link rel="icon" type="image/ico" href="http://www.iambiomed.com/solutions/favicon.ico"/>


     <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
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


    <title>Biomedical Solutions</title>

    <style>
        .container {
            width: 1040px;
        }
    </style>
</head>
<body class="metro">
     <header class="bg-dark" data-load="header.html"></header>
<?php include('header2.php');?>


      <div class="container">
      
      </div>
    </nav>
<p>



</div>



<div class="grid">

  <div class="row">


<div class="span2"><p> <p><br><p><p><p><p> <p><br><p><p><p>
 

</div>
    <div class="span10">
  

    <p>
    <p>
   
    <a href=""> <h3> </h3></a>
   
   </p>

   

  
        <?php
          $id=$_REQUEST['id'];
      //echo $id;
    require 'db1.php';
/*$connect=mysql_connect("mysql5.000webhost.com","a2583359_comp","*abc123");
    mysql_select_db("a2583359_comp");*/
      $result=mysql_query("select * from hospital where id=$id;");
      $count=mysql_num_rows($result);
      if($count!=0)
      {
        while($row=mysql_fetch_assoc($result))
        {
          $name=$row['name'];
           $address=$row['address'];
        $phone=$row['phone'];
        $website=$row['website'];
      
        $email=$row['email'];
        $description=$row['description'];

         $path=$row['image'];


          $classification=$row['classification'];
          $categories=$row['categories'];

         $Accident=$row['Accident'];
          $Cancer=$row['Cancer'];
          $Cardiology =$row['Cardiology'];
          $Casualty =$row['Casualty'];
          $Cathlab =$row['Cathlab'];
          $Cosmetic=$row['Cosmetic'];
          $Dental=$row['Dental'];
          $Dialysis=$row['Dialysis'];
          $ent=$row['ent'];
          $eye=$row['eye'];
          $Surgery=$row['Surgery'];
          $HDU=$row['HDU'];
          $HIV=$row['HIV'];
          $iccu=$row['iccu'];
          $ICU=$row['ICU'];
          $laparoscopic=$row['laparoscopic'];
          $maternity=$row['maternity'];
          $MICU=$row['MICU'];
          $Neurology=$row['Neurology'];
          $nicu=$row['nicu'];
          $Obstetrics=$row['Obstetrics'];
          $Onchology=$row['Onchology'];
          $Orthopedic=$row['Orthopedic'];



          $Paediatric=$row['Paediatric'];
          $Pathalogy=$row['Pathalogy'];
          $Physiotherapy=$row['Physiotherapy'];
          $Psyachiatric=$row['Psyachiatric'];
          $Radiology=$row['Radiology'];
          $SICU=$row['SICU'];
          $skin=$row['skin'];
          $Urology=$row['Urology'];
          $Endoscopy=$row['Endoscopy'];
          $Diabetology=$row['Diabetology'];


        



$area=$row['area'];

          echo "


          



























         

          <hr>

          
          
          <p><p><br>
          <h1><span style='color: #0066CC;'>$name</span></h1>
          <hr>
          <p>
          
  <span class='icon-phone'></span> &nbsp;  Tel:   $phone <p>
           <span class='icon-location'> </span> &nbsp;   Address:   $address <p>
           <d class ='georgia'>   <span class='icon-link'> </span> &nbsp; Website:  <a href='$website' >$website</a><p> 
           <span class='icon-mail'> </span> &nbsp; email:  $email <p>
            <span class='icon-location-2'> </span> &nbsp;<a href='area.php'>Area: </a> $area 
         
                        




         
           <hr>

           <p>

         
                    <a href = 'classification.php' >Classification: </a>  $classification<p>
                              <a href= 'category.php'> Categories:</a>   $categories <p>

                              <d class ='georgia'> <a href = 'specialities.php' >    Specialities:</a>

<a href='search_specialities.php?action=Accident'>$Accident</a> <a href='search_specialities.php?action=Cancer'> $Cancer</a> 
<a href='search_specialities.php?action=Cardiology'> $Cardiology</a> <a href='search_specialities.php?action=Casualty'> $Casualty </a> <a href='search_specialities.php?action=Cathlab'> $Cathlab </a> 
<a href='search_specialities.php?action=Cosmetic'> $Cosmetic</a> <a href='search_specialities.php?action=Dental'> $Dental</a>
<a href='search_specialities.php?action=Dialysis'> $Dialysis</a> <a href='search_specialities.php?action=ent'> $ent</a> <a href='search_specialities.php?action=eye'>$eye</a>
<a href='search_specialities.php?action=surgery'> $Surgery</a> <a href='search_specialities.php?action=HDU'> $HDU</a>
<a href='search_specialities.php?action=HIV'> $HIV</a> <a href='search_specialities.php?action=iccu'> $iccu</a> <a href='search_specialities.php?action=ICU'> $ICU</a>
<a href='search_specialities.php?action=laparoscopic'> $laparoscopic</a> <a href='search_specialities.php?action=maternity'> $maternity </a>
<a href='search_specialities.php?action=MICU'> $MICU </a> <a href='search_specialities.php?action=Neurology>' $Neurology</a> 
<a href='search_specialities.php?action=nicu'> $nicu</a>  <a href='search_specialities.php?action=Obstetrics'> $Obstetrics</a>
<a href='search_specialities.php?action=Onchology'> $Onchology </a> <a href='search_specialities.php?action=Orthopedic'> $Orthopedic</a>
<a href='search_specialities.php?action=Paediatric'> $Paediatric</a> <a href='search_specialities.php?action=Pathalogy'> $Pathalogy</a>
<a href='search_specialities.php?action=Physiotherapy'> $Physiotherapy</a> <a href='search_specialities.php?action=Psyachiatric'> $Psyachiatric</a>
<a href='search_specialities.php?action=Radiology'> $Radiology</a> <a href='search_specialities.php?action=SICU'> $SICU </a>
<a href='search_specialities.php?action=skin'> $skin</a> <a href= 'search_specialities.php?action=Urology'> $Urology</a>
<a href='search_specialities.php?action=Endoscopy'> $Endoscopy</a> <a href= 'search_specialities.php?action=Diabetology'> $Diabetology</a>








                            
                                            
                                                                                           <hr>



                        </span> &nbsp; <br>   $description
                          






          <i class='icon-white icon-envelope'></i>

            <p>
          <p>

        














         ";    
        }
      }
        echo "<br /><br /><br />";
       

    


    ?>

<p><div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'iambiomed'; // Required - Replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
<div class="container-fluid">
 <div class="row-fluid row">
  
    <div class="span2">

    </div>
  </div>
</div>

 </div>
  </div>



 <?php include('footer.php');?>







</body>




</html>