<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
include("../../dist/connect/db.php");
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    $query="SELECT * FROM admin WHERE user_email='$email' AND password='$password'";
    $run = mysqli_query($db,$query);
    $result = mysqli_fetch_array($run);
    if($result){
        $_SESSION['id']=$result['id'];
        $_SESSION['username']=$result['username'];
        header('location:../');
    }else{
        header('location:../login/?msg=iuser');    }
    
}