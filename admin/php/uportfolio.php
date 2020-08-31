<?php
include('../../include/db.php');
include('checkupload.php');
$id = $_POST['id'];
$sql="SELECT * FROM portfolio WHERE id='$id'";

$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$projectname=mysqli_real_escape_string($conn,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($conn,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?404=true&msg=error");
}else{
 $sql="UPDATE portfolio SET ";
 $sql.="projectpic='$projectpic',";
 $sql.="projectname='$projectname',";
 $sql.="projectlink='$projectlink' WHERE id='$id'";
echo $sql;    
$result=mysqli_query($conn, $sql);
if($result){
    header("location:../?editportfolio=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM portfolio WHERE id='$id'";
    $result=mysqli_query($conn, $sql);
if($result){
    header("location:../?editportfolio=true#done");
}
}


if(isset($_POST['addtoportfolio'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$row['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$projectname=mysqli_real_escape_string($conn,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($conn,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?editportfolio=true&msg=error");
}else{
 $sql="INSERT INTO portfolio (projectname,projectpic,projectlink) ";
 $sql.="VALUES ('$projectname','$projectpic','$projectlink')";
$result=mysqli_query($conn, $sql);
if($result){
    header("location:../?editportfolio=true&msg=updated");
}    

}    
    
}