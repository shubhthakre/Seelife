<!doctype html>
<?php
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Donation</title>
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
                            <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="causes.html">Causes</a>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="events.html">Events</a>
                                            <li class="nav-item"><a class="nav-link" href="event-details.html">Event Details</a> 
                                            <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item submenu dropdown active">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                            <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
                        <h2>Registration</h2>
                        <p>Register for better life</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <div id="hero">
            <div class="form-box">
        <div class="button-box">
            
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="Register()">Register</button>
            
                </div>  
            <div class="social-icons">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
                </div>
            
            <form id= "login" form class="input-group">
                <input type="text" class="input-field" placeholder="User-id"required>
                <input type="text" class="input-field" placeholder="Enter password"required>
                
                
                <input type="checkbox" class="check-box"><span>Remember password</span>
                <button type="submit" class="submit-btn">Log in</button>
                       
                       
                       </form>
                 
          
                       
                       
                         <form id="Register" form class="input-group">
                <input type="text" class="input-field" placeholder="User-id"required>
                <input type="email" class="input-field" placeholder="Email Id"required>
                <input type="text" class="input-field" placeholder="Enter password"required>
                        
                
                
                <button type="submit" class="submit-btn">Log in</button>
                </form>
            
            <script>
                var x = document.getElementById("login");
                var y = document.getElementById("Register");
                var z = document.getElementById("btn");
                
                
                function Register(){
                    x.style.left= "-450px";
                    y.style.left= "50px";
                    z.style.left= "110px";
                    
                }
                
                  function login(){
                    x.style.left= "50px";
                    y.style.left= "450px";
                    z.style.left= "0px";
                    
                }
                </script>
        </div>                   
       
       
        
        <!--================Blog Categorie Area =================-->
        
        
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
                                    So seed seed green that winged cattle in. Gathering thing made fly you're no 
                                    divided deep moved us lan Gathering thing us land years living.
                                </p>
                                <p>
                                    So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
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
    
            <div class="footer-bottom">
                <div class="container">
                    <div class="row d-flex">
                        <p class="col-lg-12 footer-text text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
                    ?>