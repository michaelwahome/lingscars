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
            Users
            <a href="<?= base_url('/admin/users/create') ?>" class="btn btn-primary btn-sm float-end">Add</a>
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Role</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Gender</th>
              <th scope="col">Action</th>
            </tr>
            </thead>
            <?php foreach ($user as $row): ?>
              <tbody>
              <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td>
                  <?php 
                    foreach($roles as $role){
                      if($role["role_id"] == $row["role_id"]) { 
                        echo $role["role_name"]; 
                      }
                    } 
                  ?>
                </td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td style="display: flex; flex-direction: column; justify-content: space-evenly;">
                  <a href="/users/edit/<?php echo $row['user_id'] ?>" class="btn btn-primary btn-sm">Update</a>
                  <a href="/users/delete/<?= $row['user_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
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

