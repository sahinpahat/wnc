<!DOCTYPE html>
<html lang="en">

	<?php include_once('include/header-class.php');?>
<body class="index-opt-1">

    <div class="wrapper">
        <!--start header-->
			<?php include_once('include/header-menu.php');?>
		<!-- end HEADER -->      
        <!-- MAIN -->
        <main class="site-main product-list product-grid">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">WEIGHT MANAGEMENT CLUB </a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                        <div class="main-content">
                            <div class="promotion-banner style-3">
                                <a href="#" class="banner-img"><img src="images/product/banner-product1.png" alt="banner-product" style="height:248px;width:880px;"></a>
                            </div>
							<?php
								$sub_id=$_GET['detId'];
								$get="SELECT * FROM sub_cat WHERE id='$sub_id'";
								$run=$con->query($get);
								$row=mysqli_fetch_object($run);
								$sub_nm=$row->name;	
							?>
                            <div class="toolbar-products">
                                <h4 class="title-product"><?php echo strtoupper($sub_nm);?></h4>
                                <div class="toolbar-option">
                                    <div class="toolbar-sort">
                                        <select class="chosen-select sorter-options form-control" >
                                            <option selected="selected" value="position">Sort by popularity</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                    </div>
                                    <div class="toolbar-per">               
                                        <select class="chosen-select limiter-options form-control" >
                                            <option selected="selected" value="6">20 per page</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div> 
                                    <div class="modes">
                                        <a href="grid-product.html" class="active modes-mode mode-grid" title="Grid"><i class="flaticon-squares"></i>
                                            <span>Grid</span>
                                        </a>
                                        
                                    </div>
                                </div>  
                            </div>
                            <div class="products products-list products-grid equal-container">
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p8.jpg" alt="p8"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Salvare</a></div>
                                            <span class="price">
                                                <ins>Rs.1229.00</ins>
                                               
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Weigh:  8.25 kg</p>
                                                <p>Size:  One Size Fits All </p>
                                                <p>Guarantee:  2 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p9.jpg" alt="p9"></a>
                                            </div>
                                            <span class="onnew">new</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Slimfast Original</a></div>
                                            <span class="price price-dark">
                                                <ins>Rs.229.00</ins>
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Display Size:  6</p>
                                                <p>Display Type:  Linux</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p10.jpg" alt="p10"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Ketoburn</a></div>
                                            <span class="price">
                                                <ins>Rs.229.00</ins>
                                               
                                            </span>
                                            
                                            <div class="info-product">
                                                <p>Color: White</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p11.jpg" alt="p11"></a>
                                            </div>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Nulean.</a></div>
                                            <span class="price price-dark">
                                                <ins>Rs.2290.00</ins>
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p1.jpg" alt="p12"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">NV Clinical</a></div>
                                            <span class="price">
                                                <ins>Rs2329.00</ins>
                                                
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p3.jpg" alt="p13"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Hydroxy STM</a></div>
                                            <span class="price">
                                                <ins>Rs.3329.00</ins>
                                             
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p4.jpg" alt="p14"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Hypnosis</a></div>
                                            <span class="price">
                                                <ins>Rs.3229.00</ins>
                                               
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p5.jpg" alt="p3"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Garcinia Cambogia</a></div>
                                            <span class="price">
                                                <ins>Rs.4229.00</ins>
                                               
                                            </span>
                                            
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p5.jpg" alt="p16"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Garcinia Cambogia</a></div>
                                            <span class="price">
                                                <ins>Rs.529.00</ins>
                                               
                                            </span>
                                            
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p7.jpg" alt="p7"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Digestive Enzymes</a></div>
                                            <span class="price">
                                                <ins>Rs.229.00</ins>
                                               
                                            </span>
                                            
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p1.jpg" alt="p2"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">NV Clinical</a></div>
                                            <span class="price">
                                                <ins>Rs.229.00</ins>
                                               
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="images/product/p11.jpg" alt="p19"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Hypnosis</a></div>
                                            <span class="price">
                                                <ins>Rs.444.00</ins>
                                                
                                            </span>
                                           
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee:  1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="shopping.html" class="btn-add-to-cart">Add to cart</a>
                                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <ul class="nav-links">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="back-next"><a href="#">Next</a></li>
                                </ul>
                                <span class="show-resuilt">Showing 1-8 of 12 result</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                <div class="block-content">
                                    <div class="filter-options-item filter-categori">
                                        <div class="filter-options-title">Categories</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>How to loose Weight Fast,</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Increase your Metabolism,</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Camera, Photo & Video</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span> Understanding your Body type.</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Secrets to Eating Healthy,</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Learn to Eat Right & Burn Fast,</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Top Foods for Weight Loss</label></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                   <!--  <div class="filter-options-item filter-brand">
                                        <div class="filter-options-title">Brand</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Cameras</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Smartphone</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Printer & Ink</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Game & Consoles</label></li>
                                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>Sound & Speaker</label></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <div class="filter-options-item filter-price">
                                        <div class="filter-options-title">Price</div>
                                        <div class="filter-options-content">
                                            <div class="price_slider_wrapper">
                                                <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="$" class="slider-range-price " data-value-min="85" data-value-max="2000">
                                                    <span class="text-right">Filter</span>
                                                </div>
                                                <div class="price_slider_amount">
                                                    <div class="price_label">
                                                        Price: <span class="from">Rs.85</span>-<span class="to">Rs.2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <!--<div class="block-banner-sidebar">
                                <a href="#"><img src="images/product/banner-sidebar.jpg" alt="banner-sidebar"></a>
                            </div>-->
                            <div class="block-latest-roducts">
                                <div class="block-title">Latest Products</div>
                                <div class="block-latest-roducts-content">
                                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                        <div class="owl-ones-row">
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p1.jpg" alt="p1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Leather Chelsea Boots</a></div>
                                                        <span class="price">
                                                            <ins>Rs.2290.00</ins>
                                                           
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p2.jpg" alt="p2"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">2750 Cotu Classic Sneakers</a></div>
                                                        <span class="price">
                                                            <ins>Rs.2129.00</ins>
                                                           
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p3.jpg" alt="p3"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Thule Chasm Sport Duffel Bag</a></div>
                                                        <span class="price price-dark">
                                                                <ins>Rs.1229.00</ins>
                                                            </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p4.jpg" alt="p4"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Pullover Hoodie - Mens</a></div>
                                                        <span class="price">
                                                            <ins>Rs.2029.00</ins>
                                                            
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-ones-row">
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p1.jpg" alt="p1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Leather Chelsea Boots</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                            
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p2.jpg" alt="p2"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">2750 Cotu Classic Sneakers</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                           
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p3.jpg" alt="p3"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Thule Chasm Sport Duffel Bag</a></div>
                                                        <span class="price price-dark">
                                                                <ins>Rs.229.00</ins>
                                                            </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="images/blog/p4.jpg" alt="p4"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Pullover Hoodie - Mens</a></div>
                                                        <span class="price">
                                                            <ins>Rs.229.00</ins>
                                                            
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
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
            <!-- <div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">You may be also interested</div>
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
                                    <div class="product-name"><a href="#">Women Hats</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                                    <div class="product-name"><a href="#">Basketball Sports Shoes</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                                    <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                                    <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                                    <div class="product-name"><a href="#">Parka With a Hood</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                                    <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="block-section-brand">
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
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
			<?php include_once('include/footer.php');?>
        <!--End Footer-->

</body>

</html>