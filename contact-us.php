<!DOCTYPE html>
<html lang="en">

	<?php include_once('include/header-class.php');?>
<body class="index-opt-1">

    <div class="wrapper">
       <!--start header-->
			<?php include_once('include/header-menu.php');?>
		<!-- end HEADER -->          
        <!-- MAIN -->
        <main class="site-main contact-us">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">Contact Us</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="contact-map full-width">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.346845928909!2d77.03095931467985!3d28.61936508242307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d05478638149f%3A0x3478a5062c930123!2sDwarka+Mor!5e0!3m2!1sen!2sin!4v1533899611985" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
<?php
if(isset($_POST['submit']))
{
	$name=htmlentities(addslashes(trim($_POST['name'])));
	$email=htmlentities(addslashes(trim($_POST['email'])));
	$mobile=htmlentities(addslashes(trim($_POST['mobile'])));
	$msg=htmlentities(addslashes(trim($_POST['message'])));
	
	$insert = "INSERT INTO `enquiry`(`name`,`mobile`,`email`,`msg`) VALUES('".$name."','".$mobile."','".$email."','".$msg."')";
	$run = $con->query($insert);
	
	//mail function
	$subject = "Enquiry Form";
	//$from = $email;
	$to = "info@organicbeancoffeetea.com";
	$message = 'Name is:'.$name."\n".'Mobile No:'.$mobile."\n".'Email Id:'.$email."\n".'Message:'.$msg."\n";
	mail($to,$subject,$message);
	
	if($insert==true)
	{
		echo "<script>alert('Your Enquriy was sent successfully')</script>";
	}
}

?>
                    <form class="form-contact" method="post">
                        <div class="col-md-5">
                            <div class="contact-info">
                                <h5 class="title-contact">Leave a Message</h5>
                                <p class="form-row form-row-wide">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" value="" name="name" placeholder="First name" class="input-text" required autocomplete="off">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" value="" name="email" placeholder="Email Id" class="input-text" required autocomplete="off">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Phone Number<span class="required"></span></label>
                                    <input type="text" value="" name="mobile" placeholder="Mobile no" class="input-text" required autocomplete="off" maxlength="10"> 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="form-row form-row-wide form-text">
                                <label>Message<span class="required"></span></label>
                                <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message" required></textarea>
                            </p>
                            <p class="form-row">
                                <input type="submit" value="Submit" name="submit" class="button-submit">
                            </p>
                        </div>
                    </form>
			<?php
                $getContact = "SELECT * FROM contact_us";
                $runContact = $con->query($getContact);
                while($row=mysqli_fetch_object($runContact))
                {
                    $getEmail=$row->email;
                    $getContact=$row->contact;
                    $getAddress=$row->address;
                }
            ?>  					
                    <div class="col-md-3 contact-detail">
                        <h5 class="title-contact">Contact Detail</h5>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <h4 class="title-info">Write us</h4>
                            <div class="info-detail">
								<a href="mailto:<?php echo $getEmail;?>"><?php echo $getEmail;?></a>
							</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <h4 class="title-info">Call Us</h4>
                            <div class="info-detail">
								<a href="tel:<?php echo $getContact;?>"><?php echo $getContact;?></a>
							</div>
                        </div>
                        <div class="contacts-info ">
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <h4 class="title-info">Office Address</h4>
                            <div class="info-detail">
								<?php echo $getAddress;?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
			<?php include_once('include/footer.php');?>
        <!--End Footer-->
        
</body>


</html>