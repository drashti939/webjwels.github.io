<?php
session_start();
include('db.php');
include('admin_header.php');

if(isset($_REQUEST['edit']))
{
  $ids=$_REQUEST['edit'];  
  $xyz="select *from info where info_id='$ids' ";
  $v=mysqli_query($abc,$xyz);
  $z=mysqli_fetch_array($v);
}


$get="select *from info";
$b=mysqli_query($abc,$get);

if(isset($_REQUEST['get']))

{
    $name=$_REQUEST['name'];
    $add=$_REQUEST['address'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];

  $sql="update info set name='$name', address='$add', phone='$phone', email='$email' where info_id='$ids'";
  mysqli_query($abc,$sql);
  echo "data Success";  
  header("location:info.php");
}

if(isset($_REQUEST['del']))
{
  $id=$_REQUEST['del'];
  $delt="delete from info where info_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:info.php");

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main_box">

    <form action="" class="form" method="post">
    <div class="cate">Add Team Form</div>

    <div class="type">

    <div class="file">   
    <div class="done">Name</div>
    <div><input type="text" class="text" name="name" value="<?php echo $z['name'];?></div>
    </div>
    

    <div class="file">   
    <div class="done">Address</div>
    <div><input type="text" class="text" name="address" value="<?php echo $z['add'];?>"></div>
    </div>
    
    </div>

<div class="type">

<div class="file">   
<div class="done">Phone</div>
<div><input type="text" class="text" name="phone" value="<?php echo $z['phone'];?>"></div>
</div>

<div class="file">   
<div class="done">Email</div>
<div><input type="email" class="text" name="email" value="<?php echo $z['email'];?>"></div>
</div>
</div>


<div class="sub"><input type="submit" class="but" name="get"></div>


</form>

    <div class="view">information Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Address</th>
        <th>phone</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>

<tbody>
    <?php
    $no=1;
     while($d=mysqli_fetch_array($b))
     {
      ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php  echo $d['name'];?></td>
            <td><?php  echo $d['address'];?></td>
            <td><?php  echo $d['phone'];?></td>
            <td><?php  echo $d['email'];?></td>


              <td>
                  <a href="info.php?del=<?php echo $d['info_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>

            </td>
        </tr>
      <?php
     }
    ?>
    </tbody>
</table>

</div>

    </div>  

   
<script>new DataTable('#example');</script>
</body>
</html>    
</body>
</html>