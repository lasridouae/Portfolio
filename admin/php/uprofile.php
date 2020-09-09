<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){    
$name=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['userpass']);
$email=mysqli_real_escape_string($conn,$_POST['userid']);
$sql="UPDATE admin_users SET ";
$sql.="username='$name',";
$sql.="user_pass='$password',";
$sql.="user_id='$email' WHERE 1";
echo $sql;    
$result=mysqli_query($conn, $sql);
if($result){
    $_SESSION['username']=$name;
    header("location:../?editprofile=true&msg=updated");
}    

}    
    


