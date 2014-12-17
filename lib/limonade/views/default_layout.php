<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Eating good is a habbit, spizza.ti</title>
	<link rel="stylesheet" href="<?php echo url_for('/_lim_css/screen.css');?>" type="text/css" media="screen">
        <script type="text/javascript" src="./public/js/lib/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">

         x = 5;
        var tm = setInterval(function countdown(){

            x--;

            if(x <= 0)
            window.document.location.href='http://www.spizza.it';
        },1000);
        
        
    </script>
    <style>
        .content{
            font-family: Tahoma,Arial,sans-serif;
            margin: auto;
            margin-top: 5em;
            width: 60em;
        }
        .opps{
            margin-top: 2em;
        }
        .notice{
            margin-top: 4em;
            margin-bottom: 10em;

        }
    </style>
</head>
<body>
    <div class="content">
  <div id="header">
    <h1><img src ="img/logo.png" alt="spizza.it"/></h1>
  </div>
  
  <div id="content">
    <?php echo error_notices_render(); ?>
    <div id="main">
        <h2 class="opps">Opps! This&apos;s not a right url!</h2>
        <h2 class="notice">Click <a href="http://www.spizza.it">here</a> to return home, or turn back automatically after 5 sec</h2>
      <hr class="space">
    </div>
  </div>
</div>
</body>
</html>
