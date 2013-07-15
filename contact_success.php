<?php header('Refresh: 5;url=index.php'); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact Form Submission</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	<script src="/bootstrap/js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="css/amazonian.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
<!--    <link rel="stylesheet" href="css/bootstrap.css"> -->
    	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="http://addyosmani.github.io/jquery-ui-bootstrap/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jumbotron_fancy.css">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

  </head>
<!--
  <body style="background: url('http://rainerkarcher.com/sandbox/textures/escheresque/escheresque.png');">
-->
  <body style="background: url('http://rainerkarcher.com/sandbox/textures/arches/arches.png');">




<div id="modal" class="modal">  
    <div class="modal-header">  
        <h2 style="text-align:center;"><i class="icon-white icon-ok"></i>  Message Sent</h2>  
    </div>      
    <div class="modal-body">  
	<br />
        <p style="text-align:center;">Great Success!</p>  
	<br /><br /><br />
	<p style="text-align:center;"><small>Click <a href="contact.php">here</a> if you aren't taken back in  <span id="timer"></span></small></p>
	<br /><br />
    </div>  
</div>  


    </div> <!-- /container -->

   <script> /* Page Redirect Countdown Timer */
var count=7;

var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     //counter ended, do something here
     return;
  }

  //Do code for showing the number of seconds here
}

function timer()
{
  count=count-1;
  if (count <= 0)
  {
     clearInterval(counter);
     return;
  }

 document.getElementById("timer").innerHTML=count + " seconds"; // watch for spelling
}
   </script>

   <script src="/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
