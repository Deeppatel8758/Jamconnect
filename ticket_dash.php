
</head>
<body style='background-color:#ededde;'>
    <?php
    session_start();$fname=$_SESSION['facility'];
    echo"
    <div class='main' style='display:flex ;flex-direction:row; '>
    <div class='nav' style='position:fixed;height:100%;box-shadow:3px 3px 3px 3px black;border-radius:20px;'>
       <ul style='list-style:none; border:2px solid black;height:900px; background-color:#5095C7;color:white; font-size:20px;margin:0px;padding:0px;width:100%;height:100%;border-radius:20px;'>
           <li style='padding-top:15% ; margin-left:12%;' ><b> $fname </b></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#view_details' style='text-decoration:none;color:white;'><b>View/Verify Ticket </b></a></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#Edit' style='text-decoration:none;color:white;'><b> Details </b></a></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='#editcapacity' style='text-decoration:none;color:white;'><b>Edit Capactiy </b></a></li>
           <hr>
           <li style='margin-top:15% ; margin-left:12%;';><a href='ticket_login.php' style='text-decoration:none;color:white;'><b>Logout </b></a></li>
           <hr>
          
           
           <ul>
       </div>
        <div class='content' style='margin-left:20%;margin-right:10%;'>
            <section id='view_details'  style='margin-left:0%;height:800px;margin-top:10%;'>
                <div class='form' style='border:2px solid black; background-color:white;box-shadow:2px 2px 2px 2px black;border-radius:15px;'>
                <h2 style='text-align:center'>Enter Payment Id To Verify Ticket</h2>
                <hr>
                <form action='' method='post' '>
                    <input type='text' name='paymentid' placeholder='Enter Ticket Id' style='margin-left:25%;margin-top:5%;height:30px;border-radius:6px;border:2px solid black;width:450px;'>
                    <input type='submit' name='sub' value='search' style='margin-left:40%;margin-top:2%;height:30px;width:20%;font-size:20px;border-radius:6px;background-color:green;color:white;'>
                 </form>

                ";
                echo"<form method='post'>";
                if(isset($_POST['sub'])){
                    $pay=$_POST['paymentid'];
                    $_SESSION['payid']=$pay;
                    $conn = mysqli_connect('localhost','root','','login');
                    $qrr="select * from payment where id='$pay'";
                    $run=mysqli_query($conn,$qrr);
                    $det=mysqli_fetch_array($run);
                    echo"
                    
                    <table style='margin-left:32%;'>
                    <tr>
                    <th style='border-right:2px solid black;border-bottom:2px solid black;border-left:2px solid black;;border-top:2px solid black;' >PAY ID</th><th style='border-right:2px solid black;border-bottom:2px solid black;border-top:2px solid black;'>Amount</th>
                    <th style='border-right:2px solid black;border-bottom:2px solid black;;border-top:2px solid black;'>Verificatin</th>

                    </tr>
                    <tr>
                    <td style='border-right:2px solid black;border-bottom:2px solid black;border-left:2px solid black;' >$det[4]</td>
                    <td style='border-right:2px solid black;border-bottom:2px solid black'>$det[2]</td>
                ";
                if($det[12]=='1'){
                    echo"<td style='border-right:2px solid black;border-bottom:2px solid black'>Used</td>";
                }
                else{
                    echo"<td style='border-right:2px solid black;border-bottom:2px solid black'><input type='submit' value='Verify' name='ver'></td>";
                }
                echo"
                    </tr>
                    </table>
                    </form>
                    </div>
                    ";
                 
                }
                if(isset($_POST['ver'])){
                    $pay2=$_SESSION['payid'];
                     echo"<h2 style='text-align:center;'>Verified</h2>";
                     $conn = mysqli_connect('localhost','root','','login');
                     $qrr2="UPDATE payment SET used='1' where id='$pay2'";
                 $run2=mysqli_query($conn,$qrr2);
                 }

                
echo"
            </section>
            <section id='Edit' style='margin-bottom:50%;' >";
            $conn = mysqli_connect('localhost','root','','login');
            $fname=$_SESSION['facility'];
            $dis="select * from payment where facilityname='$fname'";
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
       while( $details=mysqli_fetch_array($tdet)){
      
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
           
        echo"  </table></section >

        <section id='editcapacity'>";
        if(isset($_POST['change'])){
            $inputcap=$_POST['inp'];
            $conn = mysqli_connect('localhost','root','','login');
            $fname=$_SESSION['facility'];
            $dis="UPDATE ticket SET capcity='$inputcap' where name='$fname'";
        $tdet=mysqli_query($conn,$dis);
        if($tdet){
            echo"<script>alert('Capacity Updated')</script>";
        }
        else{
            echo"<script>alert('Something Went Wrong')</script>";
        }
        }
        $conn = mysqli_connect('localhost','root','','login');
        $fname=$_SESSION['facility'];
        $capq="select capcity from ticket where name='$fname'";
    $cap=mysqli_query($conn,$capq);
    $caparr=mysqli_fetch_array($cap);
        echo"
        <div class='form' style='border:2px solid black; background-color:white;box-shadow:2px 2px 2px 2px black;border-radius:15px;margin-bottom:20%;'>
        <h2 style='text-align:center'>Enter Payment Id To Verify Ticket</h2>
        <hr>
        <form action='' method='post' >
        <br>
        <label style='margin-left:35%;font-size:20px;font-weight:bold;'>Current Availabel Capicity:$caparr[0]</label><br>
            <input type='text' name='inp' placeholder='Enter New Capacity' style='margin-left:25%;margin-top:5%;height:30px;border-radius:6px;border:2px solid black;width:450px;'>
            <input type='submit' name='change' value='Change' style='margin-left:40%;margin-top:2%;height:30px;width:20%;font-size:20px;border-radius:6px;background-color:green;color:white;margin-bottom:2%;'>
         </form>
         </div>
        </section>
        </div>
    </div>";
    ?>
</body>
</html>