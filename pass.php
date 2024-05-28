
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hos_style.css">
</head>
<body>

<?php
echo"
<div class='login-form'>
<h2>Otp Verification</h2>
<form method='post'>

<div class='input-field'> 
<input type='text' name='otp' placeholder='Enter OTP Here'>
</div>
<div class='input-field'> 
<input type='submit' name='sub' style='background-color:#2d3b55;color:white;'></div>
</form>
<div>";
if(isset($_POST['sub'])){
$otp=$_POST['otp'];
//   // validation
  $conn = mysqli_connect('localhost','root','','jamdata');
  
  $exist ="select id from userlogin where otp='$otp' ";
  $run =mysqli_query($conn,$exist);
  $row_count = mysqli_num_rows($run);
  if($row_count==1){
   
    
    $conn = mysqli_connect('localhost','root','','jamdata');
    
      $search ="UPDATE userlogin SET vkey='1' WHERE otp='$otp'";
      $result = mysqli_query($conn,$search);
      if($result){
        echo"<script>alert('Your Account Is Created Succesfully!!')</script>";
        header('location: user_login.php');
      }
      else{
        echo"<script>alert('OPPS! SOMETHING WENT WRONG')</script>";
      }
  
}
  else{
     echo"<script>Wrong Otp!</script>";
  }
  
  
}
?>
</body>
</html>