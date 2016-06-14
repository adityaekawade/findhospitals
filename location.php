
<!DOCTYPE html>
<html>



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









  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      var x = document.getElementById("demo");
      function getLocation()
      {
        if (navigator.geolocation)
        {
          navigator.geolocation.getCurrentPosition(bindPosition);
        }
        else {
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      function bindPosition(position) {
        $("input[name='latitude']").val(position.coords.latitude);
        $("input[name='longitude']").val(position.coords.longitude);
      }
    </script>
  </head>

<body class="metro">    

  <?php include('header.html');?>
  <?php include('header2.php');?>

  
  <body onload="getLocation()">




<p>
  <p>
    <br>
    <hr>

<div class="grid">
    <div class="row">
        <div class="span1"></div>
                <div class="span7">
<img src="location.jpg"  >

                </div>

        <div class="span7">
<h2>Finding nearest hospitals is just a click away</h2><hr>
<br>
<div class="span1"></div>

<div class ="span5">
  Click on the 'Distance' button below and see the list of the nearest hospitals within a radius of 5 kms. 
  <form id="form1" name="form1" method="post" action="loc_result.php">
      <p></p>
      <p>
        
        <input type='hidden' value='' name='latitude'/>
        <input type='hidden' value='' name='longitude'/>
     &nbsp; &nbsp;  &nbsp; &nbsp;     <input type="submit" name="submit" id="submit" value="Distance" />
      </p>
    </form>

</div>
        </div>

    </div>
</div>

 <?php include('footer.php');?>

  </body>
</html>