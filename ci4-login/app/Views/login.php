    <div class="container mt-5">
      <div class="col-md-6 offset-md-3">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Login Dashboard</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="post">
            <div class="card-body">
              <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              </div>
          <!-- /.card-body -->
            <?php if (isset($errors)) { ?>

              <div class="alert alert-danger">
                  <?= $errors->listErrors() ?>
              </div>

          <?php  } ?>

            <?php
              if (session()->get('success')) { ?>

                <div class="alert alert-success">
                  <?= session()->get('success') ?>
                </div>


            <?php  }

             ?>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button><br>
              <a class="right" href="register">Don't have you an account?</a>



            </div>
          </form>
        </div>
      </div>
    </div>
