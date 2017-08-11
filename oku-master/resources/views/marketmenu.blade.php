<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
               
            }

            footer{
                  background-color: #555;
                  color: white;
                  padding: 25px;
    
            }
            h1{
              font-family: 'Times New Roman', Times, serif;
            }
            h2{
              font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            }
            
        
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-OKU</a>
        
        </div>
        <div id="navbar" class="navbar-collapse collapse">

 <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Categories<span class="sr-only">(current)</span></a></li>-->
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Handicraft</a></li>
            <li class="divider"></li>
            <li><a href="#">Services</a></li>
            <li class="divider"></li>
            <li><a href="#">Events</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Feedback To Us</a></li>
      </ul>

          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
        <h1 >Welcome To Our Website</h1>
        <p >E-OKU is an awesome place to buy handicraft. Do look and check it out !!</p>
        <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Learn More </a>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
     <section>
       <div class="page-header" id="features">
         <h2>Features</h2>
       </div>
      <div class="row">
        <div class="col-lg-4">
          <blockquote>
          <h2>Numerous of choice</h2>
          <p>With OKU Marketplace, there is hundred of items give you choose. We ensure that each of the items are genuinue and high quality levels. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </blockquote>
        </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Cheaper Handicraft Let You Choose</h2>
          <p>Each of the items are cheaper than you think. Our handicraft is came from disabled organizations and you will be not dissapointed as all of the items are really lower prices.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </blockquote>
       </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Talented Artist Services Included</h2>
          <p>Besides sell products, we offer a new type of services. This services included massage services, repair equipment and more. Most important is , there are no GST included and is affordable prices.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </blockquote>
        </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Events </h2>
          <p>We will held the events each of one month, come and participate in our events to enjoy the lowest prices
            of genuinue products thats originally made from disabled people.
          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </blockquote>
        </div>
      </div>
      </div>
     
     </section>
      <hr>

<!-- Slideshow product -->
    <div class="container">
    <section>
    <div class="page-header" id="features">
         <h2>Our Product</h2>
    </div>
    </div>
    </section>
    <!-- #region Jssor Slider Begin -->
    <script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('../image/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('../image/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="../image/gallery1.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/gallery2.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/gallery3.jpg" />
            </div>
            <a data-u="any" href="https://www.jssor.com" style="display:none">js slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
   

<!-- call to action -->
<section>
  <div class="page-header" id="features"></div>
<div class = "well">
   <div class ="container text-center">
      <h3>Subscribe to Our Website for get latest updates </h3>
      <p>Enter your email and name</p>       
   
   <form action="" class="form-inline">
     <div class="form-group">
       <label for="email">Email Address</label>
       <input type="text" class="form-control" id="email" placeholder="email">
     </div>
     <div class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" placeholder="name">
     </div>
     <button type="submit" class="btn btn-warning">Subscribe</button>
     </form>
</div>
</section>

      <footer class="container-fluid ">	
        <p>&copy; E-OKU All Right Reserved 2017</p>
      </footer>

     
    </div> <!-- /container -->        
        <script type ="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
