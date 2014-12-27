<!DOCTYPE HTML>
<html>
<head>
  <title>Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="./public/css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href="./public/css/slider.css" rel="stylesheet" type="text/css"  media="all" />
  <link href="./public/css/bootstrapaa.css" rel="stylesheet" type="text/css"  media="all" />

  <script type="text/javascript" src="./public/js/lib/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="./public/js/lib/jquery.cookie.js"></script>
  <script type="text/javascript" src="./public/js/lib/bootstrap.min.js"></script>
  <script type="text/javascript" src="./public/js/lib/jquery.nivo.slider.js"></script>
  <script type="text/javascript" src="./public/js/lib/menu.js"></script> 

  <style>
  .navimg{
    width: 60px;
  }
  nav{
    margin: auto;
    width: 80%;
  }
  .nav > li {
    display: inline-block;
  }
  .nav > li + li {
    margin-left: 6px;
  }
  .nav  li {
    font-size: 20px;
  }
  .navbar-nav  {
    padding-top: 20px;
    float: right;
  }
  .navbar-header{
    padding-top: 10px;
    float: left;
  }

  .slider{
    margin: auto;
    width: 87%;
  }
  </style>

</head>
<body>

  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" target='_blank'><img class='navimg' src='public/img/logo.png' /></a>
      <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav">
        <li><a href=".">主页</a></li>
        <li><a href="about">关于卡奇诺</a></li>
        <li><a href="products">产品类型</a></li>
        <li><a href="factory">我们的工厂</a></li>
        <li><a href="talk">咖啡与健康</a></li>
        <li><a href="contact">联系我们</a></li>
      </ul>
    
    <!-- /.navbar-collapse -->
  </nav>
  <div class="clearfix" />
  

  <!------ Slider ------------>
  <div class="slider">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">                  
        <img src="./public/images/slider-2.jpg" data-thumb="images/slider-2.jpg" alt="" />
        <img src="./public/images/slider-3.jpg" data-thumb="images/slider-3.jpg" alt="" />
        <img src="./public/images/slider-4.jpg" data-thumb="images/slider-4.jpg" alt="" />
        <img src="./public/images/slider-1.jpg" data-thumb="images/slider-1.jpg" alt="" />
      </div>
    </div>
  </div>
  <!------End Slider ------------>

<?php echo $content; ?>
            
<!---End-content---->
<!---start-footer----> 
<div class="copy-right">
      <p>
      Kaccino s.r.l.s - Via Ferrarese 209/3, 40128 Bologna - P.IVA 03384021204  | 
          Copyright © 2014 Tutti i diritti riservati | 
      <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">Credits</a>
    </p>
</div>
<!---End-footer---->  


</body>

  <script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider();
  });
  </script>

</html>

