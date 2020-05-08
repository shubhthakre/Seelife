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
        <title>Registration</title>
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
                            <a class="navbar-brand logo_h" href="i.html"><img src="img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                   
                                    
                                    
                                    <li class="nav-item"><a class="nav-link" href="i.html">Back</a></li>
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
                        <h2>NGO Registration</h2>
                        <h2></h2>
                        <h2></h2>
                        <p></p>
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
            
             
            <form id= "login" form class="input-group"  method="post">
                <input type="text" class="input-field" name="uid" placeholder="NGO-id"required>
                <input type="password" class="input-field"  name ="pass1" placeholder="NGO password"required>
                
                
                <input type="checkbox" class="check-box"><span>Remember password</span>
                
                <button type="submit" name="submit1" class="submit-btn">Log in</button>
                       
                       
                       </form>
                 
          
                       
                       
                         <form id="Register" form class="input-group"  method="post">
                <input type="text" class="input-field" name="User-id"  placeholder="NGO-id"required>
                <input type="email" class="input-field"  name="Email_id"placeholder="Email Id"required>
                <input type="password" class="input-field" name="pass" placeholder="NGO password"required>
                       
                        <input type="text" class="input-field" name="des"  placeholder="Description"required> 
                
                
                <button type="submit" name="submit2" class="submit-btn">Register</button>
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
        </div>
     
  
 <?php
   
        
        $dbhost= 'localhost';
        $username= 'root';
        $password= '';
        $db='reg';
        
    
       $conn= mysqli_connect("$dbhost","$username","$password");
        
   
        mysqli_select_db($conn,$db);
        
        if(isset($_POST['User-id']) || isset($_POST['Email_id']) || isset($_POST['pass']) || isset($_POST['des'])) {
        $name= $_POST['User-id'];
        $eid= $_POST['Email_id'];
        $pas= $_POST['pass'];
             $text= $_POST['des'];
        
        $q= "SELECT * FROM ngo where Uid = '$name' && Eid = '$eid' && password = '$pas' && text = '$text' ";
        $result= mysqli_query($conn, $q);
       $num= mysqli_num_rows($result);
        
        if($num == 1){
            echo"duplicate data";
        }
        else{
            $qy= "insert into ngo(Uid , Eid , password , text) values ('$name','$eid','$pas','$text')";
            mysqli_query($conn,$qy);
        }
        }

?>
        
        
         
<?php
        
    ob_start();
        
        
        $dbhost= 'localhost';
        $username= 'root';
        $password= '';
        $db='reg';
        
    
       $conn= mysqli_connect("$dbhost","$username","$password");
        
    
        mysqli_select_db($conn,$db);
        
        if(isset($_POST['uid'])){
        $name= $_POST['uid'];
        $pas= $_POST['pass1'];
        
        $q= "SELECT * FROM ngo where Uid = '$name' AND password = '$pas' limit 1";
        $result= mysqli_query($conn,$q);
             
             $_SESSION['name']=$name;
      
        
        if( mysqli_num_rows($result)==1){
            
           echo"<script> location.href='ngo1.php'; </script>";
            
        }
        else{
           $error= "invalid username or password";
            
        }
        }
        
        ob_end_flush();
?>
  
        
 <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f79e78a8-3e87-4111-91e8-1e27566598ab",
    });
  });
</script>
        
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
        
        <!--================PHP Code =================-->
     
    
        <!--================Blog Categorie Area =================-->
        
        
        <!--================Blog Area =================-->
        
         <!--================ Start footer Area  =================-->	
  
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