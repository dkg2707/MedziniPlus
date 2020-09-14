<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || MedizinPlus</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Hey Admin!</h3>
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>Increase units by</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<p><input style="clear:both;" type="submit" class="button" value="Update"></p>';
              if($obj->deleted==1){
                echo "Product Deleted! ";
                echo '<a href="remove-product.php?action=recover&id='.$obj->id.'">Recover</a>';
              }
              else{
                echo '<a href="remove-product.php?action=remove&id='.$obj->id.'">Remove</a>';
              }
              
              echo '</div>';
              echo '</div>';
              echo '</form>';
            }
          }

         //?action=remove&id='.$obj->id.' 
        ?>



      


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <!-- <center>
          <p><input style="clear:both;" type="submit" class="button" value="Update"></p>
        </center>
        </form> -->

          <hr>
        <h3>Add New Product</h3>
        <form method="GET" name="add-product" action="add-product.php" >
          
          <input type="number" placeholder="Product Code" name="code" />
          <input type="text" placeholder="Product Name" name="name" />
          <input type="text" placeholder="Product Category" name="category" />
          <input type="text" placeholder="Description" name="des" />
          <input type="text" placeholder="Product URL" name="url" />
          <input type="number" placeholder="Units Available" name="qty" />
          <input type="number" placeholder="Price" name="price" />

        <button type="submit"> ADD </button>
        </form>



        </div>
    </div>
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
    </script>
  </body>
</html>
