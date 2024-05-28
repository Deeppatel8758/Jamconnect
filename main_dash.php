<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

echo"
<section style='display:flex;flex-direction:row;widht:100%; background-color:#ededde;'>
       ";
       echo"<div class='nav'  style='position:fixed;height:100%;box-shadow:3px 3px 3px 3px black;border-radius:20px;'>
       <ul style='list-style:none; border:2px solid black;height:900px; background-color:#5095C7;color:white; font-size:20px;margin:0px;padding:0px;width:100%;height:100%;border-radius:20px;'>
           <li style='padding-top:15% ; margin-left:12%;' ><b> Main Dashboard </b></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#adddetails' style='text-decoration:none;color:white;'><b>Add New Aminity </b></a></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#editdetails' style='text-decoration:none;color:white;'><b>View/Edit Details</b></a></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#addtomap' style='text-decoration:none;color:white;'><b>Add To Map</b></a></li><hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#hosadmin' style='text-decoration:none;color:white;'><b>Add Hospital Admin</b></a></li><hr>
          
           
           <ul>
       </div>";

        echo"
        <div class='main' style='background-color:#ededde;width:100%;height:100%;'>
            <section id='adddetails' style='height:700px;margin-left:30%;background-color:white;width:50%; border:3px solid black;border-radius:20px;margin-bottom:800px;'>";
           
            echo"
          
            <form  method='post' >  
            <h1 style='text-align:center;padding-top:3%;font-size:25px;'>Add New Aminity</h1>
            <hr>
            <input type='text' placeholder='Enter Aminity Name :' name='aname' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-top:3%;margin-bottom:3%;' ><br>
             <input type='text' placeholder='Enter Detilas :' value='More Detials' readonly name='details' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;' ><br>
            <input type='text' placeholder='Type Of Aminity' name='type' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;' ><br>
            <input type='text' placeholder='Aminity Photo Link' name='photo' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;' ><br>
            
            <textarea  name='mdetails1' rows='4' cols='50'  style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea><br>
            <textarea  name='mdetails2' rows='4' cols='50'  style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea><br>
            <textarea  name='mdetails3' rows='4' cols='50'  style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea><br>
            
            <input type='text' placeholder='Google Map Link' name='map'  style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'><br>
            <input type='submit' name='bus' style='margin-left:40%;color:white;background-color:green;height:40px;font-size:20px;border-radius:6px;width:20%;'><br>
            </form>
            
           
            
            
            </section>";
            if(isset($_POST['bus'])){
  
                $aname=$_POST['aname'];
                
                $details=$_POST['details'];
                $mdetails=$_POST['mdetails1'];
                $mdetails1=$_POST['mdetails2'];
                $mdetails2=$_POST['mdetails3'];
                $type=$_POST['type'];
                $photo=$_POST['photo'];
                $map=$_POST['map'];
                
                $conn = mysqli_connect('localhost','root','','jamdata');
                $qrr="INSERT INTO facility(name,keynote,details,photo,moredetails,moredetails2,moredetails3,gmap) VALUES('$aname','$type','$details','$photo','$mdetails','$mdetails1','$mdetails2','$map')";
                
                $run =mysqli_query($conn,$qrr);
                if($run){
                    echo"succ";
                }
                else{
                    echo "fails";
                }
                }
                 
         
       
            
//delet



            echo"
            <section id='editdetails' style='height:800px;margin-left:25%;margin-bottom:00px;'> ";
            if(isset($_POST['del'])){
                $val =$_POST['radio'];
                $conn = mysqli_connect('localhost','root','','jamdata');
                $delete ="delete from facility where radio='$val'";
                 $exe =mysqli_query($conn,$delete);
            }
            //edit
            //edit end
            
            
            $conn = mysqli_connect('localhost','root','','jamdata');
            $qrr1="select * from facility";
            $run1=mysqli_query($conn,$qrr1);
           
            
            
            echo"<form method='post'>";
            echo"<table>";
            echo" 
            <tr>
            <th style='border-top:3px solid black;border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'>name</th>
              <th style='border-top:3px solid black;border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'>Type</th>
              <th style='border-top:3px solid black;border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'>Select</th>
            </tr>
              ";
            while($det=mysqli_fetch_array($run1)){
               echo"
            <tr><td style='border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'>$det[0]</td>
            
            <td style='border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'>$det[2]</td>
            
            <td style='border-left:3px solid black;border-right:3px solid black;border-bottom:3px solid black;font-size:25px;'><input type='radio' value='$det[8]' name='radio'></td></tr>";
            }
            
            echo"</table>";
            echo"<br><input type='submit' name='del' value='Delete Entry' style='margin-left:30%;color:white;background-color:green;height:40px;font-size:20px;border-radius:6px;width:20%;'><br><br>
           
           <a href='#viewdetails'> <input type='submit' name='edit' value='View Details'  style='margin-left:30%;color:white;background-color:green;height:40px;font-size:20px;border-radius:6px;width:20%;' value='View details'></a>";
echo"
            </section>
           ";
            if(isset($_POST['edit'])){
                $val =$_POST['radio'];
                $conn = mysqli_connect('localhost','root','','jamdata');
                $sel ="select * from facility where radio='$val'";
                 $exe =mysqli_query($conn,$sel);
                 $det=mysqli_fetch_array($exe);
                 $_SESSION['amname']=$det[0];
               
                 echo"
                 <section  id='viewdetails' style='height:800px;background-color:white;width:50%;margin-left:30%;border:3px solid black;border-radius:20px;margin-bottom:800px;'>
                
                 <form  method='post' style='margin-left:8%;width:70%;height:600px;border:3px solid black;border-radius:20px;'> 
                 <h1 style='color:black;text-align:center;font-size:25px;' >View Details</h1>
                 <hr>
                 <br>
                <label style='color:black;margin-left:30%;' >Aminity Name</label>
                
                 <input type='text' placeholder='Enter Aminity Name :' name='aname' value='$det[0]' style='margin-top:1%;margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;marign-top:5%;'>
                 <br><label style='color:black;margin-left:30%;' >Details</label><br>
                 <input type='text' placeholder='Enter Detilas :' value='More Detials' readonly name='details'  value='$det[1]' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
                 <br><label style='color:black;margin-left:30%;' >Aminity Type</label>
                 <input type='text' placeholder='Type Of Aminity' name='type'  value='$det[2]' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
                 <br> <label style='color:black;margin-left:30%;' >Aminity Photo Link</label>
                 <input type='text' placeholder='Aminity Photo Link' name='photo'   value='$det[3]' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
                 <br><label style='color:black;margin-left:30%;' >Aminity More Details</label>
            <textarea  name='mdetails1' rows='4' cols='50' style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea  value='$det[4]' >
            <br> <label style='color:black;margin-left:30%;' >More Details</label>
            <textarea  name='mdetails2' rows='4' cols='50' style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea  value='$det[5]' >
            <br><label style='color:black;margin-left:30%;' >More Details</label>
            <textarea  name='mdetails3' rows='4' cols='50' style='margin-left:30%;border:2px solid black;border-radius:6px;margin-bottom:2%;'></textarea  value='$det[6]' >
            <br><label style='color:black;margin-left:30%;' >Google Map Link</label> 
            <input type='text' placeholder='Google Map Link' name='map'  value='$det[7]' style='margin-left:30%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
          
            </form>
                 ";
               
            }
            echo"
            </section>
            <section id='addtomap' style=' margin-left:30%;background-color:white;height:300px;width:40%;border:3px solid black;border-radius:20px;margin-bottom:500px;'>
            <h1 style='color:black;text-align:center;font-size:25px;' >Add To Map</h1>
                 <hr>
                 <br>
            <form action='storejson.php' method='post'>  
            <input type='text' name='longitutude' id='long' placeholder='enter longitude here' style='margin-left:35%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
            <input type='text' name='lat' id='lt' placeholder='enter lattitude here' style='margin-left:35%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
            <input type='text' name='name' id='name' placeholder='namehere' style='margin-left:35%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>

            <input type='submit' id='btn' name='submit'  style='margin-left:40%;color:white;background-color:green;height:40px;font-size:20px;border-radius:6px;width:20%;' >
        </form>
      
                 </section>

                <section id='hosadmin' style=' margin-left:30%;background-color:white;height:300px;width:40%;border:3px solid black;border-radius:20px;margin-bottom:400px;'>
                ";
                if(isset($_POST['reg'])){
                    $conn = mysqli_connect('localhost','root','','login');
                    $id=$_POST['id'];
                    $hos=$_POST['hos'];
                $inn="INSERT INTO auth(name,hospital) VALUES('$id','$hos')";
                 $exe =mysqli_query($conn,$inn);
                }
                echo"
                <h1 style='color:black;text-align:center;font-size:25px;' >Add Hospital Admin</h1>
                <hr>
                <br>
                <form  method='post'>  
                <input type='text' name='id' id='long' placeholder='Enter Emaild Id here' style='margin-left:35%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
                
                <input type='text' name='hos' id='name' placeholder='Enter Hospital Name ' style='margin-left:35%;width:30%;height:30px;border:2px solid black;border-radius:6px;margin-bottom:2%;'>
    
                <input type='submit' id='btn' name='reg'  style='margin-left:40%;color:white;background-color:green;height:40px;font-size:20px;border-radius:6px;width:20%;' >
            </form>
                
                
                </section>
        </div>
    </section>";
?>

</body>
  
</html>