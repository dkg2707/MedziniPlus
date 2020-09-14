<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || MedizinPlus</title>
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
          <li class='active'><a href="products.php">Products</a></li>
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
      <div class="small-12">
      
      <form action="products.php" method="GET">
      <label for="cars">Category:</label>

      <select name = "category">
                <option value="all" selected>All</option>
                <?php
                  $sql1 = "SELECT distinct category FROM products; ";
                  $result1 = mysqli_query($mysqli,$sql1);
                  while($row = mysqli_fetch_array($result1)) {
                    //echo $row;
                    echo '<option value="'.$row[0].'" >'.$row[0].'</option>';
                  }
                ?>
              </select>
      <input type="text" name="productName" placeholder="Product Name" value=<? echo $_GET['productName']; ?>></input>
      <hr>

      <button >SEARCH</button>
      </form>
      
        <?php
            if (isset($_GET['pageno'])) {
              $pageno = $_GET['pageno'];
          } else {
              $pageno = 1;
          }
          $no_of_records_per_page = 6;
            $offset = ($pageno-1) * $no_of_records_per_page;

            $sql = "SELECT COUNT(*) FROM products WHERE deleted <> 1; ";
            $total_records = $mysqli->query($sql);
            $total_rows = mysqli_fetch_array($total_records)[0];
            //$total_rows = $total_records->fetch_array(MYSQLI_NUM);
            $total_pages = ceil($total_rows / $no_of_records_per_page);


            $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";
            $res_data = $mysqli->query($sql);
         

          $i=0;
          $product_id = array();
          $product_quantity = array();

         
          if( !empty($_GET["category"]) and !empty($_GET["productName"]) and $_GET["category"]!="all" and $_GET["productName"]!=""){
            $cat = $_GET["category"];
            $prod = $_GET["productName"];
            $sql = "SELECT * FROM products where category='$cat' and product_name LIKE "."'%$prod%'"." and deleted <> 1 LIMIT 0, $no_of_records_per_page;";
        }
            elseif( $_GET["category"]=="all" and !empty($_GET["productName"]) and $_GET["productName"]!="" ){
              $prod = $_GET["productName"];
              $sql = "SELECT * FROM products where product_name LIKE "."'%$prod%'"." and deleted <> 1 LIMIT 0, $no_of_records_per_page;";
          }
          elseif( !empty($_GET["category"]) and $_GET["category"]!="all" and $_GET["productName"]==""){
              $cat = $_GET["category"];
              $sql = "SELECT * FROM products where category='$cat' and deleted <> 1 LIMIT 0, $no_of_records_per_page;";
          }
          else{ 
              $sql = "SELECT * FROM products WHERE deleted <> 1 LIMIT $offset, $no_of_records_per_page;";
              //$sql = "SELECT * FROM products WHERE deleted <> 1;";
          }

        $result = $mysqli->query($sql);
          if($result === FALSE){
            die(mysql_error());
          }
        
          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><b><h5>'.$obj->product_name.'</h5></b></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.substr($obj->product_desc,0,150)."...".'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
              


              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-top:10px;">
          <div class="small-12">

          <ul class="pagination ">
              <li><a href="?pageno=1">First</a></li>
              <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
              </li>
              <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
              </li>
              <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
          </ul>
         


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
