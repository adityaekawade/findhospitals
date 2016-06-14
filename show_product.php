<!doctype html>
<html lang="en-US">
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





</style>


</head>



<body>
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









<nav class="navigation-bar blues">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="#"><strong> Healthcare Options ></strong></a>
           
        </div>
 

        <a class="element brand" href="#"><span class="icon-printer"> </span> &nbsp;Find Hospital </a>
        <span class="element-divider"></span>
 
        
    </nav>
</nav>        

      <div class="container">
      
      </div>
    </nav>
<p>



</div>



<div class="grid">

  <div class="row">


<div class="span2"><p> <p><br><p><p><p><p> <p><br><p><p><p>
  
</div>
    <div class="span8">
  

    <p>
    <p>
   
    <a href=""> <h3> </h3></a>
   
   </p>
<?php
    session_start();
   
  ?>
   

  
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


$area=$row['area'];

          echo "
          <div class = 'row'>

          <hr>

          <div class = 'span4'>
          <table width='850' height='225' border='0'>
            <tr>
             <td width='500'>

          <p><p><br>
          <h1><span style='color: #0066CC;'>$name</span></h1>
          <hr>
          <p>
          
  <span class='icon-phone'></span> &nbsp;  Tel:   $phone <p>
           <span class='icon-location'> </span> &nbsp;   Address:   $address <p>
           <d class ='georgia'>   <span class='icon-link'> </span> &nbsp; Website:  <a href='$website' >$website</a><p> 
           <span class='icon-mail'> </span> &nbsp; email:  $email <p>
            <span class='icon-location-2'> </span> &nbsp;<a href='area.php'>Area: </a> $area 
           </td>
                        <td width='350' ><p><p><a href='show_product.php?id=$id' ><img src='$path' class='polaroid bd-white shadow' width='200' height='250'/></a></td>
     </tr>
     </table>




           <hr>
           <hr>

           
         
          <a href= 'categories.php'> categories:</a>   $categories <p>
                    <a href = 'classification.php' >classification: </a>  $classification<p>
                              <d class ='georgia'>    speciality: <hr></d>
                                                <table width='800' >
                                                <tr>
                                                             <td width='700'>
                                                                                           <hr>



                        <span class='icon-info'></span> Info :<br>   $description
                          </td>


                          </tr>
                          </table>






          <i class='icon-white icon-envelope'></i>

        
          </div>

          <div class = 'span4'></div>















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













</body>




</html>