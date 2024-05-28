<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#ededde;">
       <!-- navbar start -->
       <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid" style="background-color:     #5095C7;">

          <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">Jamconnect ><?php $name = $_GET['next']; echo"$name";?></a>
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
     $name = $_GET['next'];

     $conn = mysqli_connect('localhost','root','','jamdata');
     $query = "select photo from facility where name='$name'";
     $query2 = "select gmap from facility where name='$name'";
     $par="select moredetails,moredetails2,moredetails3 from facility where name='$name'";


            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
         
            $result2 = mysqli_query($conn,$par);
            $row2 = mysqli_fetch_array($result2);
            
            $result3 = mysqli_query($conn,$query2);
            $row3 = mysqli_fetch_array($result3);
          
          
            
    echo"
    <section class='detials' style=' display:flex;
    flex-direction:row; margin-left:15%; margin-top:5%; background-color:white; width:70%;border-radius:20px; box-shadow: 5px 5px 5px 5px black;' >
    <div class='photo' style='box-shadow: 3px 3px 3px 3px black; width:30%; border-radius:10px; height:300px; margin-right:10%; margin-top:8%;margin-left:10%; '>
  
    <img   style=' width:100%;height:100%; border-radius:10px; 'src='$row[0]' alt='hos' >
    <button style='margin-top:10%;margin-left:15%; background-color:green;border-radius:6px;height:40px;'> <a style='color:white;text-decoration:none;' href='$row3[0]' target='_blank'>Get Direction In Google Maps</a></button>
     
</div>
<div class='detlas' style=' width:40%;height:500px;'>

<h1 style='text-align:center;margin-top:2%;'>$name</h1><hr>
            <ul>
            <li><p>'$row2[0]'</p></li>
            <li><p>'$row2[1]'</p></li>
            <li><p>'$row2[2]'</p></li>

            </ul>
            </div>

    </section>";
  ?>
</body>
</html>