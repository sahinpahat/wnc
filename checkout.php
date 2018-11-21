<!DOCTYPE html>
<html lang="en">

    <?php 
        include_once('include/header-class.php');
    
   ?>

<?php
    if(isset($_POST['order']))
    {
       $nm=htmlentities(addslashes(trim($_POST['name'])));
       $lNm=htmlentities(addslashes(trim($_POST['lName'])));
       $em=htmlentities(addslashes(trim($_POST['email'])));
       $phone=htmlentities(addslashes(trim($_POST['mobile'])));
       $address=htmlentities(addslashes(trim($_POST['address'])));
       $landmark=htmlentities(addslashes(trim($_POST['landmark'])));
       $pin=htmlentities(addslashes(trim($_POST['pincode'])));
       $city=htmlentities(addslashes(trim($_POST['city'])));
       $payment=htmlentities(addslashes(trim($_POST['payment'])));
       $pack=htmlentities(addslashes(trim($_POST['pack'])));
       $Oname=htmlentities(addslashes(trim($_POST['nm'])));
       $price=$_SESSION['p'];
       
       if($payment=='COD')
       {
           $insert="INSERT INTO order_details (`name`,`lName`,`email`,`mobile`,`address`,`landmark`,`pin_code`,`city`,`payment_mode`,`o_pack`,`o_name`,`o_price`) VALUES('".$nm."','".$lNm."','".$em."','".$phone."','".$address."','".$landmark."','".$pin."','".$city."','".$payment."','".$pack."','".$Oname."','".$price."')";
           $run=$con->query($insert);
           if($insert)
           {
               echo "<script>alert('Your order has been successfully placed')</script>";
              
                
               redirect_to('index.php');
           }
       }
       else
       {
           $_SESSION['total_amount']=$price;
           $_SESSION['user_name']=$nm."&nbsp;".$lNm;
           $_SESSION['user_email']=$em;
           $_SESSION['user_phone']=$phone;
           redirect_to('https://organicbeancoffeetea.com/order.php');
       }
    }
?>    
<body class="index-opt-1">

    <div class="wrapper">
       
        
        <!--start header-->
		    <?php include_once('include/header-menu.php');?>
	    <!-- end HEADER -->        
        <!-- MAIN -->
        <main class="site-main checkout">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">checkout</a></li>
                </ol>
            </div>
            <div class="container">
                <form  class="checkout" method="post" name="checkout">
                    <h4 class="title-checkout">Biiling Address</h4>
                    <div class="row">
                        <div class="form-group col-md-6">   
                            <label class="title">First Name*</label> 
                            <input type="text" class="form-control" id="forFName" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-group col-md-6">   
                            <label class="title">Last Name*</label> 
                            <input type="text" class="form-control" id="forLName" name="lName" placeholder="Your last name" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Email Address*:</label>
                            <input type="email" class="form-control" id="forEmail" name="email" placeholder="Type your email" value="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Phone number*</label>
                            <input type="text" class="form-control" placeholder="10 digits format" name="mobile" required maxlength="10">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Address*:</label>
                            <input type="text" class="form-control" placeholder="Street at apartment number" name="address" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Landmark*</label>
                            <input type="text" class="form-control" placeholder="eg:near at your home" name="landmark" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Postcode / ZIP*:</label>
                            <input type="text" class="form-control" placeholder="Your postal code" name="pincode" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="title">Town / City*</label>
                            <input type="text" class="form-control" placeholder="City name" name="city" required>
                        </div>
<?php
$order=$_GET['place'];
$get="SELECT * FROM products WHERE id='$order'";
$run=$con->query($get);
while($row=mysqli_fetch_object($run))
{
    $price=$row->new_price;
    $nm=$row->name;
    $pack=$row->pack;
}
$_SESSION['p']=$price;
?>                        
                        <div class="form-group payment col-md-12">
                            <h4 class="title-checkout">Payment Method</h4>
                            <div class="form-group payment col-md-6">
                            <ul>
                               
                                <li><label class="inline">
                                    <input type="checkbox" name="payment" value="COD"><span class="input"></span>
                                    Cash on Delivery</label>
                                </li></ul></div>
                                
                                <div class="form-group payment col-md-6">
                                <li><label class="inline" ><input type="checkbox" name="payment" value="ONLINE" checked><span class="input"></span>Online</label></li>
                            </ul></div>
                            
                            <span class="grand-total">Grand Total<span>Rs.<?php echo $_SESSION['p'];?>.00</span></span>
                            <input type="hidden" name="pack" value="<?php echo $pack;?>">
                            <input type="hidden" name="nm" value="<?php echo $nm;?>">
                            <button type="submit" class="btn-order" name="order" >Place Order Now</button>
                        </div>
                         
                        
                    </div>
                </form>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
            <?php include('include/footer.php');?>
        <!--end footer-->


</body>


</html>