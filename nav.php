<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rainer Karcher</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
	<script src="/bootstrap/js/jquery-1.10.2.min.js"></script>
	<link rel="icon" type="image/ico" href="http://rainerkarcher.com/bootstrap/img/leaf_wormhole.png"/>
<!--	<link rel="icon" type="image/ico" href="http://rainerkarcher.com/sandbox/icons/images/panda_16x16.png"/> -->
        <link rel="stylesheet" href="css/social_network_icons.css">
        <link rel="stylesheet" href="css/amazonian.css">
	<link rel="stylesheet" href="css/jumbotron_green.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
    	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--	<link rel="stylesheet" href="http://rainerkarcher.com/bootstrap/css/font-awesome.min.css"> -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
<!--    <link rel="stylesheet" href="css/bootstrap.css"> -->
<!--    <link rel="stylesheet" href="css/jumbotron_orange.css"> -->
<!--    <link rel="stylesheet" href="css/cockatoo.css"> -->
<!--    <link rel="stylesheet" href="css/pomegranate.css"> -->

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top"> <!-- Begin Top Navigation -->
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"></a>
          <div class="nav-collapse collapse">
	    <a href="#modal" role="button" class="btn btn-success btn-small" data-toggle="modal" style="color:#fff; float:right; display:block;"><i class="icon-white icon-envelope"></i> Contact Me
	    </a> <!-- Contact Form Modal Button -->
	    <div id="social-network-icons" style="float:left;">
	      <a href="http://plus.google.com/103939828120422195932/posts" target="_blank"><img src="http://rainerkarcher.com/sandbox/icons/images/softsquare_32x32_google_plus.png" alt="gplus" class="opacity sn_icon" /></a>
	      <a href="http://github.com/rtkarcher/" target="_blank"><img src="http://rainerkarcher.com/sandbox/icons/images/softsquare_32x32_github_black_rev.png" alt="github" class="opacity_g sn_icon" onmouseover="this.src='http://rainerkarcher.com/sandbox/icons/images/softsquare_32x32_github_blue_rev.png'" onmouseout="this.src='http://rainerkarcher.com/sandbox/icons/images/softsquare_32x32_github_black_rev.png'" /></a>
  	      <a href="http://linkedin.com/in/rtkarcher/" target="_blank"><img src="http://rainerkarcher.com/sandbox/icons/images/softsquare_32x32_linkedin.png" alt="linkedin" class="opacity sn_icon" /></a>
	  </div> <!-- End div.social-network-icons -->

            <ul class="nav" style="float:right;"> <!-- Begin Top Navigation Links -->
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="http://zerply.com/quizas" target="_blank">Resume</a></li>
	      <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Projects<b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="portfolio.php">Portfolio Overview</a></li>
                    <li class="nav-header">Past Work</li>
                    <li><a href="projects.php">Current Projects</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Current Projects</li>
                    <li><a href="#">Under Construction</a></li>
                  </ul>
               </li>
	      <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Language<b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a href="index.php"><img src="http://rainerkarcher.com/sandbox/icons/images/usa_32x32.png"></i>  English / 英语</a></li>
                    <li><a href="zh/index_zh.php"><img src="http://rainerkarcher.com/sandbox/icons/images/china_32x32.png"></i>  Chinese / 中文</a></li>
                  </ul>
               </li>
	       <li>
		<form id="custom-search-form" class="form-search form-horizontal">
	          <div class="input-append span3">
	            <input type="text" class="search-query" placeholder="Search">
	            <button type="submit" class="btn"><i class="icon-search"></i></button>
	          </div>
		</form>
	      </li>
            </ul> <!-- End Top Navigation Links -->
          </div><!-- End div.nav-collapse .collapse -->
        </div> <!-- End div.container -->
      </div> <!-- End div.navbar-inner -->
    </div> <!-- End Top Navigation (div.navbar .navbar-inverse .navbar-fixed-top) -->

    <header class="jumbotron subhead" id="overview"> <!-- Begin Jumbotron Subhead -->
      <div class="container">



	<a href="index.php" style="color:#fff; text-decoration:none;">
	  <h1>Rainer Karcher</h1>
	  <p class="lead">Web Developer & Linux Systems Administrator</p>
	</a>


      </div>
    </header> <!-- End Jumbotron Subhead -->

    <div id="modal" class="modal hide"> <!-- Begin Contact Form Modal Window Actions -->
      <div class="modal-header" style="text-align:center;">  
      </div>      
      <div class="modal-body">  


    <form>
    <fieldset>
    <legend>What's on your mind?</legend>
    <label>Label name</label>
    <input type="text" placeholder="Type something…">
    <span class="help-block">Example block-level help text here.</span>
    <label class="checkbox">
    <input type="checkbox"> Check me out
    </label>
    <button type="submit" class="btn">Submit</button>
    </fieldset>
    </form>



<!--
	<form class="form-horizontal email" action="email.php" method="post"> <!-- Begin Contact Form --> 
<!--
	  <div class="control-group">
	    <label class="control-label" for="inputName">Name :</label>
	    <div class="controls">
	      <input type="text" placeholder="Your name" name="name">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputEmail">Email :</label>
	    <div class="controls">
	      <input type="text" id="inputEmail" placeholder="Your email address" name="email">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputSubject">Subject :</label>
	    <div class="controls">
	      <input type="text" placeholder="Subject" name="subject">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputMessage">Message :</label>
	    <div class="controls">
	      <textarea rows="8" name="message"></textarea>
	    </div>
	  </div>

	 <script type="text/javascript">
	     var RecaptchaOptions = {
	        theme : 'custom',
	        custom_theme_widget: 'recaptcha_widget'
	     };
	 </script>               
         <script type="text/javascript">
             var RecaptchaOptions = {
                 theme : 'custom',
                 custom_theme_widget: 'recaptcha_widget'
             };
	 </script>
	 <div id="recaptcha_widget" style="display:none">

                        <div class="control-group">
                            <label class="control-label">reCAPTCHA</label>
                            <div class="controls">
                                <a id="recaptcha_image" href="#" class="thumbnail"></a>
                                <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
                            </div>
                        </div>

                           <div class="control-group">
                               <label class="recaptcha_only_if_image control-label">Enter the words above:</label>
                              <label class="recaptcha_only_if_audio control-label">Enter the numbers you hear:</label>

                              <div class="controls">
                                  <div class="input-append">
                                      <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input-recaptcha" />
                                      <a class="btn" href="javascript:Recaptcha.reload()"><i class="icon-refresh"></i></a>
                                      <a class="btn recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')"><i title="Get an audio CAPTCHA" class="icon-headphones"></i></a>
                                      <a class="btn recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')"><i title="Get an image CAPTCHA" class="icon-picture"></i></a>
                                    <a class="btn" href="javascript:Recaptcha.showhelp()"><i class="icon-question-sign"></i></a>
                                  </div>
                              </div>
                        </div>

                    </div>

                    <script type="text/javascript"
                       src="<?php echo $recaptcha_url; ?>">
                    </script>

                    <noscript>
                        <iframe src="<?php echo $recaptcha_noscript_url; ?>"
                           height="300" width="500" frameborder="0"></iframe><br>
                        <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                        </textarea>
                        <input type="hidden" name="recaptcha_response_field"
                           value="manual_challenge">
                      </noscript>

<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>

<noscript>
    <iframe src="<?php echo $recaptcha_noscript_url; ?>"
       height="300" width="500" frameborder="0"></iframe><br>
    <textarea name="recaptcha_challenge_field" rows="3" cols="40">
    </textarea>
    <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
</noscript>


  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Send  <i class="icon-white icon-chevron-right"></i></button>
    </div>
  </div>
  <p style="float:right;"><small>Credit to <a href="http://kippt.com/jasondavis" target="_blank">Jason Davis</a> for <a href="http://kippt.com/jasondavis/twitter-bootstrap/clips/10194153" target="_blank">Bootstrap Captcha</a></small></p>
</form>

-->

    </div>  
</div>

    <div class="container">
      <h1>About</h1>
      <p>I am a Linux systems administrator and full-stack web developer based in Tuscaloosa, AL, and I create professional and responsive websites and web applications using the latest in W3C and SEO web standards.</p>
      <p>My weapons of choice in website development are WordPress and Bootstrap (my development capabilities and resume can be found in <a href="http://zerply.com/quizas/work">greater detail here</a>) and I'm currently learning Ruby and dusting off Python to bolster my skills as an application developer.</p>
      <p>When I'm not writing code or pushing pixels, I enjoy playing drums, trying out new Linux distros, studying Chinese literature, and reading up on the latest research in neuroscience and biomedical engineering<!--, and constructing multi-story rabbit condominiums for my pet rabbit, Maddie.--></p>
      <h5><a href="http://rainerkarcher.com/bootstrap/img/uploads/Resume_2013.pdf" target="_blank"><img src="http://rainerkarcher.com/bootstrap/img/uploads/pdf.png">Resume (Print-friendly PDF)</a></h5>
    </div> <!-- End div.container -->

<br /><br /><br /><br />


<style>
	footer {
		background-color:#9d261d;
		border-top:1px solid #872119;
		color:#ddb3b0;
		text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
		margin-top:60px;
		padding-top:45px;
		padding-bottom:60px;
		*zoom:1;
	}
	footer .footer {
		margin-top:60px;
		height:90px;
		padding:40px 0 40px;
		padding-left:20px;
		padding-right:20px;
	}
	footer a {
		color:#ffffff;
		text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
	}
	footer a:hover {color:#ffffff;}
	footer ul {line-height:25px;}
</style>
<footer class="footer hidden-print">
  <div class="container text-center">
        <div class="row">
          <div class="span3">
            <h3><span class="icon-white icon-envelope"></span> Contact</h3>
            <ul class="icons unstyled">
              <li><i class="icon-link"></i> Blog: <a class="targetblank" href="#">Coming soon!</a></li>
              <li><i class="icon-google-plus"></i> Google+: <a class="targetblank" href="http://gplus.to/rkarcher">Rainer Karcher</a></li>
              <li><i class="icon-github"></i> Github: <a class="targetblank" href="http://github.com/rtkarcher">Projects</a></li>
              <li><i class="icon-linkedin"></i> LinkedIn: <a class="targetblank" href="http://linkedin.com/li/rtkarcher">Profile</a></li>
            </ul>
          </div>
        </div>
  </div>
</footer>


<!--
<footer class="footer">
    <div class="container">
        <div class="row">
          <div class="span3">
            <h3><span class="icon-white icon-envelope"></span> Contact</h3>
            <ul class="icons">
              <li><i class="icon_link"></i> Blog: <a class="targetblank" href="#">Coming soon!</a></li>
              <li><i class="icon_google-plus"></i> Google+: <a class="targetblank" href="http://gplus.to/rkarcher">Rainer Karcher</a></li>
              <li><i class="icon_github"></i> Github: <a class="targetblank" href="http://github.com/rtkarcher">Projects</a></li>
              <li><i class="icon_linkedin"></i> LinkedIn: <a class="targetblank" href="http://linkedin.com/li/rtkarcher">Profile</a></li>
            </ul>
          </div>
          </div>
        </div>
    </div>
</footer>
-->

    <script src="/bootstrap/js/bootstrap.js"></script>
 </body>
</html>
