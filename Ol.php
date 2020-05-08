
       <!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Event Details</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="sty.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
<body>
        
        <!--================ Start Header Menu Area =================-->
         <header class="header_area">
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <a class="navbar-brand logo_h" href="i.html"><img src="img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                     <li class="nav-item"><a class="nav-link" href="NGO.php">NGO</a></li>
                                 
                                    <li class="nav-item"><a class="nav-link" href="dash.php">Profile</a></li>
                                     <li class="nav-item"><a class="nav-link" href="blog2.html">Blog</a></li> 
                                     <li class="nav-item submenu dropdown">
                                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sections</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="Ol.php">Old age homes</a>
                                        <li class="nav-item"><a class="nav-link" href="Childcare.php">Child care</a> 
                                        <li class="nav-item"><a class="nav-link" href="env.php">Enviroment</a> 

                                    </ul>
                                          
                                </li> 
                                    <li class="nav-item"><a class="nav-link" href="Don.php">Donation</a></li>
                                   <li class="nav-item"><a class="nav-link" href="i.html">Logout</a></li>
                                  
                                   
                                </ul>
                            </div> 
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================ End Header Menu Area =================-->
            
        <!--================ Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Old Age Homes</h2>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Home Banner Area =================-->
    
    
       <style>
       p.b { 
  word-spacing: 200px;
}
a {
  color: red;
}
    </style> 
     <marquee behavior="scroll" direction="left" bgcolor="yellow"
           onmouseover="this.stop();"
           onmouseout="this.start();" behavior="alternate">
         <p class="b">Events: <a href="e1.php">Watan </a> <a href="e2.php">HelpAgeIndia</a> <a href="e3.php">UpayFoundation</a> <a href="e4.php">NMCZone3</a> </p></marquee>
      
    
    
    
    
    
    
     <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
      <div class="main_title">
                <h2>Events Location</h2>
                
            </div>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  var broadway = {
    info:
      '<strong>HELP AGE INDIA</strong><br>\
    	 Narendra Nagar<br> Nagpur, Maharastra 440001<br>\
    	<a href="e2.php">Get Information</a>',
    lat: 21.1334,
    long: 79.0838,
  }

 
  var locations = [
    [broadway.info, broadway.lat, broadway.long, 0],
  
  ]

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: new google.maps.LatLng(21.1334, 79.0838),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  })

  var infowindow = new google.maps.InfoWindow({})

  var marker, i

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
    })

    google.maps.event.addListener(
      marker,
      'click',
      (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0])
          infowindow.open(map, marker)
        }
      })(marker, i)
    )
  }
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFj-2KO2NnGuuaLsgH-w9iFlvnbgnkHB4 &callback=initMap">
    </script>
    </body>
    
    
    
    
    <section class="event_area section_gap_top">
        <div class="container">
            <div class="row">
                <div class="single_causes">
      <div class="col-lg-12">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="haii.png" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="e2.php">Help Age India</a>
                                    </h3>
                                    <p>
                                       "The aim is to serve elder needs in a holistic manner, enabling them to live active, dignified and healthier lives."
                                    </p>
                                    
                                    <a href="e2.php" class="primary_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            </div>
        </div>
    </section>
    
        <!--================Blog Area =================-->
    
    <script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('aa7s9rk85pmw');
</script>
      
        <!--================Blog Area =================-->
   
        
         <!--================ Start footer Area  =================-->	
   <footer>
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
                                Our Vision is a world in which people affected by humanitarian crisis are able to access the aid and assistance they need with confidence , dignity and safety
							</p>
							<p>
								A future where the possiblities and oppornunities and dreams are the same for all youth. Regarless of sexual orientation and gender identity. 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="2.html">Home</a></li>
								<li><a href="about-us.html">About</a></li>
								<li><a href="causes.html">Causes</a></li>
								<li><a href="events.html">Event</a></li>
								<li><a href="">News</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Gallery</h6>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/g1.jpg" alt=""></li>
								<li><img src="img/gallery/g2.jpg" alt=""></li>
								<li><img src="img/gallery/g3.jpg" alt=""></li>
								<li><img src="img/gallery/g4.jpg" alt=""></li>
								<li><img src="img/gallery/g5.jpg" alt=""></li>
								<li><img src="img/gallery/g6.jpg" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, St.vincent palloti college of engineeering and technology</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									9860717459 <br>
									7385377787
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									yashkhobragde15@gmail.com <br>
									www.NGO.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center"></p>
				</div>
			</div>
		</div>
	</footer>
        <!--================ End footer Area  =================--> 
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>