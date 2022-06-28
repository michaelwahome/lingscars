<?php
  $this->extend('/templates/admin_template');
  $this->section('content');
?>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>
            Add Category
            <a href="<?= base_url('/admin/categories/read') ?>" class="btn btn-danger btn-sm float-end">Back</a>
          </h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/admin/categories/store') ?>" method="post" enctype="multipart/form-data">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group mb-2">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="category_name" required placeholder="Enter category name">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Description</label>
                  <input type="text" class="form-control" name="category_description" required placeholder="Enter category description">
                </div>
                <div class="col-md12">
                  <hr>
                  <button type="submit" class="btn btn-primary px-4 float-end">Save</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $this->endSection();
?>
