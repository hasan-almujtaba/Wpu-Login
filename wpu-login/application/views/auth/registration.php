  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                  <small id="name" class="form-text text-danger pl-2"><?= form_error('name'); ?></small>
                </div>
                <div class="form-group">
                  <input type="text" name="email"class="form-control form-control-user" id="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                  <small id="email" class="form-text text-danger pl-2"><?= form_error('email'); ?></small>

                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                    <small id="password" class="form-text text-danger pl-2"><?= form_error('password'); ?></small>

                  
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passwordConfirm" class="form-control form-control-user" id="passwordConfirm" placeholder="Confirm Password">

                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
