<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header-class.php');?>
<body class="index-opt-1">

    <div class="wrapper">
        <!--start header-->
			<?php include_once('include/header-menu.php');?>
		<!-- end HEADER -->  
        <!-- MAIN -->
        <main class="site-main site-login">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">Login</a></li>
                </ol>
            </div>
            <div class="customer-login">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="title-login">Log in to your account</h5>
                            <p class="p-title-login">Welcome to your account.</p>
<?php
	if(isset($_POST['login']))
	{
		$name=htmlentities(addslashes(trim($_POST['username'])));
		$pass=md5(htmlentities(addslashes(trim($_POST['pass']))));
		
		$check = "SELECT * FROM user_register WHERE (`email`='".$name."' || `mobile`='".$name."') AND `password`='".$pass."'";
		$run=$con->query($check);
		if(mysqli_num_rows($run) > 0)
		{
			while($row = mysqli_fetch_array($run))
			{
				$nm=$row['name'];
				$id=$row['id'];
				$email=$row['email'];
				
			}
			setcookie('PHPSESSID',session_id(),time()+60*60*24*30);
			$_SESSION['nm']=$nm;
			$_SESSION['email']=$email;
			$_SESSION['id']=$id;
			
			redirect_to('greencoffee.php?pro=8');
		} 
		else
		{
			echo "<script>alert('Your username or password wrong');</script>";
			
		}
	}
?>							
							
                            <form class="login" method="post">
                                <p class="form-row form-row-wide">
                                    <label>Mobile no or Email Address:<span class="required"></span></label>
                                    <input type="text" value="" name="username" placeholder="Type your Mobile no or Email Address" class="input-text" required>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Password:<span class="required"></span></label>
                                    <input type="password" name="pass" placeholder="************" class="input-text" required>
                                </p>
                                <!--<ul class="inline-block">
                                    <li><label class="inline" ><input type="checkbox"><span class="input"></span>Remember me</label></li>
                                </ul> -->
                                <a href="javascript:void(0);" class="forgot-password">Forgotten password?</a>
                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button-submit">
                                </p>                              
                            </form>
                        </div>
<?php
if(isset($_POST['signin']))
{
	$nm = htmlentities(addslashes(trim($_POST['nm'])));
	$email = htmlentities(addslashes(trim($_POST['email'])));
	$mobile = htmlentities(addslashes(trim($_POST['mobile'])));
	$password = md5(htmlentities(addslashes(trim($_POST['signin']))));
	
	$check = "SELECT * FROM `user_register` WHERE (email='$email' || mobile='$mobile')";
	$run = $con->query($check);
	if(mysqli_num_rows($run) > 0)
	{
		$get = mysqli_fetch_array($run);
		if($email==$get['email'])
		{
			echo "<script>alert('Email id already registered')</script>";
		}
		else if($mobile==$get['mobile'])
		{
			echo "<script>alert('Mobile no already registered')</script>";
		}
	}
	else
	{
		$insert = "INSERT INTO `user_register`(`name`,`email`,`password`,`mobile`) VALUES('".$nm."', '".$email."','".$password."','".$mobile."')";
		
		$run = $con->query($insert);
		if($insert)
		{
			echo "<script>alert('Your registration successfully')</script>";
		}
	}
	
}
?>
					  <form method="post" onSubmit="return check_pass()">
                        <div class="col-sm-6 border-after">
                            <h5 class="title-login">Create an account</h5>
                            <p class="p-title-login">Personal infomation</p>
                            <form class="register" method="post">
                                <p class="form-row form-row-wide">
                                    <label>Full name<span class="required">*</span></label>
                                    <input type="text" value="" name="nm" placeholder="Enter name" class="input-text" required >
                                </p>
                                
                                <p class="form-row form-row-wide">
                                    <label>Email Address<span class="required">*</span></label>
                                    <input type="email" name="email" placeholder="Email address" class="input-text" required>
                                </p>
								<p class="form-row form-row-wide">
                                    <label>Mobile no<span class="required">*</span></label>
                                    <input type="text" name="mobile" placeholder="Mobile no" class="input-text" maxlength="10" required>
                                </p>
                                
                                <h5 class="title-login title-login-bottom">Login Information</h5>
                                <p class="form-row form-row-wide col-md-6 padding-left">
                                    <label>Password:<span class="required"></span></label>
                                    <input type="password" name="password" class="input-text" required id="pass">
                                </p>
                                <p class="form-row form-row-wide col-md-6 padding-right">
                                    <label>Confirm Password<span class="required">*</span></label>
                                    <input type="password" name="" class="input-text" required id="c_pass">
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Submit" name="signin" class="button-submit">
                                </p>
                            </form>
                        </div>
					  </form>	
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
			<?php include_once('include/footer.php');?>
        <!--End Footer-->
<script>
	function check_pass()
	{
		var a = document.getElementById("pass").value;
		var b = document.getElementById("c_pass").value;
		
		if(a!=b)
		{
			alert('Password does not match');
			return false;
		}
	}
</script>        
</body>


</html>