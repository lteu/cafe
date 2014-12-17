<?php


?>


<!DOCTYPE HTML>
<html>
<head>

  <title>Caffe</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='Description' content='caffe kaccino' />
  <meta name="author" content="liu tong">
  <link rel="shortcut icon" href="favicon.png">
  <!-- Styles -->
  <link href="public/css/bootstrap.css" rel="stylesheet">
  <link href="public/css/style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png">
  <!-- JQuery -->
  <script type="text/javascript" src="./public/js/lib/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="./public/js/lib/jquery.cookie.js"></script>
  <script type="text/javascript" src="./public/js/lib/bootstrap.min.js"></script>


  <style>
  #headimg{
    height: 130px;
  }

  .nav > li {
    display: inline-block;
  }
  .nav > li + li {
    margin-left: 6px;
  }
  .nav  li {
    font-size: 15px;
  }

  </style>
</head>

<body >   
  <div class='container'>
    <div class="head clearfix">

      <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='public/img/logo.png' /></a></h3>

      <h1 class='text-center'>￼点点滴滴 净化心灵 卡奇诺咖 </h1>
      <ul class="nav">
        <li><a href=".">主页</a></li>
        <li><a href="about">关于卡奇诺</a></li>
        <li><a href="products">产品类型</a></li>
        <li><a href="factory">我们的工厂</a></li>
        <li><a href="talk">咖啡与健康</a></li>
        <li><a href="contact">联系我们</a></li>
      </ul>
    </div>
    <div class="content ">
      <?php echo $content; ?>
  </div>


<div id="footer">
  <div class="container">
    <div class="text-muted pull-left">
      Copyright 2014 Tutti i diritti riservati | P.IVA 03384021204 | 
    <br/>
      Kaccino s.r.l.s - Via Ferrarese 209/3, 40128 Bologna
￼￼￼￼￼</div>
  </div>
</div>


<script src="js/load.js"></script> 


<script>
</script>

</body>
</html>