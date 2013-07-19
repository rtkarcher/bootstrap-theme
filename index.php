<?php include('header.php') ?>
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    });
  });
</script>
<div class="container">
	<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://rainerkarcher.com/bootstrap/img/uploads/work/phycolab_1200x480.jpg" alt="" />
      <div class="carousel-caption">
	 <h4>Phycology Laboratory</h4>
	 <p>University of Alabama<br />
	 <a href="#" target="_blank">http://phycolab.ua.edu</a></p>
      </div>
    </div>
    <div class="item">
      <img src="http://rainerkarcher.com/bootstrap/img/uploads/work/theatre_1200x480.jpg" alt="" />
      <div class="carousel-caption">
	 <h4>Department of Theatre & Dance</h4>
	 <p>University of Alabama<br />
	 <a href="http://www.theatre.ua.edu" target="_blank">http://www.theatre.ua.edu</a></p>
      </div>
    </div>
    <div class="item">
      <img src="http://rainerkarcher.com/bootstrap/img/uploads/work/mint_1200x480.jpg" alt="" />
      <div class="carousel-caption">
	 <h4>Center for Materials for Information Technology</h4>
	 <p>University of Alabama<br />
	 <a href="http://www.mint.ua.edu" target="_blank">http://www.mint.ua.edu</a></p>
      </div>
    </div>
    <div class="item">
      <img src="http://rainerkarcher.com/bootstrap/img/uploads/work/etech_dashboard_1200x480.jpg" alt="" />
      <div class="carousel-caption">
	 <h4>Office of Educational Technology WordPress Plugin</h4>
	 <p>University of Alabama<br />
	 GitHub Project: <a href="http://www.theatre.ua.edu" target="_blank">https://github.com/rtkarcher/etech-wordpress-dashboard-widget</a></p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
</div> <!-- End div.container -->

<br /><br /><br /><br />
    <script src="/bootstrap/js/bootstrap.js"></script>
<?php include 'footer.php'; ?>
  </body>
</html>
