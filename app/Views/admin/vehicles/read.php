<?php
  $this->extend('/templates/admin_template');
  $this->section('content');
?>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <?php
        if (session()->getFlashdata('status'))
        {
          echo "<h5>".session()->getFlashdata('status')."</h5>";
        }
      ?>
      <div class="card">
        <div class="card-header">
          <h5>
            Vehicles
            <a href="<?= base_url('/admin/vehicles/create') ?>" class="btn btn-primary btn-sm float-end">Add</a> <!--Not sure if the base URL is functional-->
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-hover table-bordered" id="vehicles-list">
            <thead>
              <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Sub-category</th>
                <th>Vehicle model</th>
                <th>Unit_price</th>
                <th>Quantity available</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
            if ($vehicles):
              foreach ($vehicles as $row):
            ?>
            <tr>
              <td><?php echo $row['vehicle_id']; ?></td>
              <td><?php echo $row['category_id']; ?></td>
              <td><?php echo $row['subcategory_id']; ?></td>
              <td><?php echo $row['vehicle_model']; ?></td>
              <td><?php echo $row['unit_price']; ?></td>
              <td><?php echo $row['available_quantity']; ?></td>
              <td><img src="<?php echo base_url('public/uploads/'.$row['image']) ; ?>" style="height: 90px; width: 90px;" alt="<?php echo $row['vehicle_model']; ?>"></td>
              <td style="display: flex; flex-direction: column; justify-content: space-evenly;">
                <a href="/admin/vehicles/edit/<?php echo $row['vehicle_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="/admin/vehicles/delete/<?php echo $row['vehicle_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            <?php
              endforeach;
              endif;
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $this->endSection();
?>
