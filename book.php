
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
         
            
            $hosname = $_GET['next'];
            
            echo"<h1>
            <b>$hosname</b> </h1>";?>
            <?php
            // $conn = mysqli_connect('localhost','root','','login');
             
            // $sdate="select date from slot where hospital='$hosname'";
            // $fetdate=mysqli_query($conn,$sdate);
           
            $udata=$_SESSION['udata'];
            // while( $rowdate = mysqli_fetch_array($fetdate))
            // {
            //     $uslot2=$rowdate[0];

            // }
        
           
            date_default_timezone_set('Australia/Melbourne');
            $date = date('m/d/Y h:i:s a', time());
            echo"
            <hr class='new1'>
                <form class='fbook' style='margin-bottom:20%'>
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
                   
                   

                </form> ";
                ?>
                <form method="post" style="">
                <table class="slot" style="margin-left:20% ;margin-bottom:5%;">
                   <?php
                   if(isset($_POST['btnn'])){
                    $conn = mysqli_connect('localhost','root','','login');
                    $val =$_POST['radiobtn'];
                   
                    $search="select slot from slot where radio='$val'";
                    $fet=mysqli_query($conn,$search);
                   $row = mysqli_fetch_array($fet);
                  
                if($row[0]>0){
                    $udata=$_SESSION['udata'];
                $qrr =" UPDATE slot SET slot = slot - 1 where radio='$val' ";
                $query=mysqli_query($conn,$qrr);

                //entry
                $getdata="select * from slot where radio='$val'";
                $res=mysqli_query($conn,$getdata);
                $uslot=mysqli_fetch_array($res);
                //id pass name contact age addhar add
                //hos docnamedoc spec timefrom time to slot radio
                //hospital	name	contact	adhar	age	addr	doc_name	doc_type	time_from	time_to	slotid
                $insert="INSERT INTO userdata(hospital, name, contact, adhar, age, addr, doc_name, doc_type, time_from, time_to )
                 VALUES ('$uslot[0]','$udata[2]','$udata[3]','$udata[5]','$udata[4]','$udata[6]','$uslot[1]','$uslot[2]','$uslot[3]','$uslot[4]')";
                  $in=mysqli_query($conn,$insert);

                                  //pdf gen
//getting data from database  

$userach="SELECT * FROM userdata where adhar='$udata[5]' AND hospital='$uslot[0]' ORDER BY slotid DESC LIMIT 1";
$user=mysqli_query($conn,$userach);
$html='<h1 style="text-align:center;">'.$hosname.' Hospital</h1> <hr> <table>';
while ($det = mysqli_fetch_array($user)) {
    $html.='
    <tr>
    <th style=" border-left:1px solid black;border-bottom:1px solid black ;border-right:1px solid black;">hospital name</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">patient Name</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">patien Contact</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">patien AdharNo</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">patien Age</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">patien Address</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Doctor Name</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Doctor Speciality</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Slot Start Time</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Slot End Time</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Your Slot ID</th>
    <th  style="border-bottom:1px solid black ;border-right:1px solid black;">Date(YY/MM/DD)</th>

    </tr>
    ';
    $html.='<tr>
    <td style="border-left:1px solid black;border-bottom:1px solid black ;border-right:1px solid black;">'.$det[0].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[1].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[2].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[3].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[4].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[5].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[6].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[7].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[8].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[9].'</td>
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[10].'</td>
    
    <td style="border-bottom:1px solid black ;border-right:1px solid black;">'.$det[11].'</td>
    </tr>';
 
}
 $html.='</table> <p>Pls Carry Your Original Adharcard </p>';

require_once __DIR__ . '/pdfgen/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($html);
            
$rand = rand(0,1000);
$filename='pdf/'.$rand.'.pdf'; 
$mpdf->output($filename,'F');


 $mail =$_SESSION["uname"];
 // Recipient 
$to = "$mail"; 
 
// Sender 
$from = 'pateldeep1162004@gmail.com'; 
$fromName = 'Deep'; 
 
// Email subject 
$subject = 'Appointment Letter Of  '.$hosname.' Hospital';  
 
// Attachment file 
$file = "pdf/$rand.pdf"; 
 
// Email body content 
$htmlContent = ' 
    <h3>Thank you For choosing Jamconnect , Your Booking Details Is attached below </h3> 
     
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  
 
// Email sending status 
echo $mail?"<script>alert('Your Booking Is Sucessfull !! Email is sent to your  registered mail id' );window.location.replace('user_book.php');</script>":"<h1>Email sending failed.</h1>"; 



                }
                else{
                echo"<script>alert('slot is full')</script>";
                
                }

 


                 
              
                }
                
                  
                  ///upadate value ends here

                  $hosname = $_GET['next'];
                     $conn = mysqli_connect('localhost','root','','login');
                     $search="select * from slot where hospital='$hosname' ";
                     $fet=mysqli_query($conn,$search);
                     echo"
                
                     <tr>
                     <th>Docotor Name </th>
                     <th>Speciallit </th>
                     <th>timefrom</th>
                     <th>timeto</th>
                     <th>slot </th>";
                     while($row = mysqli_fetch_array($fet)){
                 echo"   
                </tr>
                <tr>
                    <td style='font-size:20px; font-weight:bold;'>$row[1]</td>
                    <td style='font-size:20px; font-weight:bold;'>$row[2] </td>
                    <td style='font-size:20px; font-weight:bold;'>$row[3] </td>
                    <td style='font-size:20px; font-weight:bold;'>$row[4] </td>
                    <td style='font-size:20px; font-weight:bold;'>";

                    if($row[5]>=0&& $row[5]<10){
                    echo"
                        <div style='border:solid black 2px; border-radius:100%; background-color: red; width:40px; height:40px;align-item:center;'><label style=' font-size:20px; margin-left:30%; ' >$row[5]</label> &nbsp </div>
                     ";   
                    }
                    elseif($row[5]>=10&& $row[5]<20){
                       echo"
                        <div style='border:solid black 2px; border-radius:100%; background-color: yellow; width:40px; height:40px'><label style=' font-size:20px; margin-left=20%;' >$row[5]</label> &nbsp </div>
                    ";
                    }
                    elseif($row[5]>=20){
                        echo"
                     <div style='border:solid black 2px; border-radius:100%; background-color: green; width:40px; height:40px'><label style=' font-size:20px; margin-left:20%;' >$row[5]</label> &nbsp </div>
                    ";
                    }
              
                 echo"
                 </td>
                    <td> <input style='width:30px; border-radius:0;' type='radio' value='$row[6]' name='radiobtn' ></td></tr>";
    } 
echo"</table>

<input type='submit' name='btnn' style='background-color:green; color:white; height:50px;font-size:20px; margin-bottom:3%;width:15%;border-radius:6px;'> </form>";
 //radio working


    
                   ?>
   
</from>
                
             
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