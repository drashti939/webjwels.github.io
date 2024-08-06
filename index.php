<?php
ob_start();
session_start();
include('db.php');
include('user_header.php');


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

if(isset($_REQUEST['list_insert']))
{
   $pro=$_REQUEST['product_id'];
   $cat=$_REQUEST['category_id'];
   $type=$_REQUEST['type_id'];
   $img=$_REQUEST['image'];
   $rate=$_REQUEST['rate'];
   $stock=$_REQUEST['stock'];

   $xql="insert into wishlist (product_id,category_id,type_id,image,rate,stock) values ('$pro','$cat','$type','$img','$rate','$stock')";
   mysqli_query($abc,$xql);
   header("location:wishlist.php");
}

$get="select *from slider order by name ASC";
$GetAllSliderData=mysqli_query($abc,$get);

$getdata="select *from product order by name DESC";
$GetAllProductData=mysqli_query($abc,$getdata);

$getss="select *from types";
$GetAllTypesData=mysqli_query($abc,$getss);

$small="select *from types";
$Getbackdata=mysqli_query($abc,$small);

$getss1="select *from types";
$GetAllTypesData1=mysqli_query($abc,$getss1);

$getdata2="select *from product order by name DESC";
$GetAllProductData1=mysqli_query($abc,$getdata2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {box-sizing: border-box;}

        .header-bottom_area.header-bottom_area-2 .container-fliud .main-menu_area > nav > ul > li > a
        {
            color:#FFF !important;
        }
        .header-bottom_area.header-bottom_area-2 .container-fliud .header-right_area > ul > li > a
        {
            color:#FFF !important;
        }
        .product-desc_info
        {
            height:105px;
        }
        .add-actions form
        {
            display: inline-block;
        }
        .header-bottom_area.header-bottom_area-2 .container-fliud
        { 
            top:40px !important;
        }
        .header-bottom_area.header-bottom_area-2
        {
             z-index: 0 !important; 
        }
       .main-wrapper
       {
          
       }
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
z-index: -1;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: none;
  transition: background-color 0.6s ease;
}

/*.active {
  background-color: #717171;
}*/

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    </style>
</head>
<body class="template-color-2">

 <!-- Begin Hiraola's Header Main Area -->
 <header class="header-main_area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="ht-left_area">
                                <div class="header-shipping_area">
                                    <ul>
                                        <li>
                                            <span>Telephone Enquiry:</span>
                                            <a href="callto://+123123321345">(+123) 123 321 345</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                        <?php
                                          if(@$_SESSION['user_email'])
                                          {
                                            ?>
                                        
                                        <li><a href="profile.php"><?php echo $_SESSION['user_email']; ?></a></li>
                                        <li><a href="user_change_password.php">Change Password</a></li>
                                        <li><a href="userlogout.php">Logout</a></li>
                                        <li><a href="myaccount.php">Account</a></li>

                                           <?php
                                          }
                                          else
                                          {
                                            ?>
                                        <li><a href="loginfirst.php">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                           <?php
                                          }
                                          ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     </header>         
         
<div class="main-wrapper">

<div class="slideshow-container">
       <?php
          while($row=mysqli_fetch_array($GetAllSliderData))
          {
            ?>     
            <div class="mySlides">
  
  <img src="slider_img/<?php echo $row['image'];?>" style="width:100%">

</div>
<span class="dot"></span> 

            <?php
          }
          ?>
         
</div>
        <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>



 <!-- Begin Hiraola's Shipping Area Two -->
 <div class="hiraola-shipping_area hiraola-shipping_area-2">
            <div class="container">
                <div class="shipping-nav">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="assets/images/shipping-icon/1.png" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Free Uk Standard Delivery</h6>
                                    <p>Designated day delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Freshyly Prepared Ingredients</h6>
                                    <p>Made for your delivery date</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="assets/images/shipping-icon/3.png" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>98% Of Anta Clients</h6>
                                    <p>Reach their personal goals set</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <img src="assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h6>Winner Of 15 Awards</h6>
                                    <p>Healthy food and drink 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Shipping Area Two End Here -->

    <!-- Begin Hiraola's Product Area -->
    <div class="hiraola-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-section_title">
                            <h4>New Arrival</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider">
                 <?php
                  while($col=mysqli_fetch_array($GetAllProductData))
                  {
                    ?>

                      <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="product_detail.php?cat=<?php echo $col['product_id']; ?>">
                                            <img class="primary-img" src="product_img/<?php echo $col['image']; ?>" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="product_img/<?php echo $col['image1']; ?>" alt="Hiraola's Product Image">
                                        </a>
                                        <form action="" method="post">
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            
                                                <input type="hidden" name="product_id" value="<?php echo $col['product_id']; ?>">
                                                <input type="hidden" name="category_id" value="<?php echo $col['category_id']; ?>">
                                                <input type="hidden" name="type_id" value="<?php echo $col['type_id']; ?>">
                                                <input type="hidden" name="image" value="<?php echo $col['image']; ?>">
                                                <input type="hidden" name="rate" value="<?php echo $col['rate']; ?>">
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
                                        </form>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="product_detail.php?cat=<?php echo $col['product_id']; ?>"><?php echo $col['name'];?></a></h6>
                                            <div class="price-box">
                                                <span class="new-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $col['rate'];?>/-</span>
                                            </div>
                                            <form action="" method="post">

                                            <div class="additional-add_action">
                                                <input type="hidden" name="product_id" value="<?php echo $col['product_id']; ?>">
                                                <input type="hidden" name="category_id" value="<?php echo $col['category_id']; ?>">
                                                <input type="hidden" name="type_id" value="<?php echo $col['type_id']; ?>">
                                                <input type="hidden" name="image" value="<?php echo $col['image']; ?>">
                                                <input type="hidden" name="rate" value="<?php echo $col['rate']; ?>">
                                                <input type="hidden" name="stock" value="in stock">
                                            
                                                <ul>
                                                    <li><a class="hiraola-add_compare" href="wishlist.php" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-android-favorite-outline"></i><button type="submit" name="list_insert"></button></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            </form>
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
                            <!-- Hiraola's Slide Item Area End Here -->
<?php         
}
                 
?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Area End Here -->

<?php
while($Tname=mysqli_fetch_array($GetAllTypesData))
{
    $ids=$Tname['type_id'];
    $sql="select *from product where type_id='$ids' ";
    $GetTypeProData=mysqli_query($abc,$sql);

   
    ?>


        <div class="hiraola-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hiraola-section_title">
                            <h4><?php echo $Tname['name'];?></h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="hiraola-product_slider">
                 <?php
                  while($cell=mysqli_fetch_array($GetTypeProData))
                  {
                    ?>

                      <!-- Begin Hiraola's Slide Item Area -->
                            <div class="slide-item">
                                <div class="single_product">
                                    <div class="product-img">
                                        <a href="product_detail.php?cat=<?php echo $cell['product_id']; ?>">
                                            <img class="primary-img" src="product_img/<?php echo $cell['image']; ?>" alt="Hiraola's Product Image">
                                            <img class="secondary-img" src="product_img/<?php echo $cell['image1']; ?>" alt="Hiraola's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                    class="ion-ios-shuffle-strong"></i></a></li>
                                                <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                    class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hiraola-product_content">
                                        <div class="product-desc_info">
                                            <h6><a class="product-name" href="product_detail.php?cat=<?php echo $cell['product_id']; ?>"><?php echo $cell['name'];?></a></h6>
                                            <div class="price-box">
                                                <span class="new-price"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $cell['rate'];?>/-</span>
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
                            <!-- Hiraola's Slide Item Area End Here -->
<?php         
}
                 
?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Product Area End Here -->

        <?php
}
?>

<div class="hiraola-banner_area-3">
            <div class="container">
                <div class="row">
                    <?php
                    while($colls=mysqli_fetch_array($Getbackdata))
                    {
                        ?>

                    <div class="col-lg-4">
                        <div class="banner-item img-hover_effect">
                            <a href="type_detail.php?pass=<?php echo $colls['type_id']; ?>">
                                <img class="img-full" src="type_img/<?php echo $colls['image'];?>" alt="Hiraola's Banner">
                            </a>
                        </div>
                        <div align="center" class="hiraola-section_title"><h4><?php echo $colls['name'];?></h4></div>
                    </div>
              <?php                
              }
            ?>
                                    

                </div>
            </div>
        </div>



        
<?php
include('user_footer.php');
?>
    </body>
</html>

