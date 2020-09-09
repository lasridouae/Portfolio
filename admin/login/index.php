<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="../assets/dist/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../img/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <form class="form-signin" action="../php/check.php" method="post">
    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='logout'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Logout Successfull !
</div>
      <?php
  }  
  if($_GET['msg']=='iuser'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  Incorrect Email/Password !
</div>
      <?php
  } } 
?>  
<div class="brand-wrapper">
                <img src="../img/logo.png" alt="logo" class="logo">
              
   <h1 class="h3 mb-3 font-weight-normal">sign up</h1>
</div>
  <label for="email" class="sr-only">Email address</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="***********" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="rm" value="remember-me"> Remember me
    </label>
  </div>
  <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>
            </div>
          </div>
        </div>
      </div>
      <!-- </form> -->
