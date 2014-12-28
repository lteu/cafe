<!DOCTYPE HTML>
<html>
<head>

  <title><?php echo $title; ?></title>
  <meta name='Description' content=<?php echo $description; ?> />
  <meta name='Keywords' content=<?php echo $keywords; ?> />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="favicon.png">

  <link href="./public/css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link href="./public/css/slider.css" rel="stylesheet" type="text/css"  media="all" />
  <link href="./public/css/bootstrapino.css" rel="stylesheet" type="text/css"  media="all" />

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
  .nav-wrap{
    text-align:center;
    padding:15px 0px;
    background:url(./public/images/bg.png);
  }
  .content-wrap{
    margin-top: 30px;
  }
  </style>

</head>
<body>

  <div class="nav-wrap">
  <nav class="navbar navbar-default" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#" target='_blank'><img class='navimg' src='public/img/logo.png' /></a>
      <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav">
        <li><a class="lihome" href=".">主页</a></li>
        <li><a class="liabout" href="about">关于卡奇诺</a></li>
        <li><a class="liprod" href="products">产品类型</a></li>
        <li><a class="lifact" href="factory">我们的工厂</a></li>
        <li><a class="lihealth" href="talk">咖啡与健康</a></li>
        <li><a class="licontact" href="contact">联系我们</a></li>
      </ul>
    
    <!-- /.navbar-collapse -->
  </nav>
</div>
  <div class="clearfix" />
  


<div class="content-wrap">
<?php echo $content; ?>
</div>
            
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

