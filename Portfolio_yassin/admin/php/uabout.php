<?php
include('../../dist/connect/db.php');
if(isset($_POST['save'])){        
$heading=mysqli_real_escape_string($db,$_POST['ptitle']);
$subheading=mysqli_real_escape_string($db,$_POST['psubtitle']);
$longdesc=mysqli_real_escape_string($db,$_POST['longdesc']);  
$query="UPDATE about SET ";
$query.="heading='$heading',";
$query.="subheading='$subheading',";
$query.="longdesc='$longdesc' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}    
}    
    