<?php 
 include('configpost.php');

 session_start();

 
 
 $email=$_POST['email'];
 $password=$_POST['password'];
 
 $result = mysqli_query($conn,"SELECT * FROM `user_login` WHERE  email='$email' And password='$password'");

 
 
 if(isset($_SESSION['email'])){
   echo"<script>location.href='index.php'</script>";
 
 }else{
 if(mysqli_num_rows($result)){
     session_start();

     $_SESSION['email']=$email;
    
     echo"<script>location.href='index.php'</script>";
 }else{
     
   echo"<script>alert('Email or passworld invalid!!')</script>";
   
   echo"<script>location.href='login.php'</script>";
 }
 }






?>