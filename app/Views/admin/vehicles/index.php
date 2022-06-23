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
            Vehicles
            <a href="<?= base_url('/admin/vehicles/create') ?>" class="btn btn-primary btn-sm float-end">Add</a> <!--Not sure if the base URL is functional-->
          </h5>
        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $this->endSection();
?>
