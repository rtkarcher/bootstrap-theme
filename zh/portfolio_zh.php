<?php include('header_zh.php') ?>
    <div class="container">
        <h1>对不起, 修建中!</h1>
	<br /><br />
    </div>
<style>
  .wrap {
    overflow: hidden;
    width: 1260px;
    margin: 10px auto -5px 5px;
  }
  
  .tint {
    overflow: hidden;
    float: left;
    background: blue;
    margin: 0 20px 20px 0;
    height:280px;
    width:400px;
/*    -moz-border-radius: 40%;
    border-radius: 40%;	*/
  }
  
  .t2 {
    background: red;
  }
  
  .t3 {
    background: green;
  }
  
  .t4 {
    background: purple;
  }
  
  .t5 {
    background: yellow;
  }
  
  .t6 {
    background: hotpink;
  }
  
  img.color {
    float: left;
    background: black;
    display: block;
    -moz-transition: opacity .3s linear;
    -webkit-transition: opacity .3s linear;
    -ms-transition: opacity .3s linear;
    -o-transition: opacity .3s linear;
    transition: opacity .3s linear;
  }

  img.color:hover {
    opacity: .5;
    cursor: pointer;
  }
</style>

      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280"> 
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script>
    $(function() {
      $('img.color').each(function(n) {
        n += 1;
        $(this).wrap('<figure class="tint t'+ n + '"></figure>');
      });
    });
  </script>

<!--
    </div>= --><!-- End div.container -->


<br /><br /><br /><br />
    <script src="/bootstrap/js/bootstrap.js"></script>
<?php include 'footer_zh.php'; ?>
  </body>
</html>
