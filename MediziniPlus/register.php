<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || MedizinPlus</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>

    <style >
    form label {
      display: inline-block;
      width: 100px;
    }

    form div {
      margin-bottom: 10px;
    }

    .error {
      color: red;
      margin-left: 5px;
    }

    label.error {
      display: inline;
    }
    </style>

  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
        <h1>  <a href="index.php"><img src="images/logo2.jpg">  </img> MedizinPlus </a> </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



    <center><h2>Registeration </h2></center>

    <form method="POST" id="registration" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">  
            </div>
            <div class="small-8 columns">
              <input type="text" id="fname" placeholder="First Name" name="fname" >
            </div>
          </div>


          <div class="row">
            <div class="small-4 columns">
            </div>
            <div class="small-8 columns">
              <input type="text" id="lname" placeholder="Last Name" name="lname" >
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">
            </div>
            <div class="small-8 columns">
              <input type="email" id="email" placeholder="E-Mail" name="email" >
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">
            </div>
            <div class="small-8 columns">
              <input type="password" id="pwd" placeholder="Password" name="pwd" >
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">
            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background:#fc7703; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>

        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

      <footer>
        <hr>
           <h5 style="text-align:center; font-style: oblique;">Laughter is the cheapest medicine</h5>
           <p style="text-align:center; font-size:0.8em;">&copy; MedizinPlus. All Rights Reserved.</p>
        </footer>
      </div>
    </div>



   
    <script src="js/vendor/jquery.js"></script>
   
    <script src="js/foundation.min.js"></script>
    <script>
    $(document).foundation();
      // $(document).ready(function(){
            
      //               var flag_f=true;
      //               var flag_l = true;
      //               var flag_e= true;
      //               var flag_p= true 

      //               $("#ferror").hide();

      //               $("#lname").focus(function(){
      //               $("#ferror").show();
      //             });

      //             $("#lname").blur(function(){
      //               $("#ferror").hide();
      //             });

                  


      //         if (typeof(first_name)=='undefined' || first_name.length < 1) {
      //         flag_f=false;
      //               $("#ferror").show();
      //       }


      //     //  $('#registration').submit(function(e) {
           
      //     //   var first_name = $('#fname').val();
      //     //   var last_name= $('#lname').val();
      //     //   var email = $('#email').val();
      //     //   var password = $('#pwd').val();
            

      //     //   $(".error").remove();

      //     //   if (typeof(first_name)=='undefined' || first_name.length < 1) {
      //     //     flag_f=false;
      //     //     $('#fname').after('<span class="error">This field is required</span>');
      //     //   }
      //     //   if (typeof(last_name)=='undefined' || last_name.length < 1) {
      //     //     flag_l=false;
      //     //     $('#lname').after('<span class="error">This field is required</span>');
      //     //   }
      //     //   if (typeof(email)=='undefined' || email.length < 1) {
      //     //     flag_e=false;
      //     //     $('#email').after('<span class="error">This field is required</span>');
      //     //   } else {
      //     //     // /^[A-Za-z0-9]+(.)?[A-Za-z0-9]+[@][A-Za-z]+[\.][A-Za-z]+/;
      //     //     var regEx = /^[A-Za-z0-9]+(.)?[A-Za-z0-9]+[@][A-Za-z]+[\.][A-Za-z]+/;
      //     //     var validEmail = regEx.test(email);
      //     //     if (!validEmail) {
      //     //       flag_e=false;
      //     //       $('#email').after('<span class="error">Enter a valid email</span>');
      //     //     }
      //     //   }
      //     //   if (typeof(pwd)=='undefined' || password.length < 6) {
      //     //     flag_p=false;
      //     //     $('#pwd').after('<span class="error">Password must be at least 6 characters long</span>');
      //     //   }

      //     //   if(!(flag_f && flag_l && flag_e && flag_p){
      //     //     e.preventDefault();
      //     //   }

      //    // });



      // });
    </script>
  </body>
</html>
