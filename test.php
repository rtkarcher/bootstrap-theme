<!DOCTYPE html>
<html>
<head>
<script src="/bootstrap/js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen">
</head>
<body>

<ul class="nav nav-pills">
  <li class="active"><a href="#">Regular link</a></li>
  <li class="dropdown" id="menu1">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
      Dropdown
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </li>
</ul>

<script>
    $('.dropdown-toggle').dropdown();
</script>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
