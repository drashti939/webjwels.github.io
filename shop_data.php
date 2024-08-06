<?php
 ob_start();
include('db.php');
include('user_header1.php');


if(isset($_REQUEST['gold']))
{
    $ids=$_REQUEST['gold'];
    $getdata="select *from product where category_id='$ids' ";
$GetAllProductData=mysqli_query($abc,$getdata);
}



$gettypedata="select *from types";
$GetAllTypeData=mysqli_query($abc,$gettypedata);

$data="select *from types";
$GetTypeData=mysqli_query($abc,$data);


if(isset($_REQUEST['cart_insert']))
{
   $pro=$_REQUEST['product_id'];
   $cat=$_REQUEST['category_id'];
   $type=$_REQUEST['type_id'];
   $img=$_REQUEST['image'];
   $rate=$_REQUEST['rate'];
   $qty=$_REQUEST['qty'];

   $sql="insert into cart (product_id,category_id,type_id,image,rate,qty) values ('$pro','$cat','$type','$img','$rate','$qty')";
   mysqli_query($abc,$sql);
   header("location:cart.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="template-color-1">

    <div class="main-wrapper">


        <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop Left Sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->

        <!-- Begin Hiraola's Content Wrapper Area -->
        <div class="hiraola-content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="hiraola-sidebar-catagories_area">
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Price</h5>
                                </div>
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <!-- <button type="button">Filter</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="hiraola-sidebar_categories">
                                <div class="hiraola-categories_title">
                                    <h5>Brand</h5>
                                </div>
                                <ul class="sidebar-checkbox_list">
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
                            
                            <div class="category-module hiraola-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>Categories</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <?php
                                       while($cate=mysqli_fetch_array($GetTypeData))
                                       {
                                          $get=$cate['type_id'];
                                          $que="select *from category where type_id='$get' ";
                                          $some=mysqli_query($abc,$que);

                                         ?>

                                       <li>
                                            <a href="javascript:void(0)"><?php echo $cate['name']; ?></a>
                                            <ul class="module-sub-list_item">
                                                <?php
                                                while($getcat=mysqli_fetch_array($some))
                                                {
                                                    $procount=$getcat['category_id'];
                                                    $jkl="select *from product where category_id='$procount' ";
                                                    $oke=mysqli_query($abc,$jkl);
                                                    $count=mysqli_num_rows($oke);

                                                    ?>
                                                <li>
                                                    <a href="javascript:void(0)"><?php echo $getcat['name']; ?>-<?php echo $count; ?></a>
                                                 </li>
                                                 <?php
                                                }
                                                ?>
     
                                            </ul>
                                        </li>
                                        <?php
                                       }
                                        ?>
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-banner_area">
                            <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/banner/1_1.jpg" alt="Hiraola's Shop Banner Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-toolbar">
                            <div class="product-view-mode">
                                <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                                <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                            </div>
                            <div class="product-item-selection_area">
                                <div class="product-short">
                                    <label class="select-label">Short By:</label>
                                    <select class="nice-select">
                                        <option value="1">Relevance</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                        <option value="5">Rating (Highest)</option>
                                        <option value="5">Rating (Lowest)</option>
                                        <option value="5">Model (A - Z)</option>
                                        <option value="5">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid gridview-3 row">
                            <?php
                               while($show=mysqli_fetch_array($GetAllProductData))
                               {
                                ?>

                             
                            <div class="col-lg-4">
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                        <a href="product_detail.php?cat=<?php echo $show['product_id']; ?>">
                                                <img class="primary-img" src="product_img/<?php echo $show['image']; ?>" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="product_img/<?php echo $show['image1']; ?>" alt="Hiraola's Product Image">
                                            </a>
                                            <form action="" method="post">

                                            <div class="add-actions">
                                                
                                            <input type="hidden" name="product_id" value="<?php echo $show['product_id']; ?>">
                                                <input type="hidden" name="category_id" value="<?php echo $show['category_id']; ?>">
                                                <input type="hidden" name="type_id" value="<?php echo $show['type_id']; ?>">
                                                <input type="hidden" name="image" value="<?php echo $show['image']; ?>">
                                                <input type="hidden" name="rate" value="<?php echo $show['rate']; ?>">
                                                <input type="hidden" name="qty" value="1">
                                            

                                            <ul>
                                                <li>
                                                    <button type="submit" name="cart_insert" class="hiraola-add_cart" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                     <i class="ion-bag"></i>
                                                    </button>
                                                </li>
                                           
                                                <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                    class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                            </div>
                                        </div>
                                        </form>

                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html"><?php echo $show['name'];?></a></h6>
                                                <div class="price-box">
                                                    <span class="new-price"><?php echo $show['rate'];?></span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-slide_item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="product_img/<?php echo $show['image']; ?>" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="product_img/<?php echo $show['image1']; ?>" alt="Hiraola's Product Image">
                                            </a>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html"><?php echo $show['name'];?></a></h6>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price"><?php echo $show['rate'];?></span>
                                                </div>
                                                <div class="product-short_desc">
                                                    <p><?php echo $show['discription'];?></p>
                                                </div>
                                            </div>

                                            <form action="" method="post">

                                            <div class="add-actions">

                                            <input type="hidden" name="product_id" value="<?php echo $show['product_id']; ?>">
                                                <input type="hidden" name="category_id" value="<?php echo $show['category_id']; ?>">
                                                <input type="hidden" name="type_id" value="<?php echo $show['type_id']; ?>">
                                                <input type="hidden" name="image" value="<?php echo $show['image']; ?>">
                                                <input type="hidden" name="rate" value="<?php echo $show['rate']; ?>">
                                                <input type="hidden" name="qty" value="1">
                                            

                                                <ul>
                                                    <li><button type="submit" class="hiraola-add_cart" name="cart_insert"  data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</button></li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                                    <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
   
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
                                                    <p>Showing 1 to 12 of 18 (2 Pages)</p>
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
        <!-- Hiraola's Content Wrapper Area End Here -->

        <!-- Begin Hiraola's Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="col-lg-5 col-md-5">
                                <div class="sp-img_area">
                                    <div class="sp-img_slider-2 slick-img-slider hiraola-slick-slider arrow-type-two" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                }'>
                                        <div class="single-slide red">
                                            <img src="assets/images/single-product/large-size/1.jpg" alt="Hiraola's Product Image">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/single-product/large-size/2.jpg" alt="Hiraola's Product Image">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/single-product/large-size/3.jpg" alt="Hiraola's Product Image">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/single-product/large-size/4.jpg" alt="Hiraola's Product Image">
                                        </div>
                                    </div>
                                    <div class="sp-img_slider-nav slick-slider-nav hiraola-slick-slider arrow-type-two" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider-2",
                                   "focusOnSelect": true
                                  }' data-slick-responsive='[
                                        {"breakpoint":1201, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":481, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                    ]'>
                                        <div class="single-slide red">
                                            <img src="assets/images/single-product/small-size/1.jpg" alt="Hiraola's Product Thumnail">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/single-product/small-size/2.jpg" alt="Hiraola's Product Thumnail">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/single-product/small-size/3.jpg" alt="Hiraola's Product Thumnail">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/single-product/small-size/4.jpg" alt="Hiraola's Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <div class="sp-content">
                                    <div class="sp-heading">
                                        <h5><a href="#">Light Inverted Pendant Quis Justo Condimentum</a></h5>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star-of-david"></i></li>
                                            <li><i class="fa fa-star-of-david"></i></li>
                                            <li><i class="fa fa-star-of-david"></i></li>
                                            <li><i class="fa fa-star-of-david"></i></li>
                                            <li><i class="fa fa-star-of-david"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">£82.84</span>
                                        <span class="old-price">£93.68</span>
                                    </div>
                                    <div class="essential_stuff">
                                        <ul>
                                            <li>EX Tax:<span>£453.35</span></li>
                                            <li>Price in reward points:<span>400</span></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <ul>
                                            <li>10 or more £81.03</li>
                                            <li>20 or more £71.09</li>
                                            <li>30 or more £61.15</li>
                                        </ul>
                                    </div>
                                    <div class="list-item last-child">
                                        <ul>
                                            <li>Brand<a href="javascript:void(0)">Buxton</a></li>
                                            <li>Product Code: Product 15</li>
                                            <li>Reward Points: 100</li>
                                            <li>Availability: In Stock</li>
                                        </ul>
                                    </div>
                                    <div class="color-list_area">
                                        <div class="color-list_heading">
                                            <h4>Available Options</h4>
                                        </div>
                                        <span class="sub-title">Color</span>
                                        <div class="color-list">
                                            <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                                <span class="bg-red_color"></span>
                                                <span class="color-text">Red (+£3.61)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                                <span class="burnt-orange_color"></span>
                                                <span class="color-text">Orange (+£2.71)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                                <span class="brown_color"></span>
                                                <span class="color-text">Brown (+£0.90)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                                <span class="raw-umber_color"></span>
                                                <span class="color-text">Umber (+£1.81)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="hiraola-group_btn">
                                        <ul>
                                            <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                            <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="hiraola-tag-line">
                                        <h6>Tags:</h6>
                                        <a href="javascript:void(0)">Ring</a>,
                                        <a href="javascript:void(0)">Necklaces</a>,
                                        <a href="javascript:void(0)">Braid</a>
                                    </div>
                                    <div class="hiraola-social_link">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                                    <i class="fab fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Modal Area End Here -->

    </div>

<?php
include('user_footer.php');
?>
</body>


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/shop-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:16 GMT -->
</html>