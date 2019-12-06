<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <br>
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($users as $user){?>
                    <tr>
                      <td><?php echo $user->id ?></td>
                      <td><?php echo $user->first_name ?></td>
                      <td><?php echo $user->last_name ?></td>
                      <td><?php echo $user->email ?></td>
                      <td><?php echo $user->city ?></td>
                      <td><?php echo $user->phone ?></td>
                      <td>
                      <a href="<?php echo site_url("users/edit/$user->id"); ?>" class="btn btn-primary">Edit</a>
                      <a href="<?php echo site_url("users/delete/$user->id"); ?>" class="btn btn-danger">Delete</a>

                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
