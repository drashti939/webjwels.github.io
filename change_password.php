<?php
session_start();
include('db.php');
include('admin_header.php');

if(isset($_REQUEST['get']))
{
   $user=$_REQUEST['username'];
   $pass=$_REQUEST['password'];
   $Npass=$_REQUEST['N_pass'];
   $Cpass=$_REQUEST['C_pass'];

   if($pass=='')
   {
    $passerror="Please Enter Password Required";
   }

   if($Npass=='')
   {
    $Npasserror="Please Enter New Password Required";
   }

   if($Cpass=='')
   {
    $Cpasserror="Please Enter Confirm Password Required";
   }

   $sql="select *from admin_login where username='$user' and password='$pass'";
   $xy=mysqli_query($abc,$sql);
   if(mysqli_num_rows($xy))
   {
    if($Npass == $Cpass)
    {
      $vt="update admin_login set password='$Npass' where username='$user'";
      mysqli_query($abc,$vt);
      $success="Your Password Update Successfully";
    }
    else
    {
        $error="Not Same";
    }
      
   }
   else
   {
     $errors="Login Invalid";
   }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .adds
    {
        height:100%;
    }
    .red
    {
       color:red;
    }
    .green 
    {
        color:green;
    }
</style>
<body>
<div class="main_box">

<form action="" class="form" method="post">

<div class="cate">Change Password Form</div>


    <div class="type">

     <div class="file">   
    <div class="done">Username</div>
    <div class="file1"><input type="text" class="text" name="username" value="<?php echo $_SESSION['users']; ?>" readonly name="username"></div>
    </div>
    
    <div class="file">
    <div class="done">Password</div>
    <div class="file1"><input type="password" class="text" name="password"></div>
    <div class="red">
    <?php
    if(isset($passerror))
    {
        echo $passerror;
    }
    ?>
    </div>
    </div>
    </div>

    <div class="type">

     <div class="file">   
    <div class="done">New Password</div>
    <div class="file1"><input type="password" class="text" name="N_pass"></div>
    <div class="red">
    <?php
    if(isset($Npasserror))
    {
        echo $Npasserror;
    }
    ?>
    </div>
    </div>
    
    <div class="file">
    <div class="done"> Confirm Password</div>
    <div class="file1"><input type="password" class="text" name="C_pass"></div>
    <div class="red">
    <?php
    if(isset($Cpasserror))
    {
        echo $Cpasserror;
    }
    ?>
    </div>
    </div>
    </div>


    <div class="sub"><input type="submit" class="but" name="get">
    <span class="red">
    <?php if(isset($error)){echo "$error";} ?>
    <?php if(isset($errors)){echo "$errors";} ?>
</span>
<span class="green"><?php if(isset($success)){echo "$success";} ?></span>
</div>

</form>


</body>
</html>