<?php
include('db.php');
include('admin_header.php');


if(isset($_REQUEST['edit']))
{
  $ids=$_REQUEST['edit'];  
  $xyz="select *from gallary where gallary_id='$ids' ";
  $v=mysqli_query($abc,$xyz);
  $z=mysqli_fetch_array($v);
}

$cat="select *from gallary";
$GetCatData=mysqli_query($abc,$cat);

$ttc="select *from types";
$m=mysqli_query($abc,$ttc);

if(isset($_REQUEST['gets']))
{
    $type=$_REQUEST['type_id'];
    $name=$_REQUEST['name'];
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],'gal_img/'.$img) ;

    if($img=='')
    {
        $img=$z['image'];
    }
    else{
        unlink('gal_img/'.$z['image']);
    }

 $sql="update gallary set type_id='$type', name='$name', image='$img' where gallary_id='$ids' ";
 mysqli_query($abc,$sql);
 echo "data success"; 
 header("location:gallary.php");  

}

if(isset($_REQUEST['delete']))
{
  $id=$_REQUEST['del'];
  $delt="delete from gallary where category_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:gallary.php");

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

<div class="cate">Add Gallary Form</div>


    <div class="type">

    <div class="file">
    <div class="done">Select Type Name</div>
        <select name="type_id" id="" class="text">
            <option value="" hidden>Select Type Name</option>
            <?php
             while($ps=mysqli_fetch_array($m))
             {
                if($z['type_id']==$ps['type_id'])
                {   
                    ?>             
                    <option value="<?php echo $ps['type_id']; ?>" selected><?php echo $ps['name']; ?></option>
                    <?php
                }
                else
                {
              ?>
              <option value="<?php echo $ps['type_id'];?> "><?php echo $ps['name'];?></option>
              <?php
                }
             }
             ?>
            
        </select>
    </div>

     <div class="file">   
    <div class="done">Gallary Name</div>
    <div><input type="text" class="text" name="name" value="<?php echo $z['name']; ?>"></div>
    </div>
    
    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image" ><img src="gal_img/<?php echo $z['image']; ?>" alt="" width="80px" height="80px"></div>
    </div>
    </div>

    <div class="sub"><input type="submit" class="but" name="gets"></div>

</form>

<div class="view">Gallary Data View</div>

<table border="1" align="center">
    <tr>
        <th>No</th>
        <th>Type_id</th>
        <th>Gallary Name</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
      
    <?php
    while($data=mysqli_fetch_array($GetCatData))
    {
      $id=$data['type_id'];
      $state="select *from types where type_id='$id'";
      $copy=mysqli_query($abc,$state);
      $ph=mysqli_fetch_array($copy);
    ?> 
    <tr>
        <td><?php echo $data['gallary_id']; ?></td>
        <td><?php echo $ph['name']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><img src="gal_img/<?php echo $data['image']; ?>" alt="" width="80px" height="80px"></td>
        <td>
                  <a href="type.php?delete=<?php echo $data['gallary_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
    </td>

    
    </tr>

    <?php
    }
    ?>
</table>

</div>

</div>  

</body>
</html>