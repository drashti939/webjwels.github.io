<?php
include('db.php');
if(isset($_REQUEST['cats']))
{
    $id=$_REQUEST['cats'];

  $url="select *from category where type_id='$id' ";
  $typecat=mysqli_query($abc,$url);
?>
  <option value="" hidden>Select Category Name</option>
  <?php
  while($auto=mysqli_fetch_array($typecat))
  {
    ?>
    <option value="<?php echo $auto['category_id']; ?>"><?php echo $auto['name']; ?></option>
    <?php
  }
 
}
?>