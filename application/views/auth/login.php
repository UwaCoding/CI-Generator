<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CPANEL | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="hold-transition login-page">


        <div class="login-box">
            <div class="login-logo">
            <p align="center"> <img class="profile-img" src="http://pre11.deviantart.net/df9e/th/pre/i/2015/115/3/9/baymax_by_misterthyme-d8r1005.png"
                    alt="" height="150" width="150"> </p>
                <a href="<?php echo base_url(); ?>"><b>HALAMAN</b> LOGIN</a>
            </div><!-- /.login-logo -->
               
            <div class="login-box-body">
                <p class="login-box-msg"><?php echo $message; ?></p>
                <?php echo form_open('auth/login'); ?>
                <div class="form-group has-feedback">
                    <?php echo form_input($identity); ?>

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?php echo form_input($password); ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> INGAT SAYA
                </div>
                <div class="row">

                    <div class="col-xs-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> LOGIN</button>
                    </div><!-- /.col -->

                    <br>
                    <p align="center">Atau</p>
                     <div class="col-xs-12">
                      <input type="submit" class="btn bg-olive btn-block" value="Register">
                    </div><!-- /.col -->

                </div>
                </form>





            </div><!-- /.login-box-body -->
            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        </div><!-- /.login-box -->


        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <script type="text/javascript">
            
            (function (window, $) {
  
  $(function() {
    
    
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
            xPos = event.pageX - btnOffset.left,
            yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);
        </script>
    </body>
</html>
