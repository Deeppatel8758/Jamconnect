<?php
session_start();
if(!isset($_SESSION["pass"])){
    header("Location: hos_login.php");
  }
  else{
   
    
  }
  
  
 if(isset($_POST['sub'])){
    
    $dname=$_POST['dname'];
    $dtype=$_POST['dtype'];
    $stime=$_POST['stime'];
    $etime=$_POST['etime'];
    $slot=$_POST['slot'];
    $hos = $_SESSION["hospital"];
    $conn = mysqli_connect('localhost','root','','login');
    $insert ="INSERT INTO slot(hospital,doc_name,dec_spec,time_from,time_to,slot) VALUES('$hos','$dname','$dtype','$stime','$etime','$slot') ";
    $run =mysqli_query($conn,$insert);
    if($run){
        echo"<script>alert('Slot Added Succesfully !!')</script>";
    }
    else{
        echo"<script>Something Went Wrong</script>";
    }

 }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="padding:0px;margin:0px;">



<!-- deletion php -->
<?php
if(isset($_POST['btnn'])){
    $val =$_POST['radiobtn'];
    $conn = mysqli_connect('localhost','root','','login');
    $delete ="delete from slot where radio='$val'";
     $exe =mysqli_query($conn,$delete);
}
if(isset($_POST['udelete'])){
    $val =$_POST['radiobtn2'];
    $conn = mysqli_connect('localhost','root','','login');
    $delete ="delete from userdata where slotid='$val'";
     $exe =mysqli_query($conn,$delete);
}
?>
<!-- deletion end here -->
<?php
$hos=$_SESSION['hospital'];
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: hos_login.php");
}
echo"
<section style='display:flex;flex-direction:row;widht:100%;'>
    <div class='sidenav' style='position:fixed;height:100%;box-shadow:3px 3px 3px 3px black;border-radius:20px;' >
        <ul style='list-style:none; border:2px solid black;height:900px; background-color:#5095C7;color:white; font-size:20px;margin:0px;padding:0px;width:100%;height:100%;border-radius:20px;'>
            <li style='padding-top:15% ; padding-left:12%;font-size:25px;' ><b>$hos Hospital </b></li>
            <hr>
            <li style='margin-top:15% ; margin-left:12%;';><a href='#adddoc' style='text-decoration:none;color:white;'><b>Edit Docotor/Slot Details </b></a></li>
            <hr>
            <li style='margin-top:15% ; margin-left:12%;';><a href='#view' style='text-decoration:none;color:white;'><b>View Slot Details</b></a></li>
            <hr>
            <li style='margin-top:15% ; margin-left:12%;';><a href='#patient' style='text-decoration:none;color:white;'><b>Edit/View Patient Details</b></a></li><hr>
           <form method='post'>
            <li style='margin-top:15% ; margin-left:12%;';><input  type='submit' name='logout'value='Logout' style='background-color:transparent;color:white;font-size:20px;border:0px;font-weight:bold;'></li>
            </form>
            <hr>
            <ul>
    </div>
    <div class='content' style='background-color:#ededde;width:100%;height:100%;'>
    // section end here
  
    <section id='adddoc' style='height:800px;margin-left:40%;margin-top:5%;'>
  
    
<form  method='post'style='height:500px;width:500px;border:2px solid black;background-color:white;border-radius:20px;' >
<h1 style='text-align:center;font-size:25px;'>Add Details</h1>
<hr>
<input type='text' placeholder='Enter Doctor name ' name='dname'style='  margin-top:5%; margin-left:25%;margin-bottom:3%;width:50%;height:30px;border:2px solid black;border-radius:6px;' >
<br>
<input type='text' placeholder='Enter Doctor Speciality ' name='dtype' style='margin-left:25%;margin-bottom:3%;width:50%;height:30px;border:2px solid black;border-radius:6px;'>
<br>
<label style='margin-left:25%;'>Enter Start Time</label ><br>
<input type='time' name='stime' style='margin-left:25%;margin-bottom:3%;width:50%;height:30px;border:2px solid black;border-radius:6px;'> <br>
<label  style='margin-left:25%;'>Enter end  Time</label ><br>
<input type='time' name='etime' style='margin-left:25%;margin-bottom:3%;width:50%;height:30px;border:2px solid black;border-radius:6px;'> <br>

<input type='number' name='slot'placeholder ='enter number of slots ' style='margin-left:25%;margin-bottom:3%;width:50%;height:30px;border:2px solid black;border-radius:6px;'><br>
<input type='submit' name='sub' style='background-color:green; color:white; height:40px;font-size:20px; margin-top:3%;width:20%;border-radius:6px;margin-left:40%;'>

</form>
    </section>
<section id='view'  style='height:800px;margin-left:50%;margin-left:25%;'>
<h1 style='font-size:30px;margin-top:2%;'>View Slot Details</h1>
<hr>

<form action='' method='post'>
<table  style='width:90%;'>";
    
     $conn = mysqli_connect('localhost','root','','login');
     $hos = $_SESSION['hospital'];
     $search ="select * from slot where hospital='$hos' ";
     $run =mysqli_query($conn,$search);

     
     echo"
                
                     <tr >
                     <th style='border-right:3px solid black;border-bottom:3px solid black;border-left:3px solid black;font-size:20px; border-top:3px solid black;'>Docotor Name </th>
                     <th style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Speciallit </th>
                     <th style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>timefrom</th>
                     <th style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>timeto</th>
                     <th style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>slot </th>
                     <th style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;border-top:3px solid black;'>Select For Delete </th>";
                     
                     while($row = mysqli_fetch_array($run)){
                        echo"   
                       </tr>
                       <tr >
                           <td style=' border-left:3px solid black;border-right:3px solid black; border-bottom:3px solid black;font-size:20px;'>$row[1]</td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row[2] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row[3] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row[4] </td>
                           ";

                        echo" <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>";

                    if($row[5]>=0&& $row[5]<10){
                    echo"
                        <div style='border:solid black 3px; border-radius:100%; background-color: red; width:40px; height:40px;align-item:center;'><label style=' font-size:20px; margin-left:30%; ' >$row[5]</label> &nbsp </div>
                     ";   
                    }
                    elseif($row[5]>=10&& $row[5]<20){
                       echo"
                        <div style='border:solid black 3px; border-radius:100%; background-color: yellow; width:40px; height:40px'><label style=' font-size:20px; margin-left:20%;' >$row[5]</label> &nbsp </div>
                    ";
                    }
                    elseif($row[5]>=20){
                        echo"
                     <div style='border:solid black 3px; border-radius:100%; background-color: green; width:40px; height:40px'><label style=' font-size:20px; margin-left:20%;' >$row[5]</label> &nbsp </div>
                    ";
                    }
                    echo "</td>
                    <td style='border-right:solid black 3px;border-bottom:3px solid black;'> <input type='radio' value='$row[6]' name='radiobtn' style='width:70%;height:20px;' ></td>";
                    echo "</tr>";

                }
             
           

echo"

</table>
<input type= 'submit'name='btnn' value ='delete selected' style='background-color:green; color:white; height:40px;font-size:20px; margin-top:3%;width:15%;border-radius:6px;margin-left:35%;'>

 </form>  </section>";
 echo"
<section id='patient'  style='height:800px;padding-left:20%;'>
<h1 style='font-size:25px;margin-top:2%;'>View Patient Details</h1>

";

echo"
<form  method='post'>
<table style='width:90%;'>";
    
    
   
     $search1 ="select * from userdata where hospital='$hos' ";
     $run1 =mysqli_query($conn,$search1);

     
     echo"<tr >
                     <th style='border-top:3px solid black;border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Patient Name </th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Patient Contact </th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Patient Adhar</th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Age </th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Address</th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Doctor Name</th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Doctor Speciality</th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Slot Start Time </th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Slot End Time </th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Slot Id</th>
                     <th style='border-top:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:28px;'>Select </th>";
                     
                     
                     
                     while($row1 = mysqli_fetch_array($run1)){
                        echo"   
                       </tr>
                       <tr >
                           <td style='border-left:3px solid black;border-right:3px solid black; border-bottom:3px solid black;font-size:20px;'>$row1[1]</td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[2] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[3] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[4] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[5] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[6] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[7] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[8] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[9] </td>
                           <td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'>$row1[10] </td>
                           

                           ";

                      

                    echo"<td style='border-right:3px solid black;border-bottom:3px solid black;font-size:20px;'> <input type='radio' value='$row1[10]' name='radiobtn2' ></td>";
                    echo "</tr>";

                }
          
           

echo"

</table>
<input type= 'submit'name='udelete'style='background-color:green; color:white; height:40px;font-size:20px; margin-top:3%;width:15%;border-radius:6px;margin-left:35%;' value ='delete selected'>
 </form>   
</section>



</div>   
</section> 

";
?>


  
<!-- 
 <form action="" method='post'>
<table>
    
    //  $conn = mysqli_connect('localhost','root','','login');
    //  $hos = $_SESSION["hospital"];
    //  $search ="select * from userdata where hospital='$hos' ";
    //  $run =mysqli_query($conn,$search);

     
    //  echo"
                
    //                  <tr >
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>Docotor Name </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>Speciallit </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>timefrom</th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>timeto</th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>Select For Delete </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>
    //                  <th style='border-right:1px solid black;border-bottom:1px solid black;'>slot </th>";
                     
                     
                     
    //                  while($row = mysqli_fetch_array($run)){
    //                     echo"   
    //                    </tr>
    //                    <tr >
    //                        <td style='border-right:1px solid black; border-bottom:1px solid black;'>$row[1]</td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[2] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[3] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[4] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[5] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[6] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[7] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[8] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[9] </td>
    //                        <td style='border-right:1px solid black;border-bottom:1px solid black;'>$row[10] </td>
                           

    //                        ";

                      

    //                 echo"<td> <input type='radio' value='$row[10]' name='radiobtn2' ></td>";
    //                 echo "</tr>";

    //             }
    //          echo"  <input type= 'submit'name='udelete' value ='delete selected'>";
           



</table>

 </form>     -->


</body>
</html>