<?php
session_start();
include('db.php');
include('admin_header.php');


if(isset($_REQUEST['edit']))
{
  $ids=$_REQUEST['edit'];  
  $xyz="select *from blog where blog_id='$ids' ";
  $v=mysqli_query($abc,$xyz);
  $z=mysqli_fetch_array($v);
}

$get="select *from blog";
$b=mysqli_query($abc,$get);

if(isset($_REQUEST['get']))

{
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'blog_img/'.$img);
    if($img=='')
    {
        $img=$z['image'];
    }
    else{
        unlink('blog_img/'.$z['image']);
    }
    $name = mysqli_real_escape_string($abc, $_REQUEST['name']);
    $detail = mysqli_real_escape_string($abc, $_REQUEST['detail']);
   

$sql="update blog set image='$img', name='$name', detail='$detail' where blog_id='$ids' ";
  mysqli_query($abc,$sql);
  echo "data Success";  
  header("location:blog.php");
}

if(isset($_REQUEST['del']))
{
  $id=$_REQUEST['del'];
  $delt="delete from blog where blog_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:blog.php");

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

    <form action="" class="form" enctype="multipart/form-data" method="post">
    <div class="cate">Add Blog Form</div>

    <div class="type">

    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"><img src="blog_img/<?php echo $z['image'];?>" width="70" height="70"></div>
    </div>

    <div class="file">   
    <div class="done">Name</div>
    <div><input type="text" class="text" name="name" value="<?php echo $z['name'];?>"></div>
    </div>
    
    </div>

<div class="type">

<div class="file">   
<div class="done">Discription</div>
<div><input type="text" class="text" name="detail" value="<?php echo $z['detail'];?>"></div>
</div>


</div>


<div class="sub"><input type="submit" class="but" name="get"></div>


</form>

    <div class="view">Blog Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Discription</th>
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
            <td><img src="blog_img/<?php echo $d['image'];?>" width="70" height="70"></td>
            <td><?php  echo $d['name'];?></td>
            <td><?php  echo $d['detail'];?></td>


              <td>
                  <a href="blog.php?del=<?php echo $d['blog_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
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