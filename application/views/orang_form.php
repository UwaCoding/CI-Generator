<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>ORANG</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama Orang <?php echo form_error('nama_orang') ?></td>
            <td><input type="text" class="form-control" name="nama_orang" id="nama_orang" placeholder="Nama Orang" value="<?php echo $nama_orang; ?>" />
        </td>
	    <tr><td>Alamat Orang <?php echo form_error('alamat_orang') ?></td>
            <td><input type="text" class="form-control" name="alamat_orang" id="alamat_orang" placeholder="Alamat Orang" value="<?php echo $alamat_orang; ?>" />
        </td>
	    <input type="hidden" name="orang_id" value="<?php echo $orang_id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('orang') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->