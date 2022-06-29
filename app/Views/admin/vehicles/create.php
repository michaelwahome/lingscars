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
            Add Vehicles
            <a href="<?= base_url('/admin/vehicles/read') ?>" class="btn btn-danger btn-sm float-end">Back</a>
          </h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/admin/vehicles/store'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">

              <div class="col-md-12">
                <div class="form-group mb-2" style="display: flex; flex-direction: column; justify-content: space-evenly;">
                  <label class="label" for="name">Vehicle Subcategory</label>
                  <select class="input dropdown dropdown-item" name="subcategory_id" id="subcategory_id" required>
                      <option value="" selected disabled>Enter subcategory</option>
                      <?php foreach($subcategories as $subcategory){ ?>
                        <option value="<?php echo $subcategory["subcategory_id"]; ?>"><?php echo $subcategory["subcategory_name"]; ?></option>
                       <?php } ?> 
                  </select>
                </div>
                <div class="form-group mb-2">
                  <label for="name">Vehicle Model</label>
                  <input type="text" class="form-control" name="vehicle_model" required placeholder="Enter vehicle model">
                </div>
                <div class="form-group mb-2">
                  <label for="description">Description</label>
                  <textarea class="form-control" type="text" maxlength="500" required placeholder="Enter vehicle description" name="vehicle_description"></textarea>
                  <!--<input type="text" class="form-control" name="vehicle_description" required placeholder="Enter vehicle description">-->
                </div>
                <div class="form-group mb-2">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" name="unit_price" required placeholder="Enter vehicle price">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Quantity Available</label>
                  <input type="text" class="form-control" name="available_quantity" required placeholder="Enter quantity available">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Manufacturer</label>
                  <input type="text" class="form-control" name="manufacturer" required placeholder="Enter vehicle manufacturer">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Year of manufacture</label>
                  <input type="text" class="form-control" name="year_of_manufacture" required placeholder="Enter year of manufacture ">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Milage</label>
                  <input type="text" class="form-control" name="mileage" required placeholder="Enter vehicle mileage">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Registration</label>
                  <input type="text" class="form-control" name="registration" required placeholder="Enter vehicle registration">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Vehicle condition</label>
                  <input type="text" class="form-control" name="vehicle_condition" required placeholder="Enter vehicle condition">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Serial Number</label>
                  <input type="text" class="form-control" name="serial_number" required placeholder="Enter serial number">
                </div>
                <div class="form-group mb-2">
                  <label for="price">Colour</label>
                  <input type="text" class="form-control" name="color" required placeholder="Enter vehicle colour">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Image</label>
                  <input type="file" class="form-control" name="images[]" required placeholder="Enter vehicle image" multiple>
                </div>
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
