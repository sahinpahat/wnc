<!DOCTYPE html>
<html lang="en">


<?php include_once('include/header-class.php');?>
<body class="page-product list-view">
    <div class="wrapper">
        
       	<!--start header-->
		    <?php include_once('include/header-menu.php');?>
	    <!-- end HEADER -->        

            <!-- MAIN -->
        <main class="site-main product-list product-list-right">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-content">
                           <div class="block-section-1">
                <div class="main-slide slide-opt-1 full-width">
                    <div class="owl-carousel nav-style1" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                            <?php
                            $mId=$_GET['pro'];
                                $banner = "SELECT * FROM pro_banner WHERE menu_id='$mId'";
                                $run = $con->query($banner);
                                while($row=mysqli_fetch_object($run))
                                {
                                    
                                
                            ?>
                        <div class="item-slide item-slide-1" style="background-image: url(admin_kausal/AllImages/PagesBanner/<?php echo $row->image;?>);">
                            <div class="slide-desc slide-desc-1">
                               
                                <!--<p>Washing Tachnology User 6 different wash motions, designed to best care for your clother, just like hand wash.</p>-->
                                <a href="greencoffee.php?pro=<?php echo $row->menu_id;?>" class="btn-shop-now">Shop Now</a>                            
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
                           
                            <div class="products products-list">
                                <?php
                                    $pro="SELECT * FROM products WHERE parent_id='$mId'";
                                    $run=$con->query($pro);
                                    while($row=mysqli_fetch_object($run))
                                    {
                                ?>
                                <div class="product-items">
                                    <div class="product-image">
                                        <a href="detail.php?details=<?php echo $row->id;?>"><img src="admin_kausal/AllImages/product/<?php echo $row->img;?>" alt="p1"></a>
                                        <span class="onsale"><?php echo $row->discount;?>%</span>
                                        <!--<a href="#" class="quick-view">Quick View</a>-->
                                    </div>
                                    <div class="product-info">
                                        <div class="product-name"><a href="detail.php?details=<?php echo $row->id;?>"><?php echo $row->name;?></a></div>
                                        <span class="star-rating" style="font-size:20px;">
                                           <?php echo $row->pack;?>
                                        </span>
                                        <div class="product-infomation">
                                           <a href="detail.php?details=<?php echo $row->id;?>"> <?php echo htmlspecialchars_decode(substr($row->description,0,320));?>...</a>
                                        </div>
                                    </div>
                                    <div class="product-info-price">
                                        <div class="product-info-stock-sku">
                                            <div class="stock available">
                                                <span class="label-stock">Avability:</span> In Stock
                                            </div>
                                        </div>
                                        <span class="price">
                                            <ins>Rs.<?php echo $row->new_price;?>.00</ins>
                                            <del>Rs.<?php echo $row->old_price;?>.00</del>
                                        </span>
                                        <div class="single-add-to-cart">
                                            <a href="checkout.php?place=<?php echo $row->id;?>" class="btn-add-to-cart">BUY NOW</a>
                                            
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>  
                              
                            </div>
                            <!--<div class="pagination">
                                <ul class="nav-links">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="back-next"><a href="#">Next</a></li>
                                </ul>
                                <span class="show-resuilt">Showing 1-8 of 12 result</span>
                            </div>-->
                        </div>
                    </div>
                   
            </div>
            <!--<div class="block-recent-view">
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
                                   3
                                   
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
            </div>-->
            
        </main><!-- end MAIN -->
 
       <!-- FOOTER -->
			<?php include_once('include/footer.php');?>
        <!--End Footer-->
       
</body>


</html>