
<?php
session_start();
// ob_start();
include('db.php');
include('user_header.php');



if(!$_SESSION['user_email'])
{
    header("location:loginfisrt.php");
}
$user=$_SESSION['user_email'];
$get="select *from register where email='$user'";
$z=mysqli_query($abc,$get);
$GetUserData=mysqli_fetch_array($z);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  

.main-body {
    padding: 15px;
    margin-top:100px;
    position: relative;
    z-index: -1;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

.header-bottom_area.header-bottom_area-2 .container-fliud
        { 
            top:40px !important;
        }
        .header-bottom_area.header-bottom_area-2
        {
             z-index: 0 !important; 
             border-bottom:0px !important;
        }
    </style>
</head>
<body>

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
 
<div class="container">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>                       
                        <?php echo $GetUserData['firstname'];?>
                      <?php echo $GetUserData['lastname'];?>
                      </h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $GetUserData['firstname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $GetUserData['lastname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $GetUserData['email'];?>
                    </div>
                  </div>
                  <hr>

                </div>
              </div>

              
            </div>
          </div>

        </div>
    </div>

<?php
include('user_footer.php');
?>

</body>
</html>