<?php
session_start();
include('db.php');
include('admin_header.php');

if(isset($_REQUEST['edit']))
{
  $ids=$_REQUEST['edit'];  
  $xyz="select *from slider where slider_id='$ids' ";
  $v=mysqli_query($abc,$xyz);
  $z=mysqli_fetch_array($v);
}

$get="select *from slider";
$b=mysqli_query($abc,$get);

if(isset($_REQUEST['gets']))
{
  $name=$_REQUEST['name'];
  $img=$_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'],'slider_img/'.$img);
  if($img=='')
    {
        $img=$z['image'];
    }
    else{
        unlink('slider_img/'.$z['image']);
    }

  $sql="update slider set name='$name', image='$img' where slider_id='$ids' ";
  mysqli_query($abc,$sql);
  echo "data Success";  
  header("location:slider.php");
}


if(isset($_REQUEST['del']))
{
  $id=$_REQUEST['del'];
  $delt="delete from slider where slider_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:slider.php");

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
    <div class="done">Slider Name</div>
    <div><input type="text" class="text" name="name" value="<?php echo $z['name']; ?>"></div>
    </div>
    
    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"><img src="slider_img/<?php echo $z['image'];?>" width="70" height="70"></div>
    </div>
    </div>

    <div class="sub"><input type="submit" class="but" name="gets"></div>

</form>

<div class="view">Slider Data View</div>

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
            <td><img src="slider_img/<?php echo $d['image'];?>" width="70" height="70"></td>
            <td>
                  <a href="slider.php?del=<?php echo $d['slider_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>                  
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