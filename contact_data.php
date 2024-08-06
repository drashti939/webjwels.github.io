<?php
error_reporting(0);
ob_start();
session_start();


if(!$_SESSION['users'])
{
    header("location:login.php");
}


include('db.php');
include('admin_header.php');


$sqli="select *from contact";
$xyz=mysqli_query($abc,$sqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main_box">

<div class="view">Type Data View</div>

    <table border="1" align="center" id="example">
        <thead>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        </thead>
        
        <tbody>
        <tr>
            <?php
            $no=1;
            while($view=mysqli_fetch_array($xyz))
            {
              ?>
              <td><?php echo $no++; ?></td>
              <td><?php echo $view['name']; ?></td>
              <td><?php echo $view['email']; ?></td>
              <td><?php echo $view['subject']; ?></td>
              <td><?php echo $view['message']; ?></td>
              <?php
            }
            ?>
            
        </tr>
        </tbody>
    </table>
    <script>new DataTable('#example');</script>
</div>
</body>
</html>