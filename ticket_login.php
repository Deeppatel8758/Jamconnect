<?php
session_start();
//$conn = mysqli_connect('localhost','root','','caseproject');
/*if (!$conn)
{
    echo "Connection failed!";
}*/

// session_start();
//$conn = mysqli_connect('localhost','root','','caseproject');
/*if (!$conn)
{
    echo "Connection failed!";
}*/

// if(isset($_POST['signin']))
// {
  // session_start();
  if(isset($_POST['send'])){
      $mail=$_POST['username'];
     
      
    echo "$mail";
      $otp =rand(0,10000);
      $to_email = "$mail";
  $subject = "otp";
  $body = " Your Otp IS  : $otp";
  $headers = "From:pateldeep1162004@gmail.com";
  
  if (mail($to_email, $subject, $body, $headers)) {
      echo "Email successfully sent to $to_email...";
  } else {
      echo "Email sending failed...";
  }
  
  // validation
  $conn = mysqli_connect('localhost','root','','login');
  
  $exist ="select name from ticketauth where name='$mail' ";
  $run =mysqli_query($conn,$exist);
  $row_count = mysqli_num_rows($run);
  if($row_count==1){
      $search ="UPDATE ticketauth set otp='$otp' where name='$mail'";
      $result = mysqli_query($conn,$search);
  }
  else{
      $search ="INSERT INTO ticketauth(otp,name) VALUES('$otp','$mail') ";
  
  $result = mysqli_query($conn,$search);
  }
  
  
  $fet ="select otp from ticketauth where name='$mail'";
  $result2 = mysqli_query($conn,$fet);
  
  $row = mysqli_fetch_array($result2);
  $_SESSION["pass"] = $row[0];
 

  $hos ="select facility from ticketauth where name='$mail' ";
  $run =mysqli_query($conn,$hos);
  $row = mysqli_fetch_array($run);
  $_SESSION['facility']=$row[0];
  
  }  
  if(isset($_POST['signin'])){
   
    $uopt=$_POST['ot'];
    $pass=$_SESSION["pass"];
    if($pass==$uopt){
        echo"<script>alert('succes')</script>";
        header('location: ticket_dash.php');
    }
    else{
        echo"<script>alert('fail')</script>";
    }
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
        <input type="text"  name ="username"placeholder="Email ID" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name ="password" placeholder="Password" autocomplete="new-password">
      </div>
      <div class="input-field">
    
    <input type="submit" name="send" value="Send OTP"></div>
    <div class="input-field">
    <input type="number" name="ot" id="" placeholder="Enter Otp"></div>
    <div class="input-field">
   </div>
  
   
  
      <div class="action">
 
      <button type="submit" name ="signin" >Sign In</button>
    </div>

    </form>


    <!-- dropdown0 -->

<!-- dropdown0 -->

<!-- partial -->


</body>
</html>
