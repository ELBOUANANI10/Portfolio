<?php
include('../../dist/connect/db.php');
$query="SELECT * FROM social_media";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$twitter=mysqli_real_escape_string($db,$_POST['twitter']);
$facebook=mysqli_real_escape_string($db,$_POST['facebook']);
$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);
$github=mysqli_real_escape_string($db,$_POST['github']);
    
if(isset($_POST['save'])){
  
$query="UPDATE social_media SET ";
$query.="twitter='$twitter',";
$query.="facebook='$facebook',";
$query.="linkedin='$linkedin',";
$query.="github='$github' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?edithome=true&msg=updated");
}    
}    
    