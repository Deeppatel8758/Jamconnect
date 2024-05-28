<?php
session_start();

  $conn = mysqli_connect('localhost','root','','jamdata');

  if(isset($_POST['signin'])){
    $uname=$_POST['username'];
    
    $_SESSION['uname']=$uname;
$pass=$_POST['password'];
    $exist ="select * from userlogin where id='$uname' AND password='$pass' AND vkey='1' ";
  $run =mysqli_query($conn,$exist);
  $row_count = mysqli_num_rows($run);
  if($row_count==1){
    header('location: index.php');
  }
  else{
    echo"<script>alert('Pls Check Id And Password')</script>";
  }
  $row = mysqli_fetch_array($run);
    $_SESSION['udata']=$row;
  }
  if(isset($_POST['Register'])){
    header('location: register.php');
  }
  

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./hos_style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="login-form">

  <form method="POST" >
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text"  name ="username"placeholder="Email Id" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name ="password" placeholder="Password" autocomplete="new-password">
      </div>
  
    
   </div>
  
   
  
      <div class="action">
      <button type="submit" name="Register" >Sign Up</button>
      <button type="submit" name ="signin" >Sign In</button>
    </div>

    </form>


    <!-- dropdown0 -->

<!-- dropdown0 -->

<!-- partial -->


</body>
</html>
