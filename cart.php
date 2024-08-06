<?php
ob_start();
session_start();
include('db.php');
include('user_header1.php');


$sql="select *from coupon";
$data=mysqli_query($abc,$sql);
$data1=mysqli_fetch_array($data);


if(isset($_REQUEST['update_cart']))
{
  $ida=$_REQUEST['update_cart'];
  $qty=$_REQUEST['qty'];
  
  $total=$_REQUEST['total'];

  $sqli="update cart set qty='$qty',total='$total' where cart_id='$ida' ";
  
  mysqli_query($abc,$sqli);
  header("location:cart.php");
}

if(isset($_REQUEST['apply_coupon']))
{
    @$z=$_REQUEST['coupon_code'];
} 

$email=$_SESSION['user_email'];
$sql="select *from cart where user_email='$email' ";
$data=mysqli_query($abc,$sql);

if(isset($_REQUEST['delete']))
{
   $id=$_REQUEST['delete'];
   $xql="delete from cart where cart_id='$id' ";
   mysqli_query($abc,$xql);
   header("location:cart.php");

}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:23 GMT -->
<head>
    <style>
        .cart_img
        {
            max-width:150px;
        }
        .txt 
        {
            border:none;
            outline:none;
            width: 50%;
            text-align:center;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart || Hiraola - Jewellery eCommerce Bootstrap 5 Template</title>
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
<script>
    function Getcalc(id)
    {
        var rate=Number(document.getElementById('rate'+id).value);
        var qty=Number(document.getElementById('qty'+id).value);

        sum=rate * qty;
        document.getElementById('amt'+id).value=sum;
    }
</script>
<style>
    .button
    {
    background-color: #595959;
    border: 1px solid #e5e5e5;
    color: #ffffff;
    display: inline-block;
    margin-top: 30px;
    padding: 10px 20px;
    text-transform: capitalize;
    }

    .qty
    {
        width:40px;
        text-align:center;
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
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Hiraola's Cart Area -->
        <div class="hiraola-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="hiraola-product-remove">remove</th>
                                            <th class="hiraola-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="hiraola-product-price">Unit Price</th>
                                            <th class="hiraola-product-quantity">Quantity</th>
                                            <th class="hiraola-product-subtotal">Total</th>
                                            <th class="hiraola-product-subtotal">Update</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $CartTotal=0;
                                    while($cart=mysqli_fetch_array($data))

                                    {
                                        $CartTotal+= $cart['total'];
                                      ?>
                                    <tbody>
                                    <form action="cart.php?update_cart=<?php echo $cart['cart_id'];?>" method="post">    
                                    <tr>
                                            <td class="hiraola-product-remove"><a href="cart.php?delete=<?php echo $cart['cart_id'];?>" onclick="return confirm('are you sure delete this data')"><i class="fa fa-trash"
                                            title="Remove"></i></a></td>
                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img src="product_img/<?php echo $cart['image'];?>" alt="Hiraola's Cart Thumbnail" class="cart_img"></a></td>
                                            <?php
                                            $ids=$cart['product_id'];
                                            $file="select *from product where product_id='$ids' ";
                                            $get=mysqli_query($abc,$file);
                                            $hide=mysqli_fetch_array($get);

                                            ?>
                                            <td class="hiraola-product-name"><a href="javascript:void(0)"><?php echo $hide['name']; ?></a></td>
                                            <td class="hiraola-product-price"><span class="amount">
                                            <input type="text" value="<?php echo $hide['rate']; ?>" readonly class="txt" id="rate<?php echo $cart['cart_id'];?>" onkeyup="Getcalc(<?php echo $cart['cart_id'];?>)">    
                                           </span></td>
                                            <td class="quantity">
                                                <div>
                                                    <input name="qty" value="<?php echo $cart['qty']; ?>" type="number"   id="qty<?php echo $cart['cart_id'];?>" onkeyup="Getcalc(<?php echo $cart['cart_id'];?>)" class="qty">
                                                    <!-- <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div> -->
                                                </div>
                                            </td>
                                            <td>
                                            <input type="text" name="total" value="$<?php echo $cart['total']; ?>" readonly class="txt" id="amt<?php echo $cart['cart_id'];?>">
                                        
                                            </td>

                                            <td>
                                              <input type="submit" value="UPDATE CART" class="button">
                                        
                                            </td>
                                        </tr>
                                    </form>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <form method="post">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon"  type="submit">

                                            <?php
                                               if($data1['name'] == @$z)
                                               {
                                                  ?>
                                                <span style="color:green;"> <?php echo $data1['rate']."% Off"; ?> </span>
                                                   <?php
                                                }
                                               else
                                               {
                                                ?>
                                                <span style="color:red;"> <?php echo "Coupan Invalid";?> </span>
                                                   <?php
                                                
                                               }
                                            ?>

                                           </form>
                                           
                                        </div>
                                        <!-- <div class="coupon2">
                                            <input class="button" name="update_cart" value="UPDATE CART" type="submit">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <?php 
                                            if($data1['name'] == @$z)
                                            {
                                             $DisAmt=$CartTotal * $data1['rate'] /100 ;
                                             @$FinalAmt=$CartTotal - $DisAmt;
                                            }
                                            else
                                            {
                                                @$FinalAmt=$CartTotal;
                                            }
                                            ?>
                                            <li>Total <span>$<?php echo @$FinalAmt;?></span></li>
                                        </ul>
                                        <a href="cheakout.php">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hiraola's Cart Area End Here -->
        <!-- Begin Hiraola's Footer Area -->
        <?php
         include('user_footer.php');
         ?>
         
        <!-- Hiraola's Footer Area End Here -->

    </div>

    <!-- JS
============================================ -->

    
</body>


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:23 GMT -->
</html>