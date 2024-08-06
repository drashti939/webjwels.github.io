<?php
ob_start();
session_start();
include('db.php');
include('user_header1.php');

if(!$_SESSION['user_email'])
{
     header("location:loginfirst.php");
}

$account=$_SESSION['user_email'];
$sql="select *from billing where user_email='$account'";
$data=mysqli_query($abc,$sql);

if(isset($_REQUEST['update']))
{
    $id=$_REQUEST['update'];
    $sql="update billing set status='cancle' where bill_id='$id' ";
    $data=mysqli_query($abc,$sql);
    header("location:myaccount.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.css">

    <style>
table
{
    width:80%; 
    border-collapse: collapse;
    text-align: center;
    margin-top: 40px;
    padding:30px;
    margin-bottom:40px;
    
}
table tr th
{
    text-align: center !important;
    padding: 6px;
}

table, th, td 
{
    border: 1px solid black;
}

table tr td
{
    text-align: center !important;
    padding: 10px;
}
.view
{
    font-size: 20px;
    font-weight: 600;
    padding: 10px;


}

</style>
</head>
<body>  
    
<table border="1" align="center">
    <thead>
    <tr>
        <th>No</th>
        <th>Product Image</th>
        <th>Rate</th>
        <th>Quntity</th>
        <th>Amount</th>
        <th>Status</th>

    </tr>
    </thead>

<tbody>
    <?php
    $no=1;
     while($d=mysqli_fetch_array($data))
     {
      ?>

<?php
    $ids=$d['product_id'];
    $file="select *from product where product_id='$ids' ";
    $get=mysqli_query($abc,$file);
    $hide=mysqli_fetch_array($get);

 ?>
                                   
        <tr>
            <td><?php echo $no++; ?></td>
            <td>
            <img src="product_img/<?php echo $hide['image']; ?>" alt="Product Image" height="90px" width="90px">
            </td>
            <td><?php  echo $d['rate'];?></td>
            <td><?php  echo $d['qty'];?></td>
            <td><?php  echo $d['total'];?></td>

            <td>
                <?php
                 if($d['status']=='pending')
                 {
                    ?>
                    <a href="myaccount.php?update=<?php echo $d['bill_id'];?>"><?php echo $d['status'];?></a>
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

           
        </tr>
      <?php
     }
    ?>
    </tbody>
</table>



<?php
include('user_footer.php');
?>
</body>
</html>