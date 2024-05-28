<?php
session_start();

?>
<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
    <script src="index.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.php" media="screen">
    <!-- <script type="text/javascript">

// map.on('click', onMapClick);
    </script> -->
  </head>

  <body style="border: 0; margin: 0; background-color:#ededde;">

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0px;margin:0px;" >
      <div class="container-fluid" style="background-color: #5095C7"style="padding:0px;">
          <a class="navbar-brand" href="#" style="color: white; font-weight: bold;">Jamconnect</a>
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
             
          </div>
      </div>
     
  </nav>
  <form  role="search" class="d-flex" method="post" style="background-color:#5095C7;padding-top:0;margin-top:0;padding-bottom:1%;padding-left:1.5%;">
                  <input  class="form-control me-2"  type="search" placeholder="Search" aria-label="Search" style="margin-top: 0%;width: 92%;"name="keynote">
                  <button  class="btn btn-outline-success" type="submit"  style="color: 5095C7; border: white 1px solid; background-color:transperant;border:0px solid black;color:white; height: 45px;width: 90px; margin-left: 1%;margin-top: 0%;" name="btnn"><b>Search</b></button>
              
               </form> 
  <!--   -->
   
 <div style='margin-left: 7%;margin-right: 2%;display:flex;flex-direction:row;'> 
 <form method='post' style='display:flex;flex-direction:row;'>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' name='hos' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'>Hospital</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' name='lake' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'>Lake</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'>Museum</button></div>
    <div style='height:50px;width:180px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='margin-right:2%;background-color:white;border:0px;margin-top:4%;font-size:20px;font-weight:bold;width:150px;padding:0px;'>Historical Place</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:0%;margin-top:8%;font-size:20px;font-weight:bold;'>University</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'>Temple</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:8%;margin-top:6%;font-size:20px;font-weight:bold;'> Townhall</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'> Park</button></div>
    <div style='height:50px;width:140px;border:0px solid black;margin-right:2%;background-color:white;border-radius:5px;box-shadow:2px 2px 2px 2px black;'><button type='submit' style='background-color:white;border:0px;margin-left:14%;margin-top:6%;font-size:20px;font-weight:bold;'> School</button></div>
</form>
 </div>
    <div class="container" style="display: flex; flex-direction: row;margin-top: 2%; background-color: white;border: 0px solid black; box-shadow: 5px 5px 5px 5px black; border-radius: 20px;">
   
    
    <div id="map" style="width: 70%;margin-top: 2%;margin-left: 2%;margin-right: 2%; height: 650px; border: 4px solid  #5095C7; border-radius: 20px; margin-bottom: 2%;">
      </div>
      <div class="serach" style=" border: 4px solid  #5095C7; border-radius: 20px;width: 24%;margin-top: 2%; background-color: white; margin-bottom: 2%;" >
      
      <h2 style=" margin-top: 2%; width: 100%; text-align: center;justify-content: center;">More Info </h2><hr>
        <div id="details" >
       
        <?php

        
        $conn = mysqli_connect('localhost','root','','jamdata');
     
        // $lid =$_SESSION['keynote'];
        
        if(isset($_POST['btnn'])){
            
            $key=$_POST['keynote'];
            $query = "SELECT * FROM facility WHERE keynote ='$key' OR name='$key'";
            $result = mysqli_query($conn,$query);
            $row_count = mysqli_num_rows($result);
            if($result)
            {
                 if ($row_count == 0)
                    {
                        echo "No record found!";
                    }

                    else{
                        echo "<table border='1px'  align='center' cellspacing='' cellpadding='10' width='100%' margin-top= '40px'>";
                        echo "<tr>
                                <th  style='border-right:1px solid black;'> Name </th>
                                
                                <th  style='border-right:1px solid black;'>About</th>
                                <th > Booking </th>
                               
                            </tr> ";
                            
                            while($row = mysqli_fetch_array($result))
                            {
                                     if($row[2]=='hospital'){
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td  style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td  style='border-right:1px solid black;'> <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'>  <a href='book.php?next=".$row[0]."'>Book Slot</a> </td>
                                            </tr>  ";

                                        }
                                        else{
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td style='border-right:1px solid black;' > <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'> <a href='ticket.php?next=".$row[0]."&next2=".$row[2]."'>book slot</a> </td>
                                            </tr>  ";
                                        }
                      
                         }
      
                         }
                    
            }

        }
        if(isset($_POST['hos'])){
              
            
            $query = "SELECT * FROM facility WHERE keynote ='hospital' ";
            $result = mysqli_query($conn,$query);
            $row_count = mysqli_num_rows($result);
            if($result)
            {
                 if ($row_count == 0)
                    {
                        echo "No record found!";
                    }

                    else{
                        echo "<table border='1px'  align='center' cellspacing='' cellpadding='10' width='100%' margin-top= '40px'>";
                        echo "<tr>
                                <th  style='border-right:1px solid black;'> Name </th>
                                
                                <th  style='border-right:1px solid black;'>About</th>
                                <th > Booking </th>
                               
                            </tr> ";
                            
                            while($row = mysqli_fetch_array($result))
                            {
                                     if($row[2]=='hospital'){
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td  style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td  style='border-right:1px solid black;'> <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'>  <a href='book.php?next=".$row[0]."'>Book Slot</a> </td>
                                            </tr>  ";

                                        }
                                        else{
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td style='border-right:1px solid black;' > <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'> <a href='ticket.php?next=".$row[0]."&next2=".$row[2]."'>book slot</a> </td>
                                            </tr>  ";
                                        }
                      
                         }
      
                         }
                    
            }
        }
        //lake

        if(isset($_POST['lake'])){
              
            
            $query = "SELECT * FROM facility WHERE keynote ='lake' ";
            $result = mysqli_query($conn,$query);
            $row_count = mysqli_num_rows($result);
            if($result)
            {
                 if ($row_count == 0)
                    {
                        echo "No record found!";
                    }

                    else{
                        echo "<table border='1px'  align='center' cellspacing='' cellpadding='10' width='100%' margin-top= '40px'>";
                        echo "<tr>
                                <th  style='border-right:1px solid black;'> Name </th>
                                
                                <th  style='border-right:1px solid black;'>About</th>
                                <th > Booking </th>
                               
                            </tr> ";
                            
                            while($row = mysqli_fetch_array($result))
                            {
                                     if($row[2]=='hospital'){
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td  style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td  style='border-right:1px solid black;'> <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'>  <a href='book.php?next=".$row[0]."'>Book Slot</a> </td>
                                            </tr>  ";

                                        }
                                        else{
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td style='border-right:1px solid black;' > <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'> <a href='ticket.php?next=".$row[0]."&next2=".$row[2]."'>book slot</a> </td>
                                            </tr>  ";
                                        }
                      
                         }
      
                         }
                    
            }
        }
            ?>


             



             
        </div>
      </div>
    </div>
    <div style="margin-top: 2%;"></div>
  </body>
</html>


