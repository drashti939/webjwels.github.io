
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/admin_header.css">
    <link rel="stylesheet" href="css/adminpanel.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="add">
        <div class="left">Admin</div>
        <div class="right"><i class="fa-solid fa-user">&nbsp;</i><?php echo $_SESSION['users']; ?>
        
        <br><a href="change_password.php">Change Password</a>&nbsp; || &nbsp;<a href="logout.php">Logout</a></div>
    </div>

 <div class="adds">  
    
 <div class="menu">
        <ul>
            <li><a href="type.php">Type</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="slider.php">Slider</a></li>
            <li><a href="gallary.php">Gallary</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="contact_data.php">Contact Us</a></li>
            <li><a href="coupon.php">coupon</a></li>
            <li><a href="info.php">information</a></li>
            <li><a href="billindata.php">Billingdata</a></li>
        </ul>
    </div>
    </body>
</html>

