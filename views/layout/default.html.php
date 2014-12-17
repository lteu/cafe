<?php


?>


<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Caffe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
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
  </style>

</head>
<body>
  <div class="container-fluid">


    <!--******************** NAVBAR ********************-->
    
    <div class="row">
      <nav class="navbar col-lg-12 col-md-12 navbar-default" role="navigation">
        <div class="col-md-10 col-lg-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_principale">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/eat/"><img src="public/img/SPIZZA.png" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

        </div>
        <div class="collapse navbar-collapse" id="menu_principale">



          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">

              <form class="form-inline" role="form">
                <div class="form-group loginzone">
                  <label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <input type="email" class="lgncell form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <div class="form-group loginzone">
                  <label class="sr-only" for="exampleInputPassword2">Password</label>
                  <input type="password" class="lgnpwd form-control" id="exampleInputPassword2" placeholder="Password">
                </div>
                <span id="welcome"></span>
                <button type="submit" class="lgnbutt btn btn-default">OK</button>
              </form>


              <div class="col-md-12 registrati">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#login_register1"><i class="header-icon icon-torso"></i>Registrati Subito</a></div>
                <div class="col-md-6 col-sm-6  col-xs-6 text-right"><a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#login_register">Recupera Login</a></div>
              </div>


              <div class="modal fade" id="login_register1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog fastreg">
                  <div class="modal-content">
                    <div class="modal-header modal_header_registrazione">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title" id="myModalLabel"><img src="public/img/SPIZZA.png" /></h4>
                    </div>
                    <div class="modal-body col-md-12 col-lg-12 col-sm-12">
                      <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                          <div class="col-md-6 col-lg-6 col-sm-6">
                            <h3>Registrati</h3><hr />
                            <form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Cellulare</label>
                                <input type="text" class="form-control cell" id="exampleInputEmail1" placeholder="Inserisci il numero di cellulare">
                              </div>
                               <button type="button" class="btn btn-default celbutt">Ricevi PIN</button>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Pin Ricevuto</label>
                                <input type="password" class="form-control pwd" id="exampleInputPassword1" placeholder="Inseriscil il Pin ricevuto tramite SMS">
                              </div>


                              <button type="button" class="btn btn-default iscbutt">Registrati</button>
                            </form>
                            <hr />


                          </div>
                          <div class="col-md-6 col-lg-6 col-sm-6">
                            <h3>Oppure</h3><hr />
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background: #38569C;
                            font-size: 14px;
                            color: white;
                            padding: 8px 0px 8px 0px;
                            text-align: left;"><i class="social-icon icon-facebook-circled" style="font-size:20px;color:white;margin-right: 10px;margin-left:10px;"></i><a href="#" style="color:white;font-size: 15px;">Connect with Facebook</a></div>

                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background: #30C5EA;
                            font-size: 14px;
                            color: white;
                            padding: 8px 0px 8px 0px;
                            text-align: left;
                            margin-top: 5px;"><i class="social-icon icon-twitter-circled" style="font-size:20px;color:white;margin-right: 10px;margin-left:10px;"></i><a href="#" style="color:white;font-size: 15px;">Connect with Twitter</a></div>     
                          </div>  
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div> <!-- end dialogo registrati-->






              <div class="modal fade" id="login_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content">
                    <div class="modal-header modal_header_registrazione">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title" id="myModalLabel"><img src="public/img/SPIZZA.png" /></h4>
                    </div>
                    <div class="modal-body col-md-12 col-lg-12 col-sm-12">
                      <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                          <div class="col-md-6 col-lg-6 col-sm-6 ">
                            <h3>Accedi</h3><hr />
                            <form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Cellulare</label>
                                <input type="text" class="form-control" id="email" placeholder="Inserisci il numero di cellulare">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Pin</label>
                                <input type="password" class="form-control" id="pin" placeholder="Inseriscil il tuo Pin">
                              </div>

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Ricordami
                                </label>
                              </div>
                              <button type="submit" class="btn btn-default">Accedi</button>
                            </form>

                            <div class="panel-group top-buffer-20" id="accordion_pin">
                              <div class="panel panel-default" style="border:none !important;">


                                <a data-toggle="collapse" data-parent="#password_smarrita" href="#password_smarrita" style="color: #CD0814;
                                font-size: 12px;
                                text-decoration: none;">
                                Ho perso il Pin
                              </a>


                              <div id="password_smarrita" class="panel-collapse collapse forgottpwd">
                                <div class="panel-body">
                                 Recupera password se hai già precedentemente registrato: <br/>
                                 <label for="exampleInputEmail1">Cellulare</label>
                                 <input type="text" class="form-control cell" id="celullare_recupero" placeholder="Inserisci il numero di cellulare">
                                 <button type="button" class="btn btn-default top-buffer-10 celbutt">Recupera Pin</button>
                               </div>
                             </div>
                           </div>

                         </div>
                         <div class="panel-group" id="accordion_password">
                          <div class="panel panel-default" style="border:none !important;">


                            <a data-toggle="collapse" data-parent="#accordion_password" href="#nuova_password" style="color: #CD0814;
                            font-size: 12px;
                            text-decoration: none;">
                            Cambia Password
                          </a>


                          <div id="nuova_password" class="panel-collapse collapse changepwd">
                            <div class="panel-body">


                              <input type="password" class="form-control top-buffer-10" id="vecchiopin" placeholder="Vecchio Pin">

                              <input type="password" class="form-control top-buffer-10 pwd1" id="nuovopin" placeholder="Nuovo Pin">

                              <input type="password" class="form-control top-buffer-10 pwd2" id="nuovopin2" placeholder="Conferma Nuovo Pin">

                              <button type="submit" class="btn btn-default top-buffer-10">Recupera Pin</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6">
                      <h3>Registrati</h3><hr />
                      <form role="form">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Cellulare</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Inserisci il numero di cellulare">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Pin Ricevuto</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inseriscil il Pin ricevuto tramite SMS">
                        </div>


                        <button type="submit" class="btn btn-default">Registrati</button>
                      </form>
                      <hr />

                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background: #38569C;
                      font-size: 14px;
                      color: white;
                      padding: 8px 0px 8px 0px;
                      text-align: left;"><i class="social-icon icon-facebook-circled" style="font-size:20px;color:white;margin-right: 10px;margin-left:10px;"></i><a href="#" style="color:white;font-size: 15px;">Connect with Facebook</a></div>
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background: #30C5EA;
                      font-size: 14px;
                      color: white;
                      padding: 8px 0px 8px 0px;
                      text-align: left;
                      margin-top: 5px;"><i class="social-icon icon-twitter-circled" style="font-size:20px;color:white;margin-right: 10px;margin-left:10px;"></i><a href="#" style="color:white;font-size: 15px;">Connect with Twitter</a></div>     
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div> <!-- end dialogo registrati-->
      </li>

      <li class="dropdown" id="first_item">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="header-icon icon-location"></i> Search by Address <span class="caret"></span></a>
        <ul class="dropdown-menu submenu" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
</div>

<!-- /.navbar-wrapper -->


<?php echo $content; ?>  



<div class="row">
 <div class="footer col-md-12 col-lg-12 text-center">

   <div class="row">
     <div class="col-md-12 col-lg-12">
       <span>
        <b>Site Map:</b>
        <a href="http://san-francisco.eat24hours.com" title="San Francisco, CA">San Francisco</a> | 
        <a href="http://los-angeles.eat24hours.com" title="Los Angeles, CA">Los Angeles</a> | 
        <a href="http://new-york.eat24hours.com" title="New York, NY">New York</a> |  
        <a href="http://miami.eat24hours.com" title="Miami, FL">Miami</a> |  
        <a href="http://chicago.eat24hours.com" title="Chicago, IL">Chicago</a> | 
        <a href="http://seattle.eat24hours.com" title="Seattle, WA">Seattle</a> | 
        <a href="http://houston.eat24hours.com" title="Houston, TX">Houston</a> | 
        <a href="http://boston.eat24hours.com" title="Boston, MA">Boston</a> |      
        <a href="http://san-diego.eat24hours.com" title="San Diego, CA">San Diego</a> | 
        <a href="http://washington.eat24hours.com" title="Washington, DC">Washington DC</a> | 
        <a href="http://philadelphia.eat24hours.com" title="Philadelphia, PA">Philadelphia</a> |   
        <a href="http://austin.eat24hours.com" title="Austin, TX">Austin</a> |  
        <a href="http://las-vegas.eat24hours.com" title="Las Vegas, NV">Las Vegas</a> |  
        <a href="http://jersey-city.eat24hours.com" title="Jersey City, NJ">Jersey <br> City</a> |         
        <a href="http://dallas.eat24hours.com" title="Dallas, TX">Dallas</a> | 
        <a href="http://denver.eat24hours.com" title="Denver, CO">Denver</a> | 
        <a href="http://atlanta.eat24hours.com" title="Atlanta, GA">Atlanta</a> | 
        <a href="http://orlando.eat24hours.com" title="Orlando, FL">Orlando</a> | 
        <a href="http://sacramento.eat24hours.com" title="Sacramento, CA">Sacramento</a> |  
        <a href="http://oakland.eat24hours.com" title="Oakland, CA">Oakland</a> | 
        <a href="http://baltimore.eat24hours.com" title="Baltimore, MD">Baltimore</a> | 
        <a href="http://berkeley.eat24hours.com" title="Berkeley, CA">Berkeley</a> |  
        <a href="http://brooklyn.eat24hours.com" title="Brooklyn, NY">Brooklyn</a> |  
        <a href="http://pasadena.eat24hours.com" title="Pasadena, CA">Pasadena</a> | 
        <a href="http://phoenix.eat24hours.com" title="Phoenix, AZ">Phoenix</a> | 
        <a href="http://boca-raton.eat24hours.com" title="Boca Raton, FL">Boca Raton</a> |    
        <a href="http://minneapolis.eat24hours.com" title="Minneapolis, MN">Minneapolis</a> |  
        <a href="http://alexandria.eat24hours.com" title="Alexandria, VA">Alexandria</a> | 
        <a href="http://eat24hours.com/all-restaurants">All Cities</a>
      </span>  
    </div>   
  </div>
  <br />
  <div class="row">
   <div class="col-md-12 col-lg-12">
     <span class="cuisines">
      <b>Cuisines:</b>
      <a href="http://eat24hours.com/pizza" title="Pizza">Pizza</a> | 
      <a href="http://eat24hours.com/chinese" title="Chinese">Chinese</a> | 
      <a href="http://eat24hours.com/indian" title="Indian">Indian</a> |  
      <a href="http://eat24hours.com/thai" title="Thai">Thai</a> |  
      <a href="http://eat24hours.com/sushi" title="Sushi">Sushi</a> | 
      <a href="http://eat24hours.com/all-cuisines">All Cuisines</a>
    </span>
  </div>
</div>

<div class="row">
 <div class="col-md-12 col-lg-12">
   <div id="footer_text">
    <span><a href="#">View Privacy Statement</a></span> &nbsp;&nbsp;|&nbsp;&nbsp;
    <span><a href="#">By using our site you agree to our terms of use.</a></span><br>
    <div id="copyr">Feeding the internet 24 hours 2008 - 2014 <a href="http://eat24hours.com">Eat24Hours.com -</a> <a href="http://eat24hours.com/">Food Delivery</a><br /><a href="./help">HELP</a></div>
  </div>
</div>
</div>

</div>
</div>


</div>
<script type="text/javascript" src="./public/js/load.js"></script>

</body>
</html>