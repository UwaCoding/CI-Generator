
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Ci_sessions Read</h3>
        <table class="table table-bordered">
	    <tr><td>Ip Address</td><td><?php echo $ip_address; ?></td></tr>
	    <tr><td>Timestamp</td><td><?php echo $timestamp; ?></td></tr>
	    <tr><td>Data</td><td><?php echo $data; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ci_sessions') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->