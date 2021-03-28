<?php

$obj_ctg = new adminLogin();
$ctg_data = $obj_ctg->manage_category();

?>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Category ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th>
      <th scope="col">Category Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($ctg = mysqli_fetch_assoc($ctg_data)){ ?>
        <tr>
        <th scope="row"></th>
        <td><?php echo $ctg['id']; ?></td>
        <td><?php echo $ctg['ctg_name']; ?></td>
        <td><?php echo $ctg['ctg_description']; ?></td>
        <td><?php echo $ctg['ctg_status']; ?></td>
        <td><a class="btn btn-info" href="">Update</a><a class="btn btn-danger ml-2" href="">Delete</a></td>
        </tr>
    <?php } ?>
  </tbody>
</table>