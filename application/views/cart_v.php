<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Daftar Cart | Toko AC Jepara</title>
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
<script>
function clear_cart() {
	var result = confirm('Apakah Anda yakin menghapus semua order?');

	if(result) {
		window.location = "<?php echo base_url(); ?>cart/remove/all";
	}else{
		return false;
	}
}
</script>
</head>
<body>
  <div class="banner">
   <?php $this->load->view('header/topmenu') ?>
   <div class="main">
    <div class="container">
      <ul class="content-home">
        <ul class="products">
           <div class="col-sm-3 col-md-3">
										<h1 align="center">Daftar Cart</h1>
                    <br>
										<input type="button"  class="btn btn-info" value="Lanjutkan belanja" onclick="window.location='products'" />
                  </br>
                  </div>
									<div style="color:#F00"><?php echo $message?></div>
									<table id="myTable" class="table table-striped table-bordered table-hover">
										<?php if ($cart = $this->cart->contents()): ?>
										<tr bgcolor="#FFFFFF" style="font-weight:bold">
											<td>ID</td>
											<td>Nama Produk</td>
											<td>Harga</td>
											<td>Jumlah</td>
											<td>Harga</td>
											<td>Opsi</td>
										</tr>
										<?php
										echo form_open('cart/update_cart');
										$grand_total = 0; $i = 1;

										foreach ($cart as $item):
											echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
											echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
											echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
											echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
											echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
										?>
										<tr bgcolor="#FFFFFF">
											<td>
												<?php echo $i++; ?>
											</td>
											<td>
												<?php echo $item['name']; ?>
											</td>
											<td>
												<?php echo "Rp ".number_format($item['price'],0,',','.'); ?>
											</td>
											<td>
												<?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
											</td>
											<?php $grand_total = $grand_total + $item['subtotal']; ?>
											<td>
												<?php echo "Rp ".number_format($item['subtotal'],0,',','.') ?>
											</td>
											<td>
												<?php echo anchor('cart/remove/'.$item['rowid'],'Batalkan', [
                            'class' => 'btn btn-danger',
                            'role'  => 'button']); ?>
											</td>
											<?php endforeach; ?>
										</tr>
										<tr>
											<td><b>Order Total: <?php echo "Rp ".number_format($grand_total,0,',','.'); ?></b></td>
											<td colspan="5" align="right"><input type="button" class="btn btn-danger" value="Hapus Cart" onclick="clear_cart()">
													<input type="submit" class="btn btn-info" value="Update Cart">
													<?php echo form_close(); ?>
													<input type="button" class="btn btn-success" value="Check Out" onclick="window.location='order'"></td>
										</tr>
										<?php endif; ?>
									</table>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</ul>
				</ul>
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
