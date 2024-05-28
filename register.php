

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="hos_style.css">
</head>
<body>
    

<?php
echo"
<div class='login-form'>
<h1>Registration Form</h1>
<form action='' method='post' >
<div class='content'>
<div class='input-field'>
<input type='email' placeholder='Enter Email Id' name='mail'>
</div>

<div class='input-field'>
<input type='text' placeholder='Enter Your Name' name='name'></div>
<div class='input-field'>
<input type='text' placeholder='Enter Your Contact' name='contact'></div>
<div class='input-field'>
<input type='text' placeholder='Enter Your age' name='age'></div>
<div class='input-field'>
<input type='text' placeholder='Enter Your AdharNo' name='adhar'></div>
<div class='input-field'>
<input type='text' placeholder='Enter Your Address' name='addr'></div>
<div class='input-field'>
<input type='text' placeholder='Generate Password' name='pass'></div>
<div class='input-field'>
<input type='submit' value='Send Otp' name='otp' style='background-color:#2d3b55;color:white;'></div>
</div>
</form>
</div>";

if(isset($_POST['otp'])){
    $conn = mysqli_connect('localhost','root','','jamdata');
    $mail=$_POST['mail'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $age=$_POST['age'];
    $adhar=$_POST['adhar'];
    $addr=$_POST['addr'];
    $pass=$_POST['pass'];
    $search="select id from userlogin where id='$mail'";
    $fet=mysqli_query($conn,$search);
    $rows=mysqli_num_rows($fet);
  
    if(mysqli_num_rows($fet)>0){

            echo"<script>alert('This Email is Already Exists ')</script>";
    }
    else{
       
     
      
    echo "$mail";
      $otp =rand(0,100000);
      $to_email = "$mail";
  $subject = "otp";
  $body = " Your Otp IS  : $otp";
  $headers = "From:pateldeep1162004@gmail.com";
  
  if (mail($to_email, $subject, $body, $headers)) {
      echo "Email successfully sent to $to_email...";
   
      $exist ="INSERT INTO userlogin(id,name,contact,age,adharnum,addr,otp,password) VALUES('$mail','$name','$contact','$age','$adhar','$addr','$otp','$pass') ";
      $run =mysqli_query($conn,$exist);
      header('location: pass.php');
  } 
  else {
      echo "Email sending failed...";
  }
  
  
    }

}
?>
</body>
</html>