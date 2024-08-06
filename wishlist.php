<?php
ob_start();
session_start();
include('db.php');
include('user_header1.php');

$sql="select *from wishlist";
$data=mysqli_query($abc,$sql);

if(isset($_REQUEST['delete']))
{
   $id=$_REQUEST['delete'];
   $xql="delete from wishlist where wishlist_id='$id' ";
   mysqli_query($abc,$xql);
   header("location:wishlist.php");

}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wishlist || Hiraola - Jewellery eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
  
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
<style>
    .wish_img
    {
        max-width:150px;
    }
</style>
</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Hiraola's Header Main Area -->
        
        <!-- Begin Hiraola's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!--Begin Hiraola's Wishlist Area -->
        <div class="hiraola-wishlist_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="hiraola-product_remove">remove</th>
                                            <th class="hiraola-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="hiraola-product-price">Unit Price</th>
                                            <th class="hiraola-product-stock-status">Stock Status</th>
                                            <th class="hiraola-cart_btn">add to cart</th>
                                        </tr>
                                    </thead>
                                    <?php
                                            while($wish=mysqli_fetch_array($data))
                                            {
                                            ?>

                                    <tbody>
                                          
                                        <tr>
                                            <td class="hiraola-product_remove"><a href="javascript:void(0)"><i class="fa fa-trash"
                                                title="Remove"></i></a></td>
                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img src="product_img/<?php echo $wish['image'];?>" alt="Hiraola's Wishlist Thumbnail" class="wish_img"></a>
                                            </td>
                                            <?php
                                            $ids=$wish['product_id'];
                                            $file="select *from product where product_id='$ids' ";
                                            $get=mysqli_query($abc,$file);
                                            $hide=mysqli_fetch_array($get);
                                             ?>
                                            <td class="hiraola-product-name"><a href="javascript:void(0)"><?php echo $hide['name']; ?></a></td>
                                            <td class="hiraola-product-price"><span class="amount"><?php echo $hide['rate']; ?></span></td>
                                            <td class="hiraola-product-stock-status"><span class="in-stock">in stock</span></td>
                                            <td class="hiraola-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                        </tr>
                                        </tbody>
                                        <?php
                                        }

                                        ?>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hiraola's Footer Area End Here -->

    </div>

    <!-- JS
============================================ -->

<?php
include('user_footer.php');
?>  

</body>


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:22 GMT -->
</html>