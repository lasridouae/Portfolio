<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql="INSERT INTO contact (cname,cemail,csubject,cmessage) "; 
$sql.="VALUES('$name','$email','$subject','$message')";
$result = mysqli_query($conn, $sql);
if($result){
    echo 'Your message has been sent. Thank you!';
}
