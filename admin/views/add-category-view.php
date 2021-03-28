<?php  

$obj_ctg_add = new adminLogin();
if(isset($_POST['add_ctg'])){
    $return_msg = $obj_ctg_add->add_category($_POST);
}

?>

<?php

if(isset($return_msg)){
  echo $return_msg;
}

?>
<br><br>
<h2>Add Category</h2>
<form action="" method="POST">
    <label for="ctg_name">Category Name</label>
    <input type="text" name="ctg_name" class="form-control mb-3">

    <label for="ctg_description">Category Description</label>
    <input type="text" name="ctg_description" class="form-control mb-3">

    <label for="ctg_status">Category Status</label>
    <select name="ctg_status" class="form-control mb-5">
        <option value="0">Unpublished</option>
        <option value="1">Published</option>
    </select>

    <input type="submit" value="Add Category" name="add_ctg" class="btn btn-info">
</form>