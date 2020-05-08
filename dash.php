<!doctype html>
<html lang="en">
    
   
    <?php
    
    session_start();
    
    ?>
        
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Welcome</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="css/form.css">
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
                            <a class=""></a>
                           
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="NGO.php">NGO</a></li>
                                   <li class="nav-item"><a class="nav-link" href="dash.php">Profile</a></li>
                                    <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sections</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="Ol.php">Old age homes</a>
                                        <li class="nav-item"><a class="nav-link" href="Childcare.php">Child care</a> 
                                        <li class="nav-item"><a class="nav-link" href="env.php">Enviroment</a> 

                                    </ul>
                                </li> 
                                     <li class="nav-item"><a class="nav-link" href="blog2.html">Blog</a></li>
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
                        <h2>Welcome</h2>
                        <h2><?php echo $_SESSION['name']; ?></h2>
                        <h2></h2>
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
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

  var belmont = {
    info:
      '<strong>NMC zone3</strong><br>\
    	Shantinagar<br> Nagpur, Maharastra 440002<br>\
    	<a href="e4.php">Get Information</a>',
    lat: 21.1625,
    long: 79.1283,
  }

  var sheridan = {
    info:
      '<strong>WATAN FOUNDATION</strong><br>\r\
    	Sadar<br> Nagpur, Maharastra 440001<br>\
    	<a href="e1.php">Get Information</a>',
    lat: 21.1630,
    long: 79.0735,
  }
 var s= {
     info:
     '<strong> Upay Foundation </strong><br>\r\
      Neuron Hospital<br> Lokmat square<br>\r\
      Lokmat square, Nagpur<br>\
    <a href="e3.php"> Get Information</a>',
     lat: 21.1345,
     long: 79.0790,
     
 }
  var locations = [
    [broadway.info, broadway.lat, broadway.long, 0],
    [belmont.info, belmont.lat, belmont.long, 1],
    [sheridan.info, sheridan.lat, sheridan.long, 2],
    [s.info,s.lat,s.long,3],
  ]

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: new google.maps.LatLng(21.1625, 79.1283),
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
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

        
        <!-- Start of Async Drift Code -->
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
<!-- End of Async Drift Code -->
 
     
  <!--=====================Events================---->
        
        <section class="event_area section_gap_top">
        <div class="container">
            
            <div class="main_title">
                <h2>Upcoming events</h2>
                
            </div>
        
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="img/event/e1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="e1.php">Padhenga india, Badhenga india</a>
                                    </h3>
                                    <p>
                                        A child has capablity to change the society and world But this capablity can only be achieved through education.
                                    </p>
                                   
                                    <a href="e1.php" class="primary_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
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

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="upay.jpeg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="e3.php">Upay foundation</a>
                                    </h3>
                                    <p>
                                        Not Every Hero Mask.. Be Helping Hand Today.
                                    </p>
                                  
                                    <a href="e3.php" class="primary_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                 <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="nmc.png" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="e4.php">Awarness from Corona virus</a>
                                    </h3>
                                    <p>
                                       Awarness program is organised by Nagpur Muncipal corporation.
                                    </p>
                                    
                                    <a href="e4.php" class="primary_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        
    </section>


   <div class="main_title">
                <h2>Newly added events</h2>
                
            </div>

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      $title = mysqli_real_escape_string($db, $_POST['title']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, title, image_text) VALUES ('$image', '$title', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>


<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
  
</style>
       <?php
         while ($row = mysqli_fetch_array($result)) {
        
         echo"<section class='event_area section_gap_top'>";
        echo"<div class='container'>";
            echo"<div class='row'>";
                echo"<div class='single_causes'>";
 
                    echo"<div class='single_event'>";
                        echo"<div class='row align-items-center'>";
                            echo"<div class='col-lg-12 col-md-12'>";
                                echo"<figure>";
                                    echo"<img class='img-fluid w-100'";
             echo "<img src='images/".$row['image']."' >";
                                    echo"<div class='img-overlay''></div>";
                                echo"</figure>";
                            echo"</div>";
             
              echo"<div class='col-lg-12 col-md-6'>";
                                echo"<div class='content_wrapper'>";
                                    
                                       
      
                                   echo "<p>";
                                      echo "<h3>"."<p>".$row['title']."</p>"."</h3>";
      echo "</div>";
             
                           
                            
                                    
                                       
      
                                   echo "<p>";
                                      echo "<p>".$row['image_text']."</p>";
      echo "</div>";
         
                                    
                                       
      
                                   echo"Category:";
                                      echo "<p>".$row['category']."</p>";
      echo "</div>";
             
                                        
                                
                                    
                                   
                                 echo" </div>";
                           echo" </div>";
                         echo" </div>";
                     echo" </div>";
                echo" </div>";
       echo" </div>";
          echo" </div>";
       echo" </div>";
              echo" </div>";}
?>


<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
 
</style>

<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  
</div>
</body>

        
        <!--================PHP Code =================-->
        
        
     
    
        <!--================Blog Categorie Area =================-->
        
        
        <!--================Blog Area =================-->
        
         <!--================ Start footer Area  =================-->	
    <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row section_gap">
                        
                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title">Quick Links</h4>
                                <ul class="list">
                                    <li><a href="dash.php">Home</a></li>
                                    
                                    <li><a href="dash.php">Causes</a></li>
                                    <li><a href="e1.php">Event</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                        
                        
                        
                        
                     
                        <div class="offset-lg-1 col-lg-3 col-md-10 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                
                                <h4 class="footer_title">Contact Us</h4>
                                <div class="ml-40">
                                    <p class>
                                        <span class></span>
                                        Head Office
                                    </p>
                                    <p>123, SVPCET, Nagpur</p>
        
                                    <p class>
                                        <span class></span>
                                        Phone Number
                                    </p>
                                    <p>
                                        +91 9860717459 <br>
                                        
                                    </p>
        
                                    <p class>
                                        <span class></span>
                                        Email
                                    </p>
                                    <p>
                                        <br>
                                        www.Svpcet.com
                                    </p>
                                </div>
                            </div>
                        </div>
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