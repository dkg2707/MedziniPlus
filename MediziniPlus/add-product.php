<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
//echo "sdfg";
if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';


if( !empty($_GET["name"]) && !empty($_GET["category"]) && !empty($_GET["url"]) && !empty($_GET["code"]) && !empty($_GET["des"]) && !empty($_GET["qty"]) && !empty($_GET["price"]) ){
        $name = $_GET["name"] ; 
        $url = $_GET["url"];
        $code = $_GET["code"];
        $des = $_GET["des"];
        $qty = $_GET["qty"];
        $price = $_GET["price"];
        $cat = $_GET["category"];
        

        $sql = "INSERT INTO products (category, product_code, product_name, product_desc, product_img_name, qty, price) 
        VALUES  ('$cat', '$code', '$name', '$des', '$url', '$qty', '$price') ";
        //echo $sql;
        $result = $mysqli->query($sql);

        if($result){
            echo "Product Added Successfully! Redirecting to My Account...";
            header("Refresh: 3; url=admin.php");
        }else{
          echo "Invalid Entry! Redirecting to My Account...";
          header("Refresh: 3; url=admin.php");
        }
}




?>
