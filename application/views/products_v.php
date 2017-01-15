<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Toko AC Jepara</title>
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
   <div class="main">
    <div class="container">
      <ul class="content-home">
        <ul class="products">
           <div class="col-sm-3 col-md-3">
							<h1 align="center">Daftar Produk</h1>
							<table border="0" cellpadding="2px" width="600px">
								<?php
									foreach ($products as $product){
										$id = $product['serial'];
										$name = $product['name'];
										$description = $product['description'];
										$price = $product['price'];
								?>
						    	<tr>
						        	<td><img src="<?php echo $product['picture']?>" /></td>
						            <td><b><?php echo $name; ?></b><br />
						            		<?php echo $description; ?><br />
						                    Harga:<big style="color:green">
						                    Rp <?php echo number_format($price,0,',','.'); ?></big><br /><br />
						                    <?php
											echo form_open('cart/add');
											echo form_hidden('id', $id);
											echo form_hidden('name', $name);
											echo form_hidden('price', $price);
											echo form_submit('action', 'Tambahkan ke Cart');
											echo form_close();
											?>
									</td>
								</tr>
						        <tr><td colspan="2"><hr size="1" /></td>
						        <?php } ?>
						    </table>
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
</body>
</html>
