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
            Categories
            <a href="<?= base_url('/admin/categories/create') ?>" class="btn btn-primary btn-sm float-end">Add</a> <!--Not sure if the base URL is functional-->
          </h5>
        </div>
        <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Is deleted</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($category as $row): ?>
                <tr>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><img src="<?php echo base_url('public/uploads/'.$row['image']) ; ?>" style="height: 90px; width: 90px;" alt="<?php echo $row['category_name']; ?>"></td>
                <td><?php echo $row['is_deleted']; ?></td>
                <td style="display: flex; flex-direction: column; justify-content: space-evenly;">
                  <a href="/admin/categories/edit/<?php echo $row['category_id'] ?>" class="btn btn-primary btn-sm">Update</a>
                  <a href="/admin/categories/delete/<?= $row['category_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
                </tr>
              <?php endforeach; ?>
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
