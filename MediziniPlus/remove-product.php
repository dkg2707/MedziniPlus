<?
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
if( $_GET["action"] == "recover"){

    $id= $_GET["id"];
    $update = $mysqli->query("UPDATE products SET deleted =0 WHERE id =$id ; ");
    if($update){
        echo "Recovered Successfully! Redirecting to My Account";
        header("Refresh: 3; url=admin.php");
    
    }
}

if( $_GET["action"] == "remove"){
    $id = $_GET["id"];
    $rdeleted= $mysqli->query("SELECT deleted from products WHERE id =$id ; ");
    $obj= $rdeleted->fetch_object();
    //echo $obj->deleted;
    if ($obj->deleted==0){
        $update = $mysqli->query("UPDATE products SET deleted =1 WHERE id =$id ; ");
            if($update){
            echo "Deleted Successfully! Redirecting to My Account";
            header("Refresh: 3; url=admin.php");
        }
        
        }
//    else{
//        echo "Already Deleted";
//        echo "<hr>";
//        //echo '<a href="remove-product.php?action=remove&id='.$obj->id.'">Remove</a>';
       
//        echo "<a href='remove-product.php?action=recover&id=$id'> CLICK TO RECOVER </a>";
        
//     }

}
else{
    header("Refresh: 3; url=admin.php");
}

?>
