<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.php" media="screen">

</head>
<body style='background-color:#ededde;'>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid" style="background-color:     #5095C7;">
          <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">Jamconnect >Your bookings</a>
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
</body>
</html>




<?php
session_start();
$conn = mysqli_connect('localhost','root','','login');
$udata=$_SESSION['udata'];
$userach="SELECT * FROM userdata where adhar='$udata[5]' ";;
$user=mysqli_query($conn,$userach);
echo"<div style='display:flex;flex-direction:column;margin-left:10%;margin-right:10%;'>";
echo"<div>
<h2>Hospital Bookings</h2>
<hr><br>
<table>";
echo"
<tr>
<th style=' border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;border-top:3px solid black;'>hospital name</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>patient Name</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>patien Contact</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>patien AdharNo</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>patien Age</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>patien Address</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Doctor Name</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Doctor Speciality</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Slot Start Time</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Slot End Time</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Your Slot ID</th>
<th  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Date(YY/MM/DD)</th>

</tr>
";
while ($det = mysqli_fetch_array($user)) {
  
   
    echo"<tr>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>$det[0]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[1]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[2]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[3]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[4]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[5]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[6]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[7]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[8]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[9]</td>
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[10]</td>
    
    <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$det[11]</td>
    </tr>";
 
}
echo"</table> </div>";

echo"<div style='margin-bottom:2%;'> <h2  style='margin-top:2%;'>Ticket Bookings</h2>
<hr><br>";
$conn = mysqli_connect('localhost','root','','login');
        
            $dis="select * from payment where adhar='$udata[5]'";
        $tdet=mysqli_query($conn,$dis);
        echo"<table>

        <tr>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Name</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Amount</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Payment Status</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>payment id</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Date </th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>facility name</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>contact</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Adhar No</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Age</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Address</th>
        <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>Type</th>
        </tr>";
       while($details=mysqli_fetch_array($tdet)){
      
        echo"

        <tr>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-left:3px solid black;'>'$details[1]'</td>
        <td  style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[2]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[3]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[4]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[5]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[6]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[7]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[8]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[9]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[10]'</td>
        <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>'$details[11]'</td>


        </tr>
      ";
       }
           
echo"
</div>";
echo"</div>";

?>