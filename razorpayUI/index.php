<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form style='margin-left:40%;margin-top:10%;background-color:#ededde;height:200px;width:300px;border:3px solid black;border-radius:10px;'>
    <?php
    session_start();
    $amt=$_SESSION['amt'];
    $udata=$_SESSION['udata'];
    
 
    echo"
    <label  style='margin-left:25%;margin-top:5%;'>Name</label>
    <input type='textbox' name='name' id='name' placeholder='Enter your name' value='$udata[2]' readonly style='margin-left:25%;margin-top:5%;'><br><br>
    <label  style='margin-left:25%;margin-top:5%;'>Amount</label>
    <input type='textbox' name='amt' id='amt' placeholder='Enter amt' value='$amt' readonly style='margin-left:25%;margin-top:5%;'><br><br>
    <input type='button' name='btn' id='btn' value='Pay Now' onclick='pay_now()'  style='margin-left:35%;margin-top:5%;color:white;background-color:green;width:30%;'>
</form>";
?>

<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
          
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_mvnML7IlHvZ5gj", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Jamnagar Municipality",
                        "description": "Test Transaction",
                        "image": "https://www.media4growth.com/public/uploads/editor/2020-02-05/1580893078.PNG",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>