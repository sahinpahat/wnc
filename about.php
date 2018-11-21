<!DOCTYPE html>
<html lang="en">

	<?php include_once('include/header-class.php');?>
<body class="index-opt-1" background="admin_kausal/AllImages/blog/sw.png">

    <div class="wrapper">
        <!--start header-->
			<?php include_once('include/header-menu.php');?>
		<!-- end HEADER --> 
        <!-- MAIN -->
        <main class="site-main about-us">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">About Us</a></li>
                </ol>
            </div>
          <div class="block-section-1">
                <div class="main-slide slide-opt-1 full-width">
                    <div class="owl-carousel nav-style1" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                          <?php
                            $bann="SELECT * FROM about_banner";
                            $run=$con->query($bann);
                            while($row=mysqli_fetch_object($run))
                            {
                          ?>
                        <div class="item-slide item-slide-1" style="background-image: url(admin_kausal/AllImages/Slider/<?php echo $row->image;?>);">
                            <div class="slide-desc slide-desc-1">
                                <!--<div class="p-primary">100%<br>HERBAL & ORGANIC PRODUCTS</div>
                                <!--<p>Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>
                                <a href="javascript:void(0);" class="btn-shop-now">Shop Now</a>  -->                          
                            </div>
                        </div>
                        <?php } ?>
                       
                       
                       
                       
                    </div>
                </div>
            </div>
            <div class="container">
                <?php
                    $content="SELECT * FROM about_content";
                    $run=$con->query($content);
                    while($row=mysqli_fetch_object($run))
                    {
                ?>
                <div class="about-text">
                    <br>
                    <span class="about-text-center"><?php echo $row->heading;?></span>
                    <p><?php echo htmlspecialchars_decode($row->content);?>
                </p>
                </div>
              <?php } ?>   
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="about-text-item">
                            <h5 class="title-about-us"> IT'S ABOUT YOUR HEALTH    </h5>
                            <p>A one stop shop for health concious people, offering organic and genuine natural products. It is an ecommerce portal which provides you the best Herbal products you could ever have.We are a group of some experts which specifically deals in health and fitness issues. We have established ourselves in 2018. We  are hereby to provide you the best Herbals products, and best Fitness consultancy and services as per your requirements regarding health and fitness. A one stop shop for health concious people, offering organic and genuine natural products. It is an ecommerce portal which provides you the best Herbal products you could ever have.We are a group of some experts which specifically deals in health and fitness issues. We have established ourselves in 2018. We  are hereby to provide you the best Herbals products, and best Fitness consultancy and services as per your requirements regarding health and fitness. 
</p>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="about-text-item item-three">
                            <h5 class="title-about-us">What we can do for you</h5>
                            <div class="about-text-content">
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Support 24/7</h4>
                                    <div class="text-info"> Available at +91,9718336788
</div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Best Quality</h4>
                                    <div class="text-info">100% Herbal & Organic/ FSSAI Approved. 
</div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Fastest Delivery</h4>
                                    <div class="text-info"> Fast delivery across India with delivery partner DELHIVERY </div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Customer Care</h4>
                                    <div class="text-info">Customer service sets great businesses apart from the rest. Customers are the reason that businesses exist. Keeping those customers happy means being responsive to their needs and wants.</div>
                                </div>
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