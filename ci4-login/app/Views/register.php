<div class="container mt-4">
  <div class="col-md-6 offset-md-3">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header text-center">
        <h3 class="card-title">Register</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="">
        <div class="card-body">
          <div class="form-group mt-2">
            <label><h6>First Name</h6></label>
            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?= set_value('first_name') ?>">
          </div>
          <div class="form-group mt-2">
            <label><h6>Last Name</h6></label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?= set_value('last_name') ?>">
          </div>
          <div class="form-group mt-2">
            <label><h6>Email address</h6></label>
            <input type="email" name="email" class="form-control"placeholder="Enter email" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group mt-2">
            <label><h6>Password</h6></label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group mt-2">
            <label><h6>Password Verify</h6></label>
            <input type="password" name="confpassword" class="form-control" placeholder="Password Verify">
          </div>
        </div>
        <!-- /.card-body -->

<?php if (isset($errors)) { ?>
  <div class="alert alert-danger">
    <?= $errors->listErrors(); ?>
  </div>

<?php } ?>


        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button><br>
          <a href="<?php echo base_url(''); ?>">Do you have already an account</a>
        </div>
      </form>
    </div>
  </div>
</div>
