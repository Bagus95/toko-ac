<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Order | Toko AC Jepara</title>
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
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="<?php echo base_url();?>/assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src=<?php echo base_url();?>/assets/"js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo base_url();?>/assets/<?php echo base_url();?>/assets/js/jquery.easydropdown.js"></script>
<script src="<?php echo base_url();?>/assets/js/simpleCart.min.js"> </script>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</script>
<script src='http://my-shopping-cart-jquery.googlecode.com/files/jquery.js' type='text/javascript'/>
<script src='http://my-shopping-cart-jquery.googlecode.com/files/simplecart.js' type='text/javascript'/>
<script type='text/javascript'>
simpleCart.email = "hugetarif@gmail.com";
simpleCart.checkoutTo = Email;
simpleCart.currency = IDR;
simpleCart.cartHeaders = ['name','thumb_image','Quantity_input','Total'];
</script>
</head>
<body>
  <div class="banner">
   <?php $this->load->view('header/topmenu') ?>
   <div class="account-in">
    <div class="container">
           <div class="col-md-7 account-top">
								<form method="post" action="<?php echo base_url().'order/save_order' ?>" >
								    <input type="hidden" name="command" />
								        <h3 align="center">Detail Order</h3>
													<div>
														<span>Total Order</span>
														<strong><?php echo "Rp ".number_format($grand_total,0,',','.'); ?></strong>
													</div>
													<div>
														<span>Nama</span>
														<input type="text" class="form-control" name="name">
													</div>
													<div>
														<span>Alamat</span>
														<input type="text" class="form-control" name="address">
													</div>
													<div>
														<span>Email</span>
														<input type="text" class="form-control" name="email">
													</div>
													<div>
														<span>NO.Hp</span>
														<input type="text" class="form-control" name="phone">
													</div>
														<button type="submit" class="btn btn-default" value="Order Sekarang">Order Sekarang</button>
									</div>
								</form>
							</div>
						</div>
						<div class="clearfix"> </div>
			</div>
		<div class="middle_content">
			</div>
		<div class="content_middle_bottom">
				<div class="header-left" id="home">
				</div>
			</div>
		</div>
			<div class="footer">
				<div class="container">
		</div>
			<div class="clearfix"></div>
			<div class="copy">
			<p> &copy; 2017. All Rights Reserved | Designed by {Bagus Santoso}, {Muhamad Aziz} & {M. Rizal Abror}</a></p>
			</div>
		</div>
	</div>
</div>
<script>
					$(document).ready(function(){
					    $('#myTable').DataTable();
					});
				</script>
</body>
</html>
