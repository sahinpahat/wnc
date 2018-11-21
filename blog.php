<!DOCTYPE html>
<html lang="en">

	<?php include_once('include/header-class.php');?>
<body class="page-blog">
    <div class="wrapper">
        <!--start header-->
	    	<?php include_once('include/header-menu.php');?>
	    <!-- end HEADER -->  
        <!-- MAIN -->
        <main class="site-main blog-single">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="javascript:void(0);">Our blog</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="main-content">
                            <div class="post-list post-items">
                                <?php
                                    $blog="SELECT * FROM blog";
                                    $run=$con->query($blog);
                                    while($row=mysqli_fetch_object($run))
                                    {
                                ?>
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="javascript:void(0);"><img src="admin_kausal/AllImages/blog/<?php echo $row->img;?>" alt="post-image"></a>
                                        
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="javascript:void(0);"><?php echo $row->heading;?></a></h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <!--<span class="news">News</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>6 Comments</span>-->
                                        </div>
                                        <div class="post-content" style="line-height:35px;font-size:14px;">
                                            <p ><?php echo htmlspecialchars_decode($row->content);?></p>
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
                            </div>-->
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