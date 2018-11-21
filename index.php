<!DOCTYPE html>
<html lang="en">

	<?php include_once('include/header-class.php');?>
	

<body class="index-opt-1">

    <div class="wrapper">
	<!--start header-->
		<?php include_once('include/header-menu.php');?>
	<!-- end HEADER -->        

        <!-- MAIN -->
        <main class="site-main">
            
            <div class="block-section-1">
                <div class="main-slide slide-opt-1 full-width">
                    <div class="owl-carousel nav-style1" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                          
                        <?php
                            $i="SELECT * FROM slider";
                            $run=$con->query($i);
                            while($row=mysqli_fetch_object($run))
                            {
                        
                        ?>
                        <div class="item-slide item-slide-1" style="background-image: url(admin_kausal/AllImages/Slider/<?php echo $row->image;?>);">
                            <div class="slide-desc slide-desc-1">
                              
                                <!--<p>Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>-->
                                <a href="product.php?pro=8" class="btn-shop-now">Shop Now</a>                            
                            </div>
                        </div>
                        <?php } ?>
                          <!--<div class="item-slide item-slide-2" style="background-image: url(admin_kausal/AllImages/Slider/5228_Slider.jpg);">
                            <div class="slide-desc slide-desc-1">
                              
                                <!--<p>Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>-->
                              <!--  <a href="greencoffee.php?pro=7" class="btn-shop-now">Shop Now</a>                            
                            </div>
                        </div>
                       
                        <div class="item-slide item-slide-3"  style="background-image: url(admin_kausal/AllImages/Slider/4867_Home.jpg);">
                            <div class="slide-desc slide-desc-1">
                                
                                <!--<p>Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>-->
                               <!-- <a href="greencoffee.php?pro=6" class="btn-shop-now">Shop Now</a>                            
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!--<div class="block-daily-deals style1">
                <div class="container">
                    <div class="title-of-section">Daily deals</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":2}}'>
                        <div class="deal-of-day equal-elem">
                            <div class="product-thumb style1">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/d1.jpg" alt="d1"></a>
                                </div>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">ExoSlim Weight Loss </a></div>
                                <span class="price">
                                    <ins>Rs.4220.00</ins>
                                   
                                    <span class="onsale">-50%</span>
                                </span>
                               

                                
                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                            </div>
                        </div>
                        <div class="deal-of-day equal-elem">
                            <div class="product-thumb style1">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/d5.jpg" alt="d2"></a>
                                </div>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Healthkart </a></div>
                                <span class="price">
                                    <ins>Rs.229.00</ins>
                                   
                                    <span class="onsale">-50%</span>
                                </span>
                               

                               
                                <a href="shopping-cart.html" class="btn-add-to-cart">Add to cart</a>
                            </div>
                        </div>
                        <div class="deal-of-day equal-elem">
                            <div class="product-thumb style1">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/d2.jpg" alt="d2"></a>
                                </div>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Xbox One S Halo Collection Bundle (White)3D Series</a></div>
                                <span class="price">
                                    <ins>Rs.229.00</ins>
                                    <del>Rs.259.00</del>
                                    <span class="onsale">-50%</span>
                                </span>
                               

                               
                                <a href="shopping-cart.html" class="btn-add-to-cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
          
            <!--<div class="block-section-4">
                <div class="container">
                    <div class="title-of-section">SERVICES CATEGORIES</div>
                    <div class="tab-product tab-product-fade-effect">
                        <ul class="box-tabs nav-tab">
                            <li class="active"><a data-animated="" data-toggle="tab" href="#tab-1">All Products </a></li>
                            <li><a data-animated="fadeInLeft" data-toggle="tab" href="#tab-2">Weight Fast</a></li>
                            <li><a data-animated="zoomInUp" data-toggle="tab" href="#tab-1">Green Coffee </a></li>
                            <li><a data-animated="zoomInUp" data-toggle="tab" href="#tab-2">Weight Fast</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-container">
                                <div id="tab-1" class="tab-panel active">
                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p1.jpg" alt="p1"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Rapid Weight Loss Diet Pills</a></div>
                                                        <span class="price">
                                                            <ins>Rs.32290.00</ins>
                                                            
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p6.jpg" alt="p6"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Lipozin Diet Pills </a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.12290.00</ins>
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p2.jpg" alt="p2"></a>
                                                        </div>
                                                         <span class="onsale">-50%</span>
                                                         <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Cellucor CLK 60 Softgels</a></div>
                                                        <span class="price">
                                                            <ins>Rs.6229.00</ins>
                                                           
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p7.jpg" alt="p7"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.7529.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p3.jpg" alt="p3"></a>
                                                        </div>
                                                         <span class="onnew">new</span>
                                                         <a href="#" class="quick-view">Natural Weight loss DIET DROPS</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Washing machine</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.12290.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p8.jpg" alt="p8"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        
                                                        <div class="product-name"><a href="#">product.</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                           
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p4.jpg" alt="p4"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">15 days cleaning</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p9.jpg" alt="p9"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Hydroxycut alt. Ultimate Weight Loss</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p5.jpg" alt="p5"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">product</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p10.jpg" alt="p10"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">  
                                                        <div class="product-name"><a href="#">Applying testosterone cream to vagin</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                            
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-panel">
                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p1.jpg" alt="p1"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                            
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p6.jpg" alt="p6"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p2.jpg" alt="p2"></a>
                                                        </div>
                                                         <span class="onsale">-50%</span>
                                                         <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                           
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p7.jpg" alt="p7"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p3.jpg" alt="p3"></a>
                                                        </div>
                                                         <span class="onnew">new</span>
                                                         <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p8.jpg" alt="p8"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                          
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p4.jpg" alt="p4"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Smart Watch SERIE 2 (42mm) SilverCase with White Sport</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p9.jpg" alt="p9"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p5.jpg" alt="p5"></a>
                                                        </div>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price price-dark">
                                                            <ins>Rs.229.00</ins>
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping.html" class="add-to-cart">Add to cart</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/home1/p10.jpg" alt="p10"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="#" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">  
                                                        <div class="product-name"><a href="#">Category: Exercise - Perfect Fit Well</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                           
                                                        </span>
                                                       
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="shopping-cart.html" class="add-to-cart">Add to cart</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
      
           <!-- <div class="block-section-6">
                <div class="container">                    
                    <div class="promotion-banner box-single style-2">
                        <a href="#" class="banner-img"><img src="images/home1/banner-3.jpg" alt="banner-3"></a>
                        <a href="#" class="shop-now hidden-mobile">Shop now</a>
                    </div>
                </div>
            </div>-->
            <!--<div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">PRODUCT CATEGORIES</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r1.jpg" alt="r1"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Empire Coffee and Tea Company</a></div>
                                    <span class="price">
                                        <ins>Rs.2290.00</ins>
                                       
                                    </span>
                                    
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r2.jpg" alt="r2"></a>
                                    </div>
                                    <span class="onnew">new</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo"> 
                                    <div class="product-name"><a href="#">Coffee Drinks, Mixes & Beans</a></div>
                                    <span class="price price-dark">
                                        <ins>Rs.1229.00</ins>
                                    </span>
                                    
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r3.jpg" alt="r3"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">product</a></div>
                                    <span class="price price-dark">
                                        <ins>Rs.2290.00</ins>
                                    </span>
                                   
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r4.jpg" alt="r4"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">ASR Consumer Products</a></div>
                                    <span class="price price-dark">
                                        <ins>Rs.2029.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r5.jpg" alt="r5"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Graminway Pickle Achar</a></div>
                                    <span class="price">
                                        <ins>Rs.2229.00</ins>
                                        
                                    </span>
                                   
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="images/home1/r6.jpg" alt="r6"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Buy Dabur Honitus Hot Sip- Ayurvedi</a></div>
                                    <span class="price price-dark">
                                        <ins>Rs.229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--<div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                            <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        </div>
                    </div>
                </div>
            </div>  -->
        </main>
        
          <div class="block-daily-deals style1">
                <div class="container">
                    
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":2}}'>
                        <div class="deal-of-day equal-elem">
                            <div class="product-thumb style1">
                                <div class="thumb-inner">
                                    <a href="product.php?pro=8"><img src="images/home1/d1.jpg" alt="d1"></a>
                                </div>
                            </div>
                            <div class="product-innfo"><br><br><br>
                                <div class="product-name"><h3><b>Green Coffee Beans</b></h3></div>
                               
                               <br><br>
                                <a href="product.php?pro=8" class="btn-add-to-cart">Shop Now</a>
                            </div>
                        </div>
                        <div class="deal-of-day equal-elem">
                            <div class="product-thumb style1">
                                <div class="thumb-inner">
                                    <a href="product.php?pro=7"><img src="images/home1/d2.jpg" alt="d2"></a>
                                </div>
                            </div>
                            <div class="product-innfo"><br><br><br>
                                <div class="product-name"><h3><b>Samahan Tea</b></h3></div>
                               
                               
                                <br><br>
                                <a href="product.php?pro=7" class="btn-add-to-cart">Shop Now</a>
                            </div>
                        </div></div></div></div>
        
        <!-- end MAIN -->

        <!-- FOOTER -->
			<?php include_once('include/footer.php');?>
        <!--End Footer-->
        
</body>


</html>