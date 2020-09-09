<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
include("../../include/db.php");
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql="SELECT * FROM admin_users WHERE user_id='$email' AND user_pass='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header('location:../');
    }else{
        header('location:../login/?msg=iuser');    }
    
}