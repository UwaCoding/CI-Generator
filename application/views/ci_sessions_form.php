<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>CI_SESSIONS</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Ip Address <?php echo form_error('ip_address') ?></td>
            <td><input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="Ip Address" value="<?php echo $ip_address; ?>" />
        </td>
	    <tr><td>Timestamp <?php echo form_error('timestamp') ?></td>
            <td><input type="text" class="form-control" name="timestamp" id="timestamp" placeholder="Timestamp" value="<?php echo $timestamp; ?>" />
        </td>
	    <tr><td>Data <?php echo form_error('data') ?></td>
            <td><input type="text" class="form-control" name="data" id="data" placeholder="Data" value="<?php echo $data; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ci_sessions') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->