<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CPANEL | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
  
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>templates/css/mdb.css">
       
        
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/iCheck/square/blue.css">

        <!-- Bootstrap core CSS -->
      
    <!-- Material Design Bootstrap -->
    <link href="templates/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="templates/css/style.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


    <body class="hold-transition login-page">
        <br>
            <div class="login-logo">
            <p align="center"> <img class="profile-img" src="http://pre11.deviantart.net/df9e/th/pre/i/2015/115/3/9/baymax_by_misterthyme-d8r1005.png"
                    alt="" height="150" width="150"> </p>
            </div><!-- /.login-logo -->


<div class="col-lg-4 col-lg-offset-4">
    <h2>Hello World</h2>
    <h5>Silahkan Mendaftar</h5>     
<?php 
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/register', $fattr); ?>
    <br>
   <form class="form-inline">
    <div class="md-form">
      <i class="fa fa-envelope prefix"></i>
      <input type="text" id="form4" class="form-control validate" name="firstname" id="firstname">
    <label for="form4" data-error="wrong" data-success="right">Firstname</label>

    </div>
    <br>
    <div class="md-form">
      <i class="fa fa-envelope prefix"></i>
      <input type="text" id="form1" class="form-control validate" name="lastname" id="lastname">
    <label for="form1" data-error="wrong" data-success="right">Lastname</label>
    <br>
    <div class="md-form">
      <i class="fa fa-envelope prefix"></i>
      <input type="email" id="form9" class="form-control validate" name="email" id="email">
    <label for="form9" data-error="wrong" data-success="right">Email</label>

    </div>
  
    <button type="submit" name="Register" class="btn btn-primary btn-block">Sign Up</button>

 <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>templates/js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>templates/js/tether.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>templates/js/mdb.min.js"></script>
        <script src="<?php echo base_url(); ?>templates/js/jquery-3.1.1.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>templates/js/tether.js"></script>
        <!-- iCheck -->
        
</body>
</html>