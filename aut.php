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
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>
<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});
</script>



 


</head>
<body class="metro">








<?php include('header.html');?>




 <div class="">
        <div style="background: url(images/b2.jpg) top left no-repeat; background-size: cover; height: 550px;">
            <div class="container" style="padding: 85px 150px">
                <h1 class="fg-cobalt">Find Hospital</h1>
                <h2 class="fg-white">
                    
                </h2>
<br>


                <div id="searchContainer">
    <form align="centre" method="GET" action="search_result.php">
        <input id="field" name="search_name" type="text" style="width: 300px;" placeholder="Search Hospital .." /> &nbsp; 
       
         <button type="submit" class="primary" name="search_submit" >Go &nbsp;<i class="icon-search "></i></button></td>
    </form>

   <div class="fg-white">
    _______________ OR _______________
                    
                </div>
<p>

    <form autocomplete="off" method="GET" action="dummy.php">

    
    <input name="tag" type="text" placeholder="Area" id="tag" size="20"/>

   <select name="classification"  size="1">
                    <option value="">Classification</option>         

                

          <option value="government">Government</option>
          <option value="private">Private</option>
          <option value="trust">Charitable Trust</option>
                    <option value="Corporate">Corporate</option>

          
        </select> 
     <select name="categories" size="1">
                <option value="">Category</option>         
         <option value="general">General Hospital</option>
          <option value="multispeciality">Multispeciality Hospital</option>
          <option value="maternity">Maternity Hospital</option>
                    <option value="nursinghome">Nursing Home</option>
            <option value="superspeciality">superspeciality Hospital</option>
            <option value="polyclinic">polyclinic</option>
            <option value="ortho">Orthopaedic Hospital</option>
            <option value="ent">ENT Hospital</option>
            <option value="eye">EYE Hospital</option>
            <option value="children">Children Hospital</option>
            <option value="diagnostic">Diagnostic Centre</option>
            <option value="trauma">Trauma Center </option>
           

                 
          
        </select>


     <!-- <input type="submit" value="Go" name="sortform" /> -->
      <button type="submit" class="primary" >Go</button>
  </form>                                       
.

 <div class="fg-white">
    _______________ Browse By: _______________
    <br><p>
 







     <div class="fg-white">  </div>

 <a href="location.php"><button class="shortcut primary">
    <i class="icon-yelp "></i>
    Nearest
 </button></a>

 <a href="specialities.php"><button class="shortcut primary">
    <i class="icon-yelp "></i>
    Specialities 
</button></a>


<a href="area.php"><button class="shortcut primary">
    <i class="icon-yelp "></i>
    Area
</button></a>



 <a href="category.php"><button class="shortcut primary">
    <i class="icon-yelp "></i>
    Categories
 </button></a>

 <a href="classification.php"><button class="shortcut primary">
    <i class="icon-yelp "></i> classification
 </button></a>

</form>

                </div>


</div>






            </div>
        </div>













								
.

</body>
</html>