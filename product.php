<?php

session_start();
include('db.php');
include('admin_header.php');

if(!$_SESSION['users'])
{
    header("location:login.php");
}


$get="select *from product";
$getdata=mysqli_query($abc,$get);

$sql="select *from types";
$gettype=mysqli_query($abc,$sql);

if(isset($_REQUEST['gets']))
{ 
   $type=$_REQUEST['type_id'];
   $cat=$_REQUEST['category_id'];
   $name=$_REQUEST['name'];
   $rate=$_REQUEST['rate'];
   $disc=$_REQUEST['discription'];
   $img=$_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],'product_img/'.$img);
   $img1=$_FILES['image1']['name'];
   move_uploaded_file($_FILES['image1']['tmp_name'],'product_img/'.$img1);

   $xyz="insert into product (type_id,category_id,name,rate,discription,image,image1) values ('$type','$cat','$name','$rate','$disc','$img','$img1')";
   mysqli_query($abc,$xyz);
   echo "data Success";
   header("location:product.php");
}

if(isset($_REQUEST['delete']))
{
  $id=$_REQUEST['delete'];
  $delt="delete from product where product_id='$id' ";
  mysqli_query($abc,$delt);
  header("location:category.php");

}


if(isset($_REQUEST['cats']))
{
  $Idss=$_REQUEST['cats'];
   
  $sql1="select *from category where type_id='$Idss'";
  $GetStateCity=mysqli_query($abc,$sql1);
  ?>
  <option hidden value="">Select Category Name</option>
  <?php
       while($c=mysqli_fetch_array($GetStateCity))
       {
          ?>
           <option value="<?php echo $c['category_id'];?>"><?php echo $c['name'];?></option>
          <?php
       }
}
?>

    <script>
        var xyz;
        function Getcatchange()
        {
          xyz=$('#type_id').val();
            $('#category_id').load("GetCat.php?cats="+xyz);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <style>
      .main_flex
      {
        display:flex;
        width:100%;
      }  
    </style>

<div class="main_box">

<form action="" class="form" method="post" enctype="multipart/form-data">

<div class="cate">Add Prodcut Form</div>


    <div class="type">

<div class="main_flex">

    <div class="file">
        <div class="done">Select Type Name</div>
        <select name="type_id" id="type_id" class="text" onchange="Getcatchange()">
            <option value="" hidden>Select type name</option>
            <?php
             while($get=mysqli_fetch_array($gettype))
             {
              ?>
             <option value="<?php echo $get['type_id']; ?>"><?php echo $get['name']; ?></option>
              <?php
             }
            ?>
            
        </select>
    </div>

    <div class="file">
        <div class="done"> Select category Name</div>
        <select name="category_id" id="category_id" class="text">
  <option  hidden>Select Category Name</option>
</select>

    </div>

     <div class="file">   
    <div class="done">Product Name</div>
    <div><input type="text" class="text" name="name"></div>
    </div>
</div>  

</div>

    
 <div class="main_flex">

 <div class="file">
    <div class="done">Rate</div>
    <div><input type="number" class="text" name="rate"></div>
 </div>

 <div class="file">
    <div class="done">Discription</div>
    <div><input type="text" class="text" name="discription"></div>
 </div>
    
    <div class="file">
    <div class="done">Image</div>
    <div class="file1"><input type="file" class="text" name="image"></div>
    </div>

    <div class="file">
    <div class="done">Image-2</div>
    <div class="file1"><input type="file" class="text" name="image1"></div>
    </div>

  


 </div>  


    <div class="sub"><input type="submit" class="but" name="gets"></div>

</form>

<div class="view">Product Data View</div>

<table border="1" align="center" id="example">

<thead>
    <tr>
        <th>No</th>
        <th>Type Name</th>
        <th>Category Id</th>
        <th>Product Id</th>
        <th>Rate</th>
        <th>Discription</th>
        <th>Image</th>
        <th>Image-1</th>
        <th>Action</th>
    </tr>

    </thead>
    
    
    <tbody>

    <?php
    $no=1;
    while($pr=mysqli_fetch_array($getdata))
      {
        $ids=$pr['type_id'];
        $state="select *from types where type_id='$ids '";
        $copy=mysqli_query($abc,$state);
        $ph=mysqli_fetch_array($copy);

       $idd=$pr['category_id'];
      $category="select *from category where category_id='$idd'";
      $set=mysqli_query($abc,$category);
      $oh=mysqli_fetch_array($set);
         ?>
         <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $ph['name'];?></td>
            <td><?php echo $oh['name'];?></td>
            <td><?php echo $pr['name'];?></td>
            <td><?php echo $pr['rate'];?></td>
            <td><?php echo $pr['discription'];?></td>
            <td><img src="product_img/<?php echo $pr['image']; ?>" alt="" height="90px" width="90px"></td>
            <td><img src="product_img/<?php echo $pr['image1']; ?>" alt="" height="90px" width="90px"></td>

            <td>
                  <a href="product.php?delete=<?php echo $pr['product_id']; ?>" onclick="return confirm('are you sure this record delete?')"><i class="fa-solid fa-trash"></i></a> 
                  <i class="fa-solid fa-arrows-left-right"></i>
                  <a href="product_edit.php?edit=<?php echo $pr['product_id']; ?>"><i class="fa-solid fa-pencil"></i></a>
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
new DataTable('#example', {
    order: [[1, 'asc']]
});

    </script>
</body>
</html>