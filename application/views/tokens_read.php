
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tokens Read</h3>
        <table class="table table-bordered">
	    <tr><td>Token</td><td><?php echo $token; ?></td></tr>
	    <tr><td>User Id</td><td><?php echo $user_id; ?></td></tr>
	    <tr><td>Created</td><td><?php echo $created; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tokens') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->