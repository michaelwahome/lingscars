<?php
  $this->extend('/templates/main_template');
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
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col">Description</th>
                <th scope="col">isdeleted</th>
                </tr>
            </thead>
            <?php foreach ($category as $row): ?>
            <tbody>
                <tr>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><?php echo $row['category_description']; ?></td>
                <td><?php echo $row['is_deleted']; ?></td>
                <td><a href="/admin/categories/edit/<?php echo $row['category_id'] ?>" class="btn btn-primary btn-sm">Update</a></td>
                <td><a href="/admin/categories/delete/<?= $row['category_id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            </tbody>

            <?php endforeach; ?>
        </table>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $this->endSection();
?>
