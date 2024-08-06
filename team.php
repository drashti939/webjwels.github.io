<?php
session_start();
include('db.php');
include('admin_header.php');

$get="select *from team";
$b=mysqli_query($abc,$get);

if(isset($_REQUEST['get']))

{
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'team_img/'.$img);
    $name=$_REQUEST['username'];
    $type=$_REQUEST['type'];
    $email=$_REQUEST['email'];

  $sql="insert into team (image,username,type,email) values ('$img','$name','$type','$email')";
  mysqli_query($abc,$sql);
  echo "data Success";  
  header("location:team.php");
}

if(isset($_REQUEST['del']))
{
  $id=$_REQUEST['del'];
  $delt="delete from team where team_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:team.php");

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
    <div class="cate">Add Team Form</div>

    <div class="type">

    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"></div>
    </div>

    <div class="file">   
    <div class="done">Username</div>
    <div><input type="text" class="text" name="username"></div>
    </div>
    
    </div>

<div class="type">

<div class="file">   
<div class="done">Type Name</div>
<div><input type="text" class="text" name="type"></div>
</div>

<div class="file">   
<div class="done">Email</div>
<div><input type="email" class="text" name="email"></div>
</div>
</div>


<div class="sub"><input type="submit" class="but" name="get"></div>


</form>

    <div class="view">Type Data View</div>

<table border="1" align="center" id="example">
    <thead>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Username</th>
        <th>TypeName</th>
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
            <td><img src="team_img/<?php echo $d['image'];?>" width="70" height="70"></td>
            <td><?php  echo $d['username'];?></td>
            <td><?php  echo $d['type'];?></td>
            <td><?php  echo $d['email'];?></td>


              <td>
                  <a href="team.php?del=<?php echo $d['team_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>
                  <a href="team_edit.php?edit=<?php echo $d['team_id']; ?>"><i class="fa-solid fa-pencil"></i></a>

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