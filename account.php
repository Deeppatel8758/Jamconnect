<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hos_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.php" media="screen">
    
</head>
<body style="background-color:#ededde;">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid" style="background-color:     #5095C7;">
          <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">Jamconnect > Account</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                      <a class="nav-link" href="book.html"  style="color: white; font-weight: bold;font-size: large;">Slot Boooking</a>
                  </li> -->
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="#"  style="color: white; font-weight: bold;font-size: large;">Ticket Booking</a>
                  </li> -->

                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php"  style="color: white; font-weight: bold;font-size: large;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php"  style="color: white; font-weight: bold;font-size: large;">Map</a>
                  </li>
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="#"  style="color: white; font-weight: bold;font-size: large;">Map</a>
                  </li> -->
                  <li class="nav-item">
                      <a class="nav-link" href="user_book.php"  style="color: white; font-weight: bold;font-size: large;">My Booking</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="account.php" role="button" data-bs-toggle="dropdown"
                          aria-expanded="true" style="color: white; font-weight: bold;font-size: large;" >
                          Account
                      </a>
                   
                  </li>
               
                  <!-- <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li> -->
              </ul>
              <!-- <form class="d-flex" role="search" method="post">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="margin-top: 6%;width: 100%; "name="keynote">
                  <button class="btn btn-outline-success" type="submit"  style="color: 5095C7; border: white 1px solid; background-color: white; height: 45px;width: 90px; margin-left: 2%;margin-top: 5%;" name="btnn">Search</button>
              </form> -->
          </div>
      </div>
  </nav>
    <!-- nav end -->
    <?php
    session_start();
    $udata=$_SESSION['udata'];
    $conn = mysqli_connect('localhost','root','','jamdata');
     $search="select * from userlogin where id='$udata[0]'";
     $fet=mysqli_query($conn,$search);
     $det=mysqli_fetch_array($fet);
    echo"
    <div class='login-form' style='margin-top:2%;margin-bottom:2%;'>
    <h1>My Details</h1>
    <form action='' method='post' >
    <div class='content'>
    <div class='input-field'>
  
    <input type='email' placeholder='Enter Email Id' value='Email : ".$det[0]."' name='mail'>
    </div>
    
    <div class='input-field'>
    <input type='text' placeholder='Enter Your Name' name='name' value='Name : ".$det[2]."'></div>
    <div class='input-field'>
    <input type='text' placeholder='Enter Your Contact' name='contact' value='Contact : ".$det[3]."'></div>
    <div class='input-field'>
    <input type='text' placeholder='Enter Your age' name='age' value='Age : ".$det[4]."'></div>
    <div class='input-field'>
    <input type='text' placeholder='Enter Your AdharNo' name='adhar' value='Adhar : ".$det[5]."'></div>
    <div class='input-field'>
    <input type='text' placeholder='Enter Your Address' name='addr' value='Address : ".$det[6]."'></div>
    <div class='input-field'>
    <input type='text' placeholder='Generate Password' name='pass' value='Password : ".$det[1]."' ></div>
    <div class='input-field'>
    <input type='submit' value='Edit' name='edit' style='background-color:#2d3b55;color:white;'></div>
    </div>
    </form>
    </div>";
    ?>
</body>
</html>