<?php
session_start();
include('db.php');
include('admin_header.php');

if(!$_SESSION['users'])
{
    header("location:login.php");
}

$cat="select *from category";
$GetCatData=mysqli_query($abc,$cat);

$ttc="select *from types";
$m=mysqli_query($abc,$ttc);

if(isset($_REQUEST['gets']))
{
    $type=$_REQUEST['type_id'];
    $name=$_REQUEST['name'];
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'cat_img/'.$img) ;

 $sql="insert into category (type_id,name,image) values ('$type','$name','$img')";
 mysqli_query($abc,$sql);
 echo "data success"; 
 header("location:category.php");  

}

if(isset($_REQUEST['delete']))
{
  $id=$_REQUEST['delete'];
  $delt="delete from category where category_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:category.php");

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

<div class="cate">Add Category Form</div>


    <div class="type">

    <div class="file">
    <div class="done">Select Type Name</div>
        <select name="type_id" id="type_id" class="text">
            <option value="" hidden>Select Type Name</option>
            <?php
             while($ps=mysqli_fetch_array($m))
             {
              ?>
              <option value="<?php echo $ps['type_id'];?> "><?php echo $ps['name'];?></option>
              <?php
             }
             ?>
            
        </select>
    </div>


     <div class="file">   
    <div class="done">Category Name</div>
    <div><input type="text" class="text" name="name"></div>
    </div>
    
    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"></div>
    </div>
    </div>

    <div class="sub"><input type="submit" class="but" name="gets"></div>

</form>

<div class="view">Category Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Type_id</th>
        <th>Category Name</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    </thead>
   
    <tbody>
    <?php
    $no=1;
    while($data=mysqli_fetch_array($GetCatData))
    {
      $id=$data['type_id'];
      $state="select *from types where type_id='$id'";
      $copy=mysqli_query($abc,$state);
      $ph=mysqli_fetch_array($copy);
    ?> 
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $ph['name']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><img src="cat_img/<?php echo $data['image']; ?>" alt="" width="80px" height="80px"></td>
        <td>
                  <a href="type.php?delete=<?php echo $data['category_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>
                  <a href="category_edit.php?edit=<?php echo $data['category_id']; ?>"><i class="fa-solid fa-pencil"></i></a>
            </td>

    
    </tr>

    <?php
    }
    ?>

    </tbody>
</table>

</div>

</div>  

<script>
    new DataTable('#example');
</script>
</body>
</html>