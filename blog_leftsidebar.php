<?php
ob_start();
session_start();
include('db.php');
include('user_header1.php');


$edv="select *from blog";
$gpt=mysqli_query($abc,$edv);

$data="select *from category";
$GetCatData=mysqli_query($abc,$data);

$gettypedata="select *from types";
$GetAllTypeData=mysqli_query($abc,$gettypedata);

?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Left Sidebar || Hiraola - Jewellery eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="assets/css/timecircles.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
   
</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Hiraola's Header Main Area -->
        <!-- Hiraola's Header Main Area End Here -->

        <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Blog Grid View</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->

        <!-- Begin Hiraola's Blog Left Sidebar Area -->
        <div class="hiraola-blog_area hiraola-blog_area-2 blog-grid-view_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <div class="hiraola-blog-sidebar-wrapper">
                            <div class="hiraola-blog-sidebar">
                                <div class="hiraola-sidebar-search-form">
                                    <form action="javascript:void(0)">
                                        <input type="text" class="hiraola-search-field" placeholder="search here">
                                        <button type="submit" class="hiraola-search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="hiraola-blog-sidebar">
                                <h4 class="hiraola-blog-sidebar-title">Categories</h4>
                                <ul class="hiraola-blog-archive">
                                    <li>
                                <?php
                                                while($getcat=mysqli_fetch_array($GetCatData))
                                                {
                                                    $procount=$getcat['category_id'];
                                                    $jkl="select *from product where category_id='$procount' ";
                                                    $oke=mysqli_query($abc,$jkl);
                                                    $count=mysqli_num_rows($oke);

                                                    ?>
                                                <li>
                                                    <a href="shop_data.php?gold=<?php echo $getcat['category_id']; ?>"><?php echo $getcat['name']; ?>-<?php echo $count; ?></a>
                                                 </li>
                                                 <?php
                                                }
                                                ?>
                                </ul>
                                
                            </div>
                            <div class="hiraola-blog-sidebar">
                                <h4 class="hiraola-blog-sidebar-title">Blog Archives</h4>
                                <ul class="hiraola-blog-archive">
                                <?php
                                    while($getbrand=mysqli_fetch_array($GetAllTypeData))
                                    {
                                        $brand=$getbrand['type_id'];
                                        $jkl="select *from product where type_id='$brand' ";
                                        $oke=mysqli_query($abc,$jkl);
                                        $count=mysqli_num_rows($oke);
                                        ?>

                                    <li>
                                        <a href="type_detail.php?pass=<?php echo $getbrand['type_id']; ?>"><?Php echo $getbrand['name']; ?></a>
                                        - <?php echo $count; ?>
                                    </li>
                                    
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="hiraola-blog-sidebar">
                                <h4 class="hiraola-blog-sidebar-title">Recent Post</h4>
                                <div class="hiraola-recent-post">
                                    <div class="hiraola-recent-post-thumb">
                                        <a href="blog-details-left-sidebar.html">
                                            <img class="img-full" src="assets/images/product/small-size/2-1.jpg" alt="Hiraola's Product Image">
                                        </a>
                                    </div>
                                    <div class="hiraola-recent-post-des">
                                        <span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
                                        <span class="hiraola-post-date">28-05-19</span>
                                    </div>
                                </div>
                                <div class="hiraola-recent-post">
                                    <div class="hiraola-recent-post-thumb">
                                        <a href="blog-details-left-sidebar.html">
                                            <img class="img-full" src="assets/images/product/small-size/2-2.jpg" alt="Hiraola's Product Image">
                                        </a>
                                    </div>
                                    <div class="hiraola-recent-post-des">
                                        <span><a href="blog-details-left-sidebar.html">Second Blog Post</a></span>
                                        <span class="hiraola-post-date">28-05-19</span>
                                    </div>
                                </div>
                                <div class="hiraola-recent-post">
                                    <div class="hiraola-recent-post-thumb">
                                        <a href="blog-details-left-sidebar.html">
                                            <img class="img-full" src="assets/images/product/small-size/2-3.jpg" alt="Hiraola's Product Image">
                                        </a>
                                    </div>
                                    <div class="hiraola-recent-post-des">
                                        <span><a href="blog-details-left-sidebar.html">Third Blog Post</a></span>
                                        <span class="hiraola-post-date">28-05-19</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hiraola-blog-sidebar">
                                <h4 class="hiraola-blog-sidebar-title">Tags</h4>
                                <ul class="hiraola-blog-tags">
                                    <li><a href="javascript:void(0)">Rings</a></li>
                                    <li><a href="javascript:void(0)">Necklaces</a></li>
                                    <li><a href="javascript:void(0)">Bracelet</a></li>
                                    <li><a href="javascript:void(0)">Earrings</a></li>
                                    <li><a href="javascript:void(0)">Bangles</a></li>
                                    <li><a href="javascript:void(0)">Chain</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row blog-item_wrap">
                            <!-- <div class="col-lg-6">
                                <div class="blog-item">
                                    <div class="blog-img img-hover_effect">
                                        <a href="blog-details-left-sidebar.html">
                                            <img src="assets/images/blog/medium-size/4.jpg" alt="Hiraola's Blog Image">
                                        </a>
                                        <div class="blog-meta-2">
                                            <div class="blog-time_schedule">
                                                <span class="day">25</span>
                                                <span class="month">April</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-heading">
                                            <h5>
                                                <a href="blog-details-left-sidebar.html">Blog Image Post</a>
                                            </h5>
                                        </div>
                                        <div class="blog-short_desc">
                                            <p>Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel
                                                lacus
                                                eget est d...
                                            </p>
                                        </div>
                                        <div class="hiraola-read-more_area">
                                            <a href="blog-details-left-sidebar.html" class="hiraola-read_more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <?php
                             while($blog=mysqli_fetch_array($gpt))
                             {
                               ?>


                            <div class="col-lg-6">
                                <div class="hiraola-single-blog_slider">
                                    <div class="blog-item">
                                        <div class="blog-img img-hover_effect">
                                            <a href="blog_leftsidebar.php">
                                                <img src="blog_img/<?php echo $blog['image']; ?>" alt="Hiraola's Blog Image" class="blog">
                                            </a>
                                            <div class="blog-meta-2">
                                                <div class="blog-time_schedule">
                                                    <span class="day">25</span>
                                                    <span class="month">April</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-heading">
                                                <h5>
                                                    <a href="blog_leftsidebar.php"><?php echo $blog['name']; ?></a>
                                                </h5>
                                            </div>
                                            <div class="blog-short_desc">
                                                <p><?php echo $blog['detail']; ?>
                                                </p>
                                            </div>
                                            <div class="hiraola-read-more_area">
                                                <a href="blog_leftsidebar.php" class="hiraola-read_more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php
                             }
                            ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hiraola-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <ul class="hiraola-pagination-box">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a class="Next" href="javascript:void(0)"><i
                                                    class="ion-ios-arrow-right"></i></a></li>
                                                <li><a class="Next" href="javascript:void(0)">>|</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-select-box">
                                                <div class="product-short">
                                                    <p>Show</p>
                                                    <select class="myniceselect nice-select">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                    </select>
                                                    <span>Per Page</span>
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
        <!-- Hiraola's Blog Left Sidebar Area End Here -->

        <!-- Begin Hiraola's Footer Area -->
<?php
include('user_footer.php');
?>
        <!-- Hiraola's Footer Area End Here -->

    </div>

   
</body>


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:21 GMT -->
</html>