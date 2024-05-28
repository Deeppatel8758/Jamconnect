<?php
session_start();
include('db.php');
$fname=$_SESSION['fname'];
$typekey=$_SESSION['typekey'];

if(isset($_POST['amt']) && isset($_POST['name'])){
    $udata=$_SESSION['udata'];
   
    
    
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,added_on,facilityname,contact,adhar,age,addr,keynote) values ('$name','$amt','$payment_status','$added_on','$fname','$udata[3]','$udata[5]','$udata[4]','$udata[6]','$typekey')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
             
    $paydet="";
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
    

 //pdf gen 
    $ticket=$_SESSION['qnt'];
   
    $result=mysqli_query($con,"select * from payment where payment_id='$payment_id'");
    $det=mysqli_fetch_array($result);
    $unit=intdiv($det[2],$ticket);
    $html='
   <div  style="width: 80%;
   margin: auto;">
       <div  style="text-align: center;
       padding: 20px;
       background-color: #f2f2f2;">
           <h2 style="font-size:25px;">Ticket<br>Payemnt Id:'.$det[4].'</h2>
           
           <p>Date:'.$det[5].'</p>
       </div>
   
       <div  style="padding: 20px;">
           <table  style=" width: 100%;
           border-collapse: collapse;
           margin-top: 20px;">
               <thead>
               <tr>
                   <th  style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">Name</th>
                   <th style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">Place Name</th>
                   <th style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">No. Of Ticket</th>
                   <th style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">Unit Price</th>
               <th style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">Ticket Id</th>
                   <th style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">Total</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$det[1].'</td>
                   <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$det[6].'</td>
                   <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$ticket.'</td>
                   <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$unit.'</td>
                   
                <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$det[0].'</td>
               <td style="  border: 1px solid #ddd;
               padding: 8px;
               text-align: left;">'.$det[2].'</td>
              
               </tr>
            
               </tbody>
           </table>
   
           
       </div>
   </div>
   
    
    ';
    require_once __DIR__ . '/pdfgen/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    
    $mpdf->WriteHTML($html);
                
    $rand = rand(0,1000);
    $filename='pdf/'.$rand.'.pdf'; 
    $mpdf->output($filename,'F');

    //mail send



    $mail =$_SESSION["uname"];
    // Recipient 
   $to = "$mail"; 
    
   // Sender 
   $from = 'pateldeep1162004@gmail.com'; 
   $fromName = 'Jamconnect'; 
    
   // Email subject 
   $subject = 'Ticket For '.$det[6].' ';  
    
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
   echo $mail?"<script>alert('Your Booking Is Sucessfull !! Email is sent to your  registered mail id' ) </script>":"<h1>Email sending failed.</h1>"; 
   
   
   
                   
    

   

}



   

?>