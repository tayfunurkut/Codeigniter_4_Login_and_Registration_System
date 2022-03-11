<div class="container">
  <div class="row">
            <div class="col-12 col-sm-12">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="<?=base_url('/logout') ?>" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Logout</a>
                    </li>
                  </ul>
                </div>

                <!-- /.card -->
              </div>
            </div>

          </div>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Welcome <?= session()->get('first_name') ?></h1>
    </div>
  </div>
</div>

<!-- <div class="container">
  <div class="row bg-dark">
    <div class="col-md-6 offset-md-2 text-white">
      <ul>
        <li>Ci4 Login</li>
        <li>Dashboard</li>
        <li>Welcome</li>
      </ul>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12 text-center">
        Welcome
    </div>
  </div>

</div> -->
