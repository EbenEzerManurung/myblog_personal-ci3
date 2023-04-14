<!DOCTYPE html>
<html>
<head>
<!-- Title -->
<title>Sign in</title>

<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="UTF-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Eben Nezer Manurung" />
<meta name="robots" content="noindex, nofollow">
<link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">
<!-- Styles -->
<link href="<?php echo base_url().'assets/plugins/pace-master/themes/blue/pace-theme-flash.css'?>" rel="stylesheet"/>
<link href="<?php echo base_url().'assets/plugins/uniform/css/uniform.default.min.css'?>" rel="stylesheet"/>
<link href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'assets/plugins/fontawesome/css/font-awesome.css'?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'assets/plugins/line-icons/simple-line-icons.css'?>" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url().'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css'?>" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url().'assets/plugins/waves/waves.min.css'?>" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url().'assets/plugins/switchery/switchery.min.css'?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'assets/plugins/3d-bold-navigation/css/style.css'?>" rel="stylesheet" type="text/css"/>	

<!-- Theme Styles -->
<link href="<?php echo base_url().'assets/css/modern.min.css'?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'assets/css/themes/green.css'?>" class="theme-color" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" type="text/css"/>

<script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/modernizr.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'?>"></script>


</head>
<body class="page-login">
<div class="b">
      <script type='text/javascript'>
        <!--
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        //-->
      </script>   
      
      <div id="clock"></div>
      <script type="text/javascript">
      <!--
      function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "W.I.B";
        } else {
            a_p = "W.I.B";
        }
        if (curr_hour == 0) {
            curr_hour = 0;
        }
        if (curr_hour > 24) {
            curr_hour = curr_hour - 24;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
      document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
      
      function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
      }
      setInterval(showTime, 500);
      //-->
      </script>
    
<main class="page-content">
<div class="page-inner">
<div class="container">
<div id="main-wrapper">
<div class="row">
     
<div class="card-body">
  <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">

<div class="col-md-12 center">
<div class="login-box">
<div class="table-responsive">
      
 
<a href="#" class="logo-name text-lg text-center">Form Login </a>
<p class="text-center m-t-md">Please login</p>
<?php echo $this->session->flashdata('msg');?>
<form class="m-t-md" action="<?php echo site_url('backend/login/auth');?>" method="post">
<div class="form-group">
<input type="email" class="form-control" name="username" placeholder="Email" required>
<div class="col-12">
</div>
</div>
</div>

<div class="input-group-append">
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password" required>
<div class="col-12">
</div>
</div>
</div>

<button type="submit" class="btn btn-success btn-block">Login</button>

</form>
<p class="text-center m-t-xs text-sm"><?php echo date('Y');?> &copy; my blog by Eben Nezer</p>
</div>
</div>
</div><!-- Row -->
</div><!-- Main Wrapper -->
</div>
</div>


<!-- Page Inner -->
</main><!-- Page Content -->




<!-- Javascripts -->
<script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/pace-master/pace.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/switchery/switchery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/uniform/jquery.uniform.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/waves/waves.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/modern.min.js'?>"></script>

</body>
</html>