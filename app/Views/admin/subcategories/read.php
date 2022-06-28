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
            Sub Categories
            <a href="<?= base_url('/admin/subcategories/create') ?>" class="btn btn-primary btn-sm float-end">Add</a>
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category ID</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
            </thead>
            <?php foreach ($subcategory as $row): ?>
              <tbody>
              <tr>
                <td><?php echo $row['subcategory_id']; ?></td>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['subcategory_name']; ?></td>
                <td><?php echo $row['subcategory_description']; ?></td>
                <td><a href="/subcategories/edit/<?php echo $row['subcategory_id'] ?>" class="btn btn-primary btn-sm">Update</a></td>
                <td><a href="/subcategories/delete/<?= $row['subcategory_id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
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

