<?php
include('db.php');
session_start();

if(isset($_REQUEST['get']))
{
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$sql="select *from admin_login where username='$user' and password='$pass'";
$ac=mysqli_query($abc,$sql);
if(mysqli_num_rows($ac))
{
  $_SESSION['users']=$user;
   $s_msg="login success";
   header('location:type.php');
}
else
{
    $msg="login invalid";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="box">
        <h1 align="center"> Admin Login </h1>
        
        <form action="" method="post" autocomplete="off">
         <?php
              if(isset($msg))
              {
                ?>
                <div class="error_msg"><?php echo $msg;?></div>
                <?php
              }
              if(isset($s_msg))
              {
                echo $s_msg;
              }
         ?>
        <div><input type="text" placeholder="Enter username" class="abc" name="username" autofocus></div>

             <div><input type="Password" placeholder="Enter Password" class="abc" name="password"></div>

             <div> Forget Password? </div>
             <br>

             <div><input type="submit" value="Login" class="stu" name="get"></div>
        </form>
    </div>
</body>
</html>