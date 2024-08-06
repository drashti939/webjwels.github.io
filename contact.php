<?php
ob_start();
session_start();
include('db.php');
include('user_header1.php');

$sqli="select *from info order by info_id DESC LIMIT 1";
$xyz=mysqli_query($abc,$sqli);

if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $sub=$_REQUEST['subject'];
    $msg=$_REQUEST['message'];

    $sql="insert into contact (name,email,subject,message) values ('$name','$email','$sub','$msg')";
    mysqli_query($abc,$sql);
    header("location:contact.php");


}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact || Hiraola - Jewellery eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
  

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

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
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Hiraola's Breadcrumb Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <div id="google-map"></div>
            </div>
            <div class="container">
                <div class="row">
                           
                            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">

                                                   
                        <div class="contact-page-side-content">
                            
                            <h3 class="contact-page-title">Contact Us</h3>
                            <p class="contact-page-message">Claritas est etiam processus dynamicus, qui sequitur
                                mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                                claram anteposuerit litterarum formas human.</p>
                            <?php
                            while($add=mysqli_fetch_array($xyz))
                            {
                            ?>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Address</h4>
                                <p><?php echo $add['address']; ?></p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Phone</h4>
                                <p><?php echo $add['phone']; ?></p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                <p><?php echo $add['email']; ?></p>
                            </div>
                        <?php
                        }
                    ?>  
                        </div>
                            
                    
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Tell Us Your Message</h3>
                            <div class="contact-form">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email <span class="required">*</span></label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>Your Message</label>
                                        <textarea name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="hiraola-contact-form_btn" name="submit">send</button>
                                    </div>
                                </form>
                                <p class="form-message mt-3 mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->
       
<?php
include('user_footer.php');
?>        
    </div>

   

</body>


<!-- Mirrored from template.hasthemes.com/hiraola/hiraola/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 11:05:26 GMT -->
</html>