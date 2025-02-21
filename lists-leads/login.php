<?php
    // error_reporting(true);

    include('../config.php');
    ob_start();


    if( isset($_SESSION['login'])) {

      header("Location:index.php"); die();
    }

    if(isset($_POST['submit'])){

      $username = $_POST['username']; $password = $_POST['password'];
      $username = filter_var($username, FILTER_SANITIZE_STRING);
      $password = filter_var($password, FILTER_SANITIZE_STRIPPED);         

      if($username == LOGIN_NAME && $password == LOGIN_PASSWORD){

        $_SESSION['login'] = LOGIN_NAME;
       // echo "<script>window.location = 'index.php';</script>";
         header("Location:index.php"); die();
      } 
      else{
        echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
      }

    }
    ?>

<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <meta name="robots" content="noindex, nofollow">
     <title>Leads Dashboard - Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <style>  
     body{
      background-color: white;
        background-size:cover;
     }  
     form {
        background: rgba(255, 255, 255, 0.91);
    padding: 20px;
    width: 300px;
    max-height: 300px;
    margin: auto;
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    box-shadow: -1px -1px 10px rgba(0, 0, 0, 0.18);

}
.alert.alert-danger {
    background: red;
    color: white;
    border: 0px;
    width: 270px;
    font-size: small;
    float: right;
    margin: 10px;
    padding: 10px;
}

 </style>
   </head>
<body>
  <div class="container">
    <form action="" method="post">
         <h3 class="text-center">Login</h3>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
</body>
</html>