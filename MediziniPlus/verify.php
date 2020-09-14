<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST["username"];
$password = md5($_POST["pwd"]);
$flag = 'true';
// ($password);
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT id,email,password,fname,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['fname'] = $obj->fname;
      header("location:products.php");
    } else {

        if($flag === 'true'){
          echo '<h1>Invalid Login! Redirecting...</h1>';
          redirect();
          $flag = 'false';
        }
    }
  }
}
}
function redirect() {
  
  header("Refresh: 3; url=index.php");
  //header("location:login.php");
  
}


?>
