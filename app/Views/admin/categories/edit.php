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
            Edit Categories
            <a href="<?= base_url('/admin/categories/read') ?>" class="btn btn-danger btn-sm float-end">Back</a>
          </h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('admin/categories/update/'.$category['category_id']) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group mb-2">
                  <label for="name">Name</label>
                  <input type="text" value="<?= $category['category_name']; ?>" class="form-control" name="category_name" required placeholder="Enter category name">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Description</label>
                  <input type="text" value="<?= $category['category_description']; ?>" class="form-control" name="category_description" required placeholder="Enter category description">
                </div>
              </div>
              <div class="form-group mb-2">
                <label for="name">Image</label>
                <input type="file" value="<?= $category['image']; ?>" class="form-control" name="images[]" required placeholder="Enter vehicle image" multiple>
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
