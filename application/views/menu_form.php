<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>MENU</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Name <?php echo form_error('name') ?></td>
            <td><input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </td>
	    <tr><td>Link <?php echo form_error('link') ?></td>
            <td><input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" />
        </td>
	    <tr><td>Icon <?php echo form_error('icon') ?></td>
            <td><input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
        </td>
	    <tr><td>Is Active <?php echo form_error('is_active') ?></td>
            <td><input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
        </td>
	    <tr><td>Is Parent <?php echo form_error('is_parent') ?></td>
            <td><input type="text" class="form-control" name="is_parent" id="is_parent" placeholder="Is Parent" value="<?php echo $is_parent; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->