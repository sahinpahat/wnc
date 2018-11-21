<!DOCTYPE html>
<html lang="en">

<?php include_once('include/header-class.php');?>
<body class="page-product detail-product">
    <div class="wrapper">
        
        <!--start header-->
	    	<?php include_once('include/header-menu.php');?>
	    <!-- end HEADER -->        
        <!-- MAIN -->
        <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">Detail</a></li>
                </ol>
            </div>
<?php
    $det=$_GET['details'];
    
    $get="SELECT * FROM products WHERE id='$det'";
    $run=$con->query($get);
    while($row=mysqli_fetch_object($run))
    {
        $img=$row->img;
        $nm=$row->name;
        $des=$row->description;
        $pack=$row->pack;
        $new=$row->new_price;
        $old=$row->old_price;
        $id=$row->id;
        $pDes=$row->p_dis;
        $pInfo=$row->p_info;
    }
?>
            <div class="container">
                <div class="product-content-single">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 padding-right">
                            <div class="product-media">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img src="admin_kausal/AllImages/product/<?php echo $img;?>" alt="">
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="product-info-main">
                                <div class="product-name"><a href="javascript:void(0);"><?php echo $nm;?></a></div>
                                <span class="star-rating" style="font-size:20px;">
                                    <?php echo $pack;?>
                                </span>
                                <div class="product-infomation">
                                    <?php echo htmlspecialchars_decode($des);?>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-info-price">
                                <div class="product-info-stock-sku">
                                    <div class="stock available">
                                        <span class="label-stock">Availability: </span>In Stock
                                    </div>
                                </div>
                                <div class="transportation">
                                    <span>item with Free Delivery</span>
                                </div>
                                <span class="price">
                                    <ins>Rs.<?php echo $new;?></ins>
                                    <del>Rs.<?php echo $old;?></del>
                                </span>
                               <!-- <div class="quantity">
                                    <h6 class="quantity-title">Quantity:</h6>
                                    <div class="buttons-added">
                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>-->
                                <div class="single-add-to-cart">
                                    <a href="checkout.php?place=<?php echo $id;?>" class="btn-add-to-cart">BUY NOW</a>
                                    <!--<a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                         <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                        
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p> <?php echo  htmlspecialchars_decode($pDes);?> </p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <div class="box-content">
                                <p><?php echo htmlspecialchars_decode($pInfo);?> </p>
                                </div>
                            </div>
<!--mail function-->
<?php
if(isset($_POST['sub']))
{
    $nm=$_POST['name'];
    $em=$_POST['email'];
    $review=$_POST['review'];
    $body=$_POST['message'];
    
    $to='info@organicbeancoffeetea.com';
    
    $subject='Review of user';
    $message="Name is:".$nm."\n"."Email is:".$em."\n"."Review Title is:".$review."\n"."Message is:".$body."\n";
   
  mail($to,$subject,$message);
    if(mail)
    {
        echo "<script>alert('Review Success')</script>";
    }
}

?>
                             <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post"  class="new-review-form">
                                    <a href="javascript:void(0);" class="form-title">Write a review</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide">
                                            <label>Name</label>
                                            <input type="text" value="" name="name" placeholder="Enter your name" class="input-text" required>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="admin@example.com" class="input-text" required>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Review Title<span class="required">*</span></label>
                                            <input type="text" name="review" placeholder="Give your review a title" class="input-text" required>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Body of Review (1500)</label>
                                            <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message" required></textarea>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Submit Review" class="button-submit" name="sub">
                                        </p>
                                    </div>
                                </form>
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