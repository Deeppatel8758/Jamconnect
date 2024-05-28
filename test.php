<?php
session_start();

?>
<html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
    <!-- <script src="index.js"></script> -->
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

    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid" style="background-color:     #5095C7;">
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
                      <a class="nav-link" href="index.php"  style="color: white; font-weight: bold;font-size: large;">Account</a>
                  </li>
                  <!-- <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li> -->
              </ul>
              <form class="d-flex" role="search" method="post">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="margin-top: 6%;width: 100%; "name="keynote">
                  <button class="btn btn-outline-success" type="submit"  style="color: 5095C7; border: white 1px solid; background-color: white; height: 45px;width: 90px; margin-left: 2%;margin-top: 5%;" name="btnn">Search</button>
              </form>
          </div>
      </div>
  </nav>
    <div class="container" style="display: flex; flex-direction: row;margin-top: 2%; background-color: white;border: 0px solid black; box-shadow: 5px 5px 5px 5px black; border-radius: 20px;">
      <div id="map" style="width: 70%;margin-top: 2%;margin-left: 2%;margin-right: 2%; height: 650px; border: 4px solid  #5095C7; border-radius: 20px; margin-bottom: 2%;">
      </div>
      <div class="serach" style=" border: 4px solid  #5095C7; border-radius: 20px;width: 24%;margin-top: 2%; background-color: white; margin-bottom: 2%;" >
        <h2 style=" margin-top: 2%; width: 100%; text-align: center;justify-content: center;">More Info </h2><hr>
        <div id="details" >
       
        <?php

        
        $conn = mysqli_connect('localhost','root','','jamdata');
       
    //    //full map
    if(!isset($_POST['btnn'])){
       echo"
             
       <script>
    
          let data= [];
       
       var details=new Array();
       var long  =[];
       var lat =[];
       var names=[];
     fetch('cordi2.json')
     .then(response => response.json())
     .then(data=>{
     showInfo(data);
     // You can use the 'long' array here, or you can call a function that uses it.
     // For example:
     dosomthing();
     
     
     });
     
     
     function showInfo(data){
     
       details=data;
       // console.log(details)
      
       for(let i=0; i<details.length;i++){
         long[i]=details[i].longitutude;
         
     
       }
       for(let i=0; i<details.length;i++){
         lat[i]=details[i].lat;
         
     
       }
       for(let i=0; i<details.length;i++){
         names[i]=details[i].name;
         
     
       }
      
     
       
     }
     
     function dosomthing(){
       
         // let name2=name.toString();
     console.log(long[0]);
     L.mapquest.key = 'I4nu7wwD1HNdxPXcOxy3MkftSTnZX0lf';
     
     var map = L.mapquest.map('map', {
       center: [22.468550634769795, 70.06355428136122],
       layers: L.mapquest.tileLayer('map'),
       zoom: 14
     });
     
     
     for(let i=0;i<long.length;i++){
        
             L.marker([long[i],lat[i]]).addTo(map).bindPopup(names[i])
     .openPopup();
     
        
     
     }
     map.addControl(L.mapquest.control());
     
     
     }
     
     
     
     
     
     </script>";};
       //map end here
        // $lid =$_SESSION['keynote'];
        
        if(isset($_POST['btnn'])){
            
            $key=$_POST['keynote'];
            $query = "SELECT * FROM facility WHERE keynote ='$key'";

            $result = mysqli_query($conn,$query);
            $row_count = mysqli_num_rows($result);
        //    $i=0;
        //     $name=array();
              
        //   while( $row=mysqli_fetch_array($result))
        //        {
                
        //             $name[$i]=$row[0];
        //             $i++;
        //         }

                
                  
        //        for($i=0;$i<count($name);$i++){
        //         echo"$name[$i]";
        //     }
        //     $size=count($name);
        //      //one result 
                    
            echo"
             
       <script>
    
      let name='$key';
          let data= [];
       
       var details=new Array();
       var long  =[];
       var lat =[];
       var names=[];
     
     fetch('cordi1.json')
     .then(response => response.json())
     .then(data=>{
     showInfo(data);
     // You can use the 'long' array here, or you can call a function that uses it.
     // For example:
     dosomthing();
     
     
     });
     
     
     function showInfo(data){
     
       details=data;
       // console.log(details)
      
       for(let i=0; i<details.length;i++){
         long[i]=details[i].longitutude;
         
     
       }
       for(let i=0; i<details.length;i++){
         lat[i]=details[i].lat;
         
     
       }
       for(let i=0; i<details.length;i++){
         names[i]=details[i].name;
         
     
       }
      
     
       
     }

 


     
     function dosomthing(){
       
         // let name2=name.toString();
     console.log(long[0]);
     L.mapquest.key = 'I4nu7wwD1HNdxPXcOxy3MkftSTnZX0lf';
     
     var map = L.mapquest.map('map', {
       center: [22.468550634769795, 70.06355428136122],
       layers: L.mapquest.tileLayer('map'),
       zoom: 14
     });
     
     
     for(let i=0;i<long.length;i++){
        if(names[i]===name){

        
             L.marker([long[i],lat[i]]).addTo(map).bindPopup(names[i])
     .openPopup();
        }
         
     
     
     }
     map.addControl(L.mapquest.control());
     
     
     }
     
     
     
     
     
     </script>";
             //one result end

            
            if($result)
            {

                 if ($row_count == 0)
                    {
                        

                        echo "No record found!";

                    }

                    else{
                        echo "<table border='1px'  align='center' cellspacing='' cellpadding='15' width='100%' margin-top= '40px'>";
                        echo "<tr>
                                <th  style='border-right:1px solid black;'>Amenity Name </th>
                                
                                <th  style='border-right:1px solid black;'>About</th>
                                <th > Available Slot </th>
                               
                            </tr> ";
                            
                            while($row = mysqli_fetch_array($result))
                            {
                                
                              
            
            
                                        if($row[5]=='hospital'){
                                            echo "<tr style='border-top:1px solid black; '>
                                            <td  style='border-right:1px solid black;'> " . $row[0] . " </td>
                                            <td  style='border-right:1px solid black;'> <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td style='border-right:1px solid black;'>  <a href='book.php?next=".$row[0]."'>" . $row[4] . "</a> </td>
                                           
                                         
                        
                                            </tr>  ";

                                        }
                                        else{
                                            echo "<tr>
                                            <td> " . $row[0] . " </td>
                                            <td > <a href='details.php?next=".$row[0]."'>" . $row[1] . "</a> </td>
                                            <td> <a href='ticket.html'>" . $row[4] . "</a> </td>
                                           
                                         
                        
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


