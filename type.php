<?php

session_start();
include('db.php');
include('admin_header.php');

if(!$_SESSION['users'])
{
    header("location:login.php");
}


$get="select *from types";
$b=mysqli_query($abc,$get);

if(isset($_REQUEST['get']))

{
    $name=$_REQUEST['name'];
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'type_img/'.$img);

  $sql="insert into types (name,image) values ('$name','$img')";
  mysqli_query($abc,$sql);
  echo "data Success";  
  header("location:type.php");
}

if(isset($_REQUEST['del']))
{
  $id=$_REQUEST['del'];
  $delt="delete from types where type_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:type.php");

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
<form action="" class="form" method="post" enctype="multipart/form-data">

<div class="cate">Add Type Form</div>


    <div class="type">

     <div class="file">   
    <div class="done">Username</div>
    <div><input type="text" class="text" name="name"></div>
    </div>
    
    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"></div>
    </div>
    </div>

    <div class="sub"><input type="submit" class="but" name="get"></div>

</form>

<div class="view">Type Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Type Name</th>
        <th>Image</th>
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
            <td><img src="type_img/<?php echo $d['image'];?>" width="70" height="70"></td>
            <td>
                  <a href="type.php?del=<?php echo $d['type_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>
                  <a href="type_edit.php?edit=<?php echo $d['type_id']; ?>"><i class="fa-solid fa-pencil"></i></a>
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