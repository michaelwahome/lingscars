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
            Edit Users
            <a href="<?= base_url('/admin/users/read') ?>" class="btn btn-danger btn-sm float-end">Back</a>
          </h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('/admin/users/update/' . $user['user_id']) ?>" method="post">
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group mb-2" style="display: flex; flex-direction: column; justify-content: space-evenly;">
                  <label class="label" for="gender">User role</label>
                  <select class="input dropdown dropdown-item" name="role_id" id="role_id" required>
                      <option  value="<?= $user['role_id'] ?>" selected>Old role</option>
                      <?php foreach($roles as $role){ ?>
                        <option value="<?php echo $role["role_id"]; ?>"><?php echo $role["role_name"]; ?></option>
                       <?php } ?> 
                      <div class="error"></div>
                  </select>
                </div>
                <div class="form-group mb-2">
                  <label for="name">First Name</label>
                  <input value="<?= $user['first_name'] ?>" type="text" class="form-control" name="first_name" required placeholder="Enter first name">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Last Name</label>
                  <input value="<?= $user['last_name'] ?>" type="text" class="form-control" name="last_name" required placeholder="Enter last name">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Email</label>
                  <input value="<?= $user['email'] ?>" type="text" class="form-control" name="email" required placeholder="Enter email">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Password</label>
                  <input value="<?= $user['password'] ?>" type="text" class="form-control" name="password" required placeholder="Enter password">
                </div>
                <div class="form-group mb-2">
                  <label for="name">Gender</label>
                  <input value="<?= $user['gender'] ?>" type="text" class="form-control" name="gender" required placeholder="Enter gender">
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

