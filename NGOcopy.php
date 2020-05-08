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
        <title>NGO</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
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
                          <h2>Welcome</h2>
                        <h2><?php echo $_SESSION['name']; ?></h2>
                        
                        <p></p>
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
      
        
        <!--================Blog Categorie Area =================-->
        
       
   <?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "reg");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	
  	// Get text
  	$Uid = mysqli_real_escape_string($db, $_POST['Uid']);
      $Eid= mysqli_real_escape_string($db, $_POST['Eid']);
      $text= mysqli_real_escape_string($db, $_POST['text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO ngo (Uid,Eid,text ) VALUES ('$Uid', '$Eid','$text')";
  	// execute query
  	mysqli_query($db, $sql);

 
  }
  $result = mysqli_query($db, "SELECT * FROM ngo");
?>
          <section class="causes_area">
         <div class='container'>
         <?php
             echo"<div class='main_title'>";
				echo"<h2>Our Registered NGO's</h2>";
             echo"</div>";
           while ($row = mysqli_fetch_array($result)) {
        
			
        
      
       
				
       
        echo"<div class='container'>";
            echo"<div class='row'>";
             echo"<div class='col-lg-12 col-md-10'>";
                echo"<div class='single_causes'>";
                    echo"<div class='single_causes'>";
                                   echo "<p>";
                                      echo "<h3>"."<p>".$row['Uid']."</p>"."</h3>";
     
                                   echo "<p>";
                                      echo "<p>".$row['Eid']."</p>";
             
              echo "<p>".$row['text']."</p>";
      echo "</div>";
              echo "</div>";
                                        
                                  echo"</p>";
                                    
                        echo"</div>";
             
            
             
             
             
             
                         echo" </div>";
                     echo" </div>";
            }
             
        echo"</div>";
?>
              </div></section>
 <!--================ Start cause Area  =================-->
        
    
     
        <!--================ Start cause Area  =================-->
        
        
        
         <section class="causes_area">
		<div class="container">
			<div class="main_title">
				<h2>Thankyou for Joining with us</h2>
				<p>The way we help </p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Donation</h4>
						<img src="img/causes/c1.png" alt="">
						<p>
							Support Causes and NGOs close to your heart and help people in need. 
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Give Inspiration</h4>
						<img src="img/causes/c2.png" alt="">
						<p>
							“The purpose of life is not to be happy. It is to be useful, to have it make some difference that you have lived and lived well.”
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_causes">
						<h4>Become Volunteer</h4>
						<img src="img/causes/c3.png" alt="">
						<p>
						you have free will, commitment, and want to engage and express, you are welcome to join us as a Volunteer.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
         <!--================ Start footer Area  =================-->	
    <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row section_gap">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title large_title"></h4>
                                <p>
                                  
                                </p>
                                <p>
                                 
                                </p>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget tp_widgets">
                                <h4 class="footer_title">Quick Links</h4>
                                <ul class="list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Causes</a></li>
                                    <li><a href="#">Event</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget instafeed">
                                <h4 class="footer_title">Gallery</h4>
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
                                    <p>123, Main Street, Your City</p>
        
                                    <p class="sm-head">
                                        <span class="fa fa-phone"></span>
                                        Phone Number
                                    </p>
                                    <p>
                                        +123 456 7890 <br>
                                        +123 456 7890
                                    </p>
        
                                    <p class="sm-head">
                                        <span class="fa fa-envelope"></span>
                                        Email
                                    </p>
                                    <p>
                                        free@infoexample.com <br>
                                        www.infoexample.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        
        </footer>
        
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