
<?php
session_start();


?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    <title>Jamnagar</title>

</head>

<body style="background-color:#ededde;">

    <!-- <script>
        function pop(){
            alert("Your Slot Is Booked succesfully!...");
        }
    </script> -->

       <!-- navbar start -->
       <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid" style="background-color:     #5095C7;">
          <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">Jamconnect > <?php $name = $_GET['next']; echo"$name";?></a>
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
                  <li class="nav-item">
                      <a class="nav-link" href="account.php"  style="color: white; font-weight: bold;font-size: large;">Account</a>
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
<!-- booking start here -->


    <section id="book">

          <div   style="background-color:white; text-align: center;
    margin-left: 25%;
    border: 4px solid;
    border-color: black;
    border-radius: 3%;
    width: 50%;
    padding-top: 2%;
    box-shadow: 5px 5px rgb(124, 122, 118);">

            <?php 
            //  session_start();
         
            
            $fname = $_GET['next'];
            $typekey=$_GET['next2'];
            $_SESSION['fname']=$fname;
            $_SESSION['typekey']=$typekey;
            echo"<h1>
            <b>$fname</b> </h1>
            ";?>
            <?php
            $conn = mysqli_connect('localhost','root','','login');
             
            $capcity="select * from ticket where name='$fname'";
            $fetcap=mysqli_query($conn,$capcity);
            $rowcap = mysqli_fetch_array($fetcap);
           
            $udata=$_SESSION['udata'];
            // while( )
            // {
            //     $uslot2=$rowdate[0];

            // }
            if(isset($_POST['sub'])){
                $price=$_POST['price'];

                $ticket=$_POST['tickets'];
                $_SESSION['amt']=$price*$ticket;
                $_SESSION['qnt']=$ticket;
                if($ticket>$rowcap[1]){
                    echo"<script>alert('Ticket Not Available')</script>";
                }
                elseif($ticket>0AND$ticket<=$rowcap[1]){
        
                $setcapcity="UPDATE ticket SET capcity =capcity-$ticket where name='$fname'";
                $newcap=mysqli_query($conn,$setcapcity);
                // header("location:ticket.php?next=$fname&next2=$typekey");
                header("location:razorpayUI/index.php?next=$fname&next2=$typekey");
            }
        }
           
           
            echo"
            <hr class='new1'>
                <form class='fbook' style='margin-bottom:0;height:270px;'>
                    <div class='f1' style='margin-left:20%'>
                        <label><b>Name</b></label><br>
                        <input type='text' placeholder='Full Name' value='$udata[2]' readonly style='width:78%;'>
                    </div>

                    <div class='f1' style='margin-left:20%'>
                        <label> <b>Contact</b></label><br>
                        <input type='text' placeholder='Mobile No.' value='$udata[3]' readonly style='width:78%;' >
                    </div>

                    <div class='f1' style='margin-left:20%'>
                        <label><b>Adhar Number</b></label><br>
                        <input type='text' name='date' id='date' value='$udata[5]' readonly style='width:78%;'>
                    </div>
                    <div class='f1' style='margin-left:20%'>
                        <label><b>Age</b></label><br>  
                        <input type='text' name='date' id='date' value='$udata[4]' readonly style='width:78%;'>
                    </div>
                   
                    <div class='f1' style='margin-left:20%'>
                        <label><b>Address</b></label><br>
                        <input type='text' name='date' id='date' value='$udata[6]' readonly style='width:78%;'>
                    </div>
                    </form>
                    <form method='post'>
                    <div class='f1' style='margin-left:20%'>
                    <label><b>Available Tickets</b></label><br>
                    <input type='text' name='date' id='date' value='$rowcap[1]' readonly style='width:78%;font-weight:bold;'>
                </div>
                <div class='f1' style='margin-left:20%'>
                    <label><b>Price Per Ticket</b></label><br>
                    <input type='number' name='price' id='date' value='$rowcap[2]' readonly style='width:78%;font-weight:bold;'>
                </div>
                <div class='f1' style='margin-left:20%'>
                <label><b>Number Of Tickets You Want to book</b></label><br>
                <input type='text' name='tickets' id='date'   style='width:78%;font-weight:bold;'>
            </div>
            
            <br>
            <div class='f1' style='margin-left:20%'>
            
            <input type='submit' value='Pay'name='sub' id='date'  readonly style='width:78%;font-weight:bold;margin-bottom:5%;'>
        </div>

                   
                   

                </form> 
                
                </div>";
               
                ?>
             
    </section>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
</body>

</html>