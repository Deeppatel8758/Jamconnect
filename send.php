<?php
session_start();
if(isset($_POST['send'])){
    $mail=$_POST['mail'];
    
  echo "$mail";
    $otp =rand(0,1000);
    $to_email = "$mail";
$subject = "otp";
$body = "$otp";
$headers = "From:pateldeep1162004@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

// validation
$conn = mysqli_connect('localhost','root','','login');

$exist ="select name from auth where name='$mail' ";
$run =mysqli_query($conn,$exist);
$row_count = mysqli_num_rows($run);
if($row_count==1){
    $search ="UPDATE auth set otp='$otp' where name='$mail'";
    $result = mysqli_query($conn,$search);
}
else{
    $search ="INSERT INTO auth(otp,name) VALUES('$otp','$mail') ";

$result = mysqli_query($conn,$search);
}


$fet ="select otp from auth where name='$mail'";
$result2 = mysqli_query($conn,$fet);

$row = mysqli_fetch_array($result2);
$_SESSION["pass"] = $row[0];






}

if(isset($_POST['check'])){
    $uopt=$_POST['ot'];
    $lid=$_SESSION["pass"];
    if($lid==$uopt){
        echo"<script>alert('succes')</script>";
    }
    else{
        echo"<script>alert('fail')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <input type="email" name="mail" placeholder="Enter Email Id">
    <input type="submit" name="send" value="Send OTP">
    <input type="number" name="ot" id="" placeholder="Enter Otp">
    <input type="submit" name="check" value="Enter OTP">
    </form>
   
    
</body>
</html>