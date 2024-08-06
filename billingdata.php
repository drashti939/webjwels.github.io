<?php
session_start();
include('db.php');
include('admin_header.php');

$otp="select *from billing";
$data=mysqli_query($abc,$otp);

if(isset($_REQUEST['status_update']))
{
    $id=$_REQUEST['status_update'];
    $sql="update billing set status='success' where bill_id='$id' ";
    $data=mysqli_query($abc,$sql);
    header("location:billingdata.php");
}
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

<div class="view">Chaeakout Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Email</th>
        <th>Product_id</th>
        <th>Rate</th>
        <th>Qautity</th>
        <th>Total</th>
        <th>Status</th>
    </tr>
    </thead>

<tbody>
    <?php
    $no=1;
     while($d=mysqli_fetch_array($data))
     {
      ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php  echo $d['user_email'];?></td>
            <td><?php  echo $d['product_id'];?></td>
            <td><?php  echo $d['rate'];?></td>
            <td><?php  echo $d['qty'];?></td>
            <td><?php  echo $d['total'];?></td>
            <td>
                   <?php
                       if($d['status']=='pending')
                       {
                           ?>
                           <a href="billingdata.php?status_update=<?php echo $d['bill_id'];?>" style="color:red;"><?php echo $d['status'];?></a>
                           <?php
                       }
                       if($d['status']=='cancle')
                       {
                          ?>
                                 <div style="color:orange;"> <?php  echo $d['status'];?></div>
                                 <?php
                       }
                       else
                       {
                           ?>
                           <div style="color:green;"> <?php  echo $d['status'];?></div>
                           <?php
                       }
                   ?>
                 
            </td>

        </tr>
      <?php
     }
    ?>
    </tbody>
</table>

</div>

    </div>  

</div>  
<script>new DataTable('#example');</script>
</body>
</html>
</body>
</html>