<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>USER</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Email <?php echo form_error('email') ?></td>
            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </td>
	    <tr><td>First Name <?php echo form_error('first_name') ?></td>
            <td><input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" />
        </td>
	    <tr><td>Last Name <?php echo form_error('last_name') ?></td>
            <td><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><textarea class="form-control" rows="3" name="password" id="password" placeholder="Password"><?php echo $password; ?></textarea>
        </td></tr>
	    <tr><td>Last Login <?php echo form_error('last_login') ?></td>
            <td><input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </td>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->