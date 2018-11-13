
<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DELL Analytics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style1.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
<link rel="icon"  href="./images/logo1.png" />
 


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="./images/log3.png"></a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" >ABOUT</a></li>
         <li><a href="index.php">SERVICES</a></li>
         
        <li><a href="index.php">CONTACT</a></li>

        <li ><a href="analysis.php" >ANALYSIS</a></li>
        <li ><a href="dataselect.php">DATASETS</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br>
<center><h3 style="color: grey " >LOCATION WISE DATA AVAILABLE TO THE SYSTEM</h3> </center>
  

<!-- Container ( issue) -->

<br><br>
<div id="issue" class="container-fluid" style="padding-left: 10%;padding-right: 10%">
   <div class="text-center">
 
  
<br>
<div class="container" style="font-size: 20px">
  <div class="panel-group">
    

    <div class="panel panel-success">
      <div class="panel-heading">United States of America</div>
      <!-- <div class="panel-body">Panel Content</div> -->

    </div>
      <br>
    <div class="panel panel-info">
      <div class="panel-heading">India</div>
    </div>
<br>
    <div class="panel panel-warning">
      <div class="panel-heading">Australia</div>
    </div>
   <br>

    <div class="panel panel-success">
      <div class="panel-heading">United Arab Emirates</div>
    </div>
<br>
    <div class="panel panel-info">
      <div class="panel-heading">United Kingdom</div>
    </div>
<br>
    <div class="panel panel-warning">
      <div class="panel-heading">China</div>
    </div>
<br>
</div>

      
    

<!-- <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> Made By Swapnil</a></p>
</footer>
 -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
