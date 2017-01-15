<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Laman Login | Toko AC Jepara</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="<?php echo base_url();?>/assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo base_url();?>/assets/js/jquery.easydropdown.js"></script>
<script src="<?php echo base_url();?>/assets/js/simpleCart.min.js"> </script>
</head>
<body>
   <div class="banner">
   	<?php $this->load->view('header/topmenu') ?>
	   <div class="account-in">
	   	 <div class="container">
	   	   <h3>Silahkan Login</h3>
	   	   <div><?=validation_errors()?></div>
	   	   <div><?=$this->session->set_flashdata('error')?></div>
			<div class="col-md-7 account-top">
			   <?=form_open('login', ['class'=>'form-horizontal'])?>
				<div>
					<span>Email</span>
					<input type="text" class="form-control" name="username">
				</div>
				<div>
					<span class="pass">Password</span>
					<input type="password" class="form-control" name="password">
				</div>
					<button type="submit" class="btn btn-default">Login</button>
			   </form>
			</div>
			<div class="col-md-5 left-account ">
				<div class="clearfix"> </div>
			</div>
		    <div class="clearfix"> </div>
		  </div>
	   </div>
	</div>
   <div class="footer">
   	 <div class="container">
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2017. All Rights Reserved | Designed by {Bagus Santoso}, {Muhamad Aziz} & {M. Rizal Abror}</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>
