<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CCA Interactive One | Advanced Slideshow</title>

<!--PUT JAVASCRIPT REFERENCE HERE-->
<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle2.js"></script>

<style type="text/css">
body {
	font-family: Arial Narrow, Arial, Helvetica, sans-serif;
	font-size: 16px;
	line-height: 1.5em;
	color: #000;
	margin: 0;
	background-color: white;
}
#container {
	width: 880px;
	margin: 0 auto;
	margin-top: 250px;
}
a {
	color: #666;
	text-decoration: none;
}
a:hover {
	color: #999;
}
a.nav {
	color: #666;
	text-decoration: none;
	font-size: 56px;
}
a.nav:hover {
	color: #fff;
}
h1 {
	font-size: 36px;
	line-height: 1.2em;
}
/*THIS IS A CSS TABLE WHICH CONTAINS THE SLIDESHOW*/
.table-container {
	display: table;
}
.table-nav {
	width: 40px;
	vertical-align: middle;
	display: table-cell;
	text-align: center;
	background-color: #999;
}
.table-cell-left {
	width: 400px;
	display: table-cell;
}
.table-cell-right {
	width: 360px;
	padding: 20px;
	background-color: #f5f5f5;
	display: table-cell;
	vertical-align: top;
}
</style>
</head>

<body>
<div id="container"> 
  <!--START CONTAINER-->
  
  <h1>Slideshow</h1>
  <div class="table-container"> 
    <!--START TABLE-->
    
    <div class="table-nav"><a class="nav" href="" id=prev>&lt;</a></div>
    <!--PREVIOUS NAVIGATION--> 
    
    <!--PUT SLIDESHOW HERE-->
    <div class="cycle-slideshow" 
    data-cycle-fx="scrollHorz"
    data-cycle-timeout=0
    data-cycle-slides="> div"
    data-cycle-prev="#prev"
    data-cycle-next="#next"
    >
      <?php include'slide-1.html'; ?>
      <?php include'slide-2.html'; ?>
      <?php include'slide-3.html'; ?>
      
    </div>
    <!--END SLIDESHOW-->
    
    <div class="table-nav"><a class="nav" href="" id=next>&gt;</a></div>
    <!--NEXT NAVIGATION--> 
    
  </div>
  <!--END TABLE--> 
  
</div>
<!--END CONTAINER-->

</body>
</html>