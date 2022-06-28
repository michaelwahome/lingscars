<?php
  $this->extend('/templates/main_template');
  $this->section('content');
?>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5>
            Add Sub-Categories
            <a href="<?= base_url('/admin/subcategories/read') ?>" class="btn btn-danger btn-sm float-end">Back</a>
          </h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/admin/subcategories/store') ?>" method="post" enctype="multipart/form-data">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group mb-2">
                  <label for="name">Category</label>
                  <input type="text" class="form-control" name="category_id" required placeholder="Enter subcategory">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Sub Category Name</label>
                  <input type="text" class="form-control" name="subcategory_name" required placeholder="Enter Sub-category name">
                </div>
                <div class="form-group mb-2">
                  <label for="description">Description</label>
                  <textarea class="form-control" type="text" maxlength="500" required placeholder="Enter vehicle description" name="subcategory_description"></textarea>
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
