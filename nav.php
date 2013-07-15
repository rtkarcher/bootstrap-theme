<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
	<script src="/bootstrap/js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen">
<!--        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    	<link rel="stylesheet" href="css/bootstrap-responsive.css"> -->


    <style>
	.nav {
	    overflow:visible; /*Changed from auto*/
	}

	.container {
	    width: 100%;
	    margin:auto;
	    background-image: -moz-linear-gradient(top, rgb(34, 34, 34), rgb(17, 17, 17));
	    display:inline-block; /*Added this to get your background color to get applied*/
	}
    </style>
    </head>
    <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
<!--          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
-->
	  <button type="button" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">BLAHBLAHBLAH</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
	      <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
               </li>
            </ul>
	    <form id="custom-search-form" class="form-search form-horizontal pull-right">
	       <div class="input-append span3">
	         <input type="text" class="search-query" placeholder="Search">
	         <button type="submit" class="btn"><i class="icon-search"></i></button>
	       </div>
	    </form>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<style>
    #custom-search-form {
        margin: 8px 0 0 0;
        padding: 0;
    }
 
    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }
</style>



<!--

<div class="dropdown">
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<li>
    <a tabindex="-1" href="#">Action1</a>
</li>
<li>
    <a tabindex="-1" href="#">Another action</a>
</li>
<li>
    <a tabindex="-1" href="#">Something else here</a>
</li>
<li class="divider"></li>
<li>
    <a tabindex="-1" href="#">Separated link</a>
</li>
</ul>
</div>

<div class="dropdown">
<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="display: block;">
<li>
    <a tabindex="-1" href="#">Action2</a>
</li>
<li>
    <a tabindex="-1" href="#">Another action</a>
</li>
<li>
    <a tabindex="-1" href="#">Something else here</a>
</li>
<li class="divider"></li>
<li>
    <a tabindex="-1" href="#">Separated link</a>
</li>
</ul>
</div>
-->
<!--<script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/main.js"></script> -->
<script src="/bootstrap/js/bootstrap.js"></script>
<!--<script type="text/javascript" src="js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="js/bootstrap-button.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script> -->
    </body>
</html>
