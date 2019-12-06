<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <br>
      <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create new User</h3>
              </div>
              <!-- /.card-header -->
              <form role="form" action="<?php echo site_url($url); ?>" method="POST">
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">

                     <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First Name" value="<?php echo isset($user->first_name) ? $user->first_name : '' ?>">
                     </div>

                    <div class="form-group">
                        <label for="last-name">last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" value="<?php echo isset($user->last_name) ? $user->last_name : '' ?>">
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo isset($user->email) ? $user->email : '' ?>">
                     </div>

                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                     </div>

                     <div class="form-group">
                        <label for="city">City</label>
                        <input type="tect" name="city" class="form-control" id="city" placeholder="Enter city" value="<?php echo isset($user->city) ? $user->city : '' ?>">
                     </div>

                     <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="<?php echo isset($user->phone) ? $user->phone : '' ?>">
                     </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
